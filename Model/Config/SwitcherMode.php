<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */
namespace Risecommerce\AutoLanguageSwitcher\Model\Config;

/**
 * Class SwitcherMode
 * @package Risecommerce\AutoLanguageSwitcher\Model\Config
 */
class SwitcherMode implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return    [
            ['label' => __('Auto Redirect'),     'value' => 0],
            ['label' => __('Suggestion Popup'), 'value' => 1]
        ];
    }
}
