<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\AutoLanguageSwitcher\Model\Config;

/**
 * Class AllowedPages
 * @package Risecommerce\AutoLanguageSwitcher\Model\Config
 */
class AllowedPages implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return    [
            ['label' => __('All pages'),                       'value' => 0],
            ['label' => __('Specific pages'),                  'value' => 1],
            ['label' => __('All pages except specific pages'), 'value' => 2]
        ];
    }
}
