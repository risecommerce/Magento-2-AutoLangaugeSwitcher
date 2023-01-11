<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\AutoLanguageSwitcher\Plugin\UrlRewrite\Model\StoreSwitcher;

class RewriteUrlPlugin
{
    /**
     * @var \Risecommerce\AutoLanguageSwitcher\Model\Config
     */
    protected $config;

    /**
     * Constructor.
     *
     * @param \Risecommerce\AutoLanguageSwitcher\Model\Config $config
     */
    public function __construct(
        \Risecommerce\AutoLanguageSwitcher\Model\Config $config
    ) {
        $this->config = $config;
    }

    /**
     * Disable switch if module is enabled
     *
     * @param mixed $subject
     * @param \Closure $proceed
     * @param mixed $fromStore
     * @param mixed $targetStore
     * @param mixed $redirectUrl
     * @return string
     */
    public function aroundSwitch(
        $subject,
        \Closure $proceed,
        $fromStore,
        $targetStore,
        $redirectUrl
    ) {

        $result = $proceed($fromStore, $targetStore, $redirectUrl);

        if (false !== strpos($result, '/' . $fromStore->getCode() . '/')) {
            $result = str_replace('/' . $fromStore->getCode() . '/', '/' . $targetStore->getCode() . '/', $result);
        }

        return $result;
    }
}
