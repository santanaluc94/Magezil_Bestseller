<?php

namespace Magezil\Bestseller\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Settings
{
    const MODULE_ENABLE = 'magezil_bestseller/general/enable';
    const BESTSELLER_TITLE = 'magezil_bestseller/general/title';
    const BESTSELLER_DISPLAY_LIMIT = 'magezil_bestseller/general/display_limit';

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
}
