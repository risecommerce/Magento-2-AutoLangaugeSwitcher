<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\AutoLanguageSwitcher\Plugin\Store\Model;

use Risecommerce\AutoLanguageSwitcher\Model\Config;

/**
 * Class StorePlugin
 * @package Risecommerce\AutoLanguageSwitcher\Plugin\Store\Model
 */
class StorePlugin
{
    /**
     * StorePlugin constructor.
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * @param \Magento\Store\Model\Store $subject
     * @param bool $fromStore
     * @return array
     */
    public function beforeGetCurrentUrl(
        \Magento\Store\Model\Store $subject,
        $fromStore = true
    ) {
        if (false && $this->config->isEnabled()) {
            return [false];
        }
    }
}
