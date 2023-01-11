<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\AutoLanguageSwitcher\Block\Adminhtml\System\Config\Form;

/**
 * Admin Risecommerce configurations information block
 */
class Info extends \Risecommerce\AutoLanguageSwitcher\Block\Infoget\System\Config\Form\Info
{
    /**
     * Return extension url
     * @return string
     */
    protected function getModuleUrl()
    {
        return 'https://risecommerce.com/magento-2-auto-language-switcher-multi-language-store';
    }

    /**
     * Return extension title
     * @return string
     */
    protected function getModuleTitle()
    {
        return 'Auto Language Switcher Extension';
    }

    /**
     * Return info block html
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $html = parent::render($element);
        $html .= '<div style="padding:10px;background-color:#ffe5e5;border:1px solid #ddd;margin-bottom:7px;">
            <strong>Attention!</strong> Once changes being made, please make sure that you have flushed browser cookie or use anonymous-browser tab for testing.
        </div>';

        return $html;
    }
}
