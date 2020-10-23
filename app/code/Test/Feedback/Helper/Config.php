<?php

namespace Test\Feedback\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\Store;


/**
 * Class Config
 * @package Test\Feedback\Helper
 */
class Config extends AbstractHelper
{
    /**
     * Constants defined xml path to store configurations of test feedback module.
     *
     * @access  static
     * @var     string
     */
    const MODULE_ENABLED = 'feedback/general/enable';

    const PAGE_URL_KEY = 'feedback/general/page_url_key';

    const PAGE_TITLE = 'feedback/general/page_title';

    const PAGE_META_TITLE = 'feedback/general/meta_title';

    const PAGE_META_DESCRIPTION = 'feedback/general/meta_description';

    const PAGE_META_KEYWORDS = 'feedback/general/meta_keywords';

    const PAGE_FORM_ENABLED = 'feedback/form/enable';

    const PAGE_FORM_TITLE = 'feedback/form/title';

    /**
     * Check if feedback module is enable.
     *
     * @access  public
     * @param null|int|string|Store $store
     * @return  bool
     */
    public function isModuleEnabled($store = null): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::MODULE_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageUrlKey($store = null): string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_URL_KEY,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageTitle($store = null):string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_TITLE,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageMetaTitle($store = null):string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_META_TITLE,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageMetaDescription($store = null):string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_META_DESCRIPTION,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageMetaKeywords($store = null):string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_META_KEYWORDS,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    /**
     * Check if feedback page form is enable.
     *
     * @access  public
     * @param null|int|string|Store $store
     * @return  bool
     */
    public function isPageFormEnabled($store = null): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::PAGE_FORM_ENABLED,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    public function getPageFormTitle($store = null):string
    {
        return $this->scopeConfig->getValue(
            self::PAGE_FORM_TITLE,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
