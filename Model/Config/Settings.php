<?php

namespace Magezil\Bestseller\Model\Config;

use DateTime;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Settings
{
    const MODULE_ENABLE = 'magezil_bestseller/general/enable';
    const BESTSELLER_USER_IS_LOGGED_IN = 'magezil_bestseller/general/user_logged';
    const BESTSELLER_PREIOD_TO_FILTER = 'magezil_bestseller/general/period';
    const BESTSELLER_TITLE = 'magezil_bestseller/general/title';
    const BESTSELLER_DISPLAY_LIMIT = 'magezil_bestseller/general/display_limit';
    const BESTSELLER_TEMPLATE_TYPE = 'magezil_bestseller/template_type/is_magento_template';
    const BESTSELLER_CUSTOM_TEMPLATE_SHOW_WISHLIST = 'magezil_bestseller/template_type/show_wishlist';
    const BESTSELLER_CUSTOM_TEMPLATE_SHOW_COMPARE = 'magezil_bestseller/template_type/show_compare';
    const BESTSELLER_CUSTOM_TEMPLATE_QTY_PRODUCTS = 'magezil_bestseller/template_type/qty_products';
    const BESTSELLER_PERIOD_TYPE = 'magezil_bestseller/filter/period';
    const BESTSELLER_PERIOD_FROM_DATE = 'magezil_bestseller/filter/from_date';
    const BESTSELLER_PERIOD_TO_DATE = 'magezil_bestseller/filter/to_date';

    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::MODULE_ENABLE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function isCustomerMustBeLoggedIn(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_USER_IS_LOGGED_IN, ScopeInterface::SCOPE_WEBSITE);
    }

    public function hasBestsellerTitle(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_TITLE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function getBestsellerTitle(): string
    {
        return $this->scopeConfig->getValue(self::BESTSELLER_TITLE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function hasDisplayLimit(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_DISPLAY_LIMIT, ScopeInterface::SCOPE_WEBSITE);
    }

    public function getDisplayLimit(): string
    {
        return $this->scopeConfig->getValue(self::BESTSELLER_DISPLAY_LIMIT, ScopeInterface::SCOPE_WEBSITE);
    }

    public function isMagentoListingProduct(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_TEMPLATE_TYPE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function isWishlistButtonEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_CUSTOM_TEMPLATE_SHOW_WISHLIST, ScopeInterface::SCOPE_WEBSITE);
    }

    public function isCompareButtonEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_CUSTOM_TEMPLATE_SHOW_COMPARE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function isQtyButtonEnable(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_CUSTOM_TEMPLATE_QTY_PRODUCTS, ScopeInterface::SCOPE_WEBSITE);
    }

    public function getPeriodType(): string
    {
        return $this->scopeConfig->getValue(self::BESTSELLER_PERIOD_TYPE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function hasPeriodFromDate(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_PERIOD_FROM_DATE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function getPeriodFromDate(): DateTime
    {
        return new DateTime($this->scopeConfig->getValue(self::BESTSELLER_PERIOD_FROM_DATE, ScopeInterface::SCOPE_WEBSITE));
    }

    public function hasPeriodToDate(): bool
    {
        return $this->scopeConfig->isSetFlag(self::BESTSELLER_PERIOD_TO_DATE, ScopeInterface::SCOPE_WEBSITE);
    }

    public function getPeriodToDate(): DateTime
    {
        return new DateTime($this->scopeConfig->getValue(self::BESTSELLER_PERIOD_TO_DATE, ScopeInterface::SCOPE_WEBSITE));
    }
}
