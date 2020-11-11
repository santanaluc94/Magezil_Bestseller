<?php

namespace Magezil\Bestseller\Block\Product;

use Magento\Catalog\Block\Product\ListProduct;
use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Data\Helper\PostHelper;
use Magento\Catalog\Model\Layer\Resolver;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\Url\Helper\Data;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Framework\View\Element\BlockFactory;
use Magento\Customer\Model\Session;
use Magezil\Bestseller\Model\Config\Settings;
use Magento\Framework\App\ObjectManager;

class BestSellerListing extends ListProduct
{
    protected $magentoTemplate = 'Magento_Catalog::product/list.phtml';
    protected $customTemplate = 'Magezil_Bestseller::custom_bestseller_listing.phtml';
    protected $bestSellersCollectionFactory;
    protected $storeManager;
    protected $productFactory;
    protected $blockFactory;
    protected $bestsellerConfig;

    public function __construct(
        Context $context,
        PostHelper $postDataHelper,
        Resolver $layerResolver,
        CategoryRepositoryInterface $categoryRepository,
        Data $urlHelper,
        CollectionFactory $bestSellersCollectionFactory,
        StoreManagerInterface $storeManager,
        ProductCollectionFactory $productFactory,
        BlockFactory $blockFactory,
        Settings $bestsellerConfig,
        Session $customerSession,
        $data = []
    ) {
        parent::__construct(
            $context,
            $postDataHelper,
            $layerResolver,
            $categoryRepository,
            $urlHelper,
            $data
        );
        $this->bestSellersCollectionFactory = $bestSellersCollectionFactory;
        $this->storeManager = $storeManager;
        $this->productFactory = $productFactory;
        $this->blockFactory = $blockFactory;
        $this->bestsellerConfig = $bestsellerConfig;
        $this->customerSession = $customerSession;
    }

    public function _prepareLayout(): self
    {
        if ($this->bestsellerConfig->hasBestsellerTitle()) {
            $this->setData('block_title', __($this->bestsellerConfig->getBestsellerTitle()));
        } else {
            $this->setData('block_title', __('Bestseller Products'));
        }

        return $this;
    }

    protected function _getProductCollection(): ProductCollection
    {
        $productIds = [];

        $bestSellers = $this->bestSellersCollectionFactory->create()
            ->setPeriod($this->bestsellerConfig->getPeriodType());

        foreach ($bestSellers as $product) {
            $productDate = new \DateTime($product->getPeriod());

            if ($this->bestsellerConfig->hasPeriodFromDate()) {
                if ($productDate < $this->bestsellerConfig->getPeriodFromDate()) {
                    continue;
                }
            }

            if ($this->bestsellerConfig->hasPeriodToDate()) {
                if ($productDate > $this->bestsellerConfig->getPeriodToDate()) {
                    continue;
                }
            }

            $productIds[] = $product->getProductId();
        }

        $collection = $this->productFactory->create();
        $collection->addMinimalPrice()
            ->addIdFilter($productIds)
            ->addFinalPrice()
            ->addTaxPercents()
            ->addAttributeToSelect('*')
            ->addStoreFilter($this->storeManager->getStore()->getId());

        if ($this->bestsellerConfig->hasDisplayLimit()) {
            $collection->setPageSize((int) $this->bestsellerConfig->getDisplayLimit());
        }

        return $collection;
    }

    public function getMagentoListingBlock(): ListProduct
    {
        return $this->blockFactory
            ->createBlock(ListProduct::class)
            ->setCollection($this->getLoadedProductCollection())
            ->setTemplate($this->magentoTemplate);
    }

    public function getCustomListingBlock(): ListProduct
    {
        return $this->blockFactory
            ->createBlock(self::class)
            ->setCollection($this->getLoadedProductCollection())
            ->setTemplate($this->customTemplate);
    }

    public function customerIsLogged(): bool
    {
        // Customer session is not working by dependency injection
        return ObjectManager::getInstance()->create(Session::class)->isLoggedIn();
    }

    public function getBestsellerConfig(): Settings
    {
        return $this->bestsellerConfig;
    }

    public function isShowBlock(): bool
    {
        // Check module is enable in admin
        if (!$this->bestsellerConfig->isEnabled()) {
            return false;
        }

        // Check config is enable and if is true, show block only user is logged in
        if ($this->bestsellerConfig->isCustomerMustBeLoggedIn()) {
            return $this->customerIsLogged();
        }

        // Show block if product were bought together
        if (count($this->getLoadedProductCollection()) === 0) {
            return false;
        }

        return true;
    }
}
