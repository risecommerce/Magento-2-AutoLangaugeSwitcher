<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

namespace Risecommerce\AutoLanguageSwitcher\Block\Infoget\System\Config\Form;
/**
 * Admin Risecommerce configurations information block
 */
class Info extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var \Magento\Framework\Module\ModuleListInterface
     */
    protected $moduleList;

    /**
     * @var GetModuleVersionInterface
     */
    protected $getModuleVersion;

    /**
     * Info constructor.
     * @param \Magento\Framework\Module\ModuleListInterface $moduleList
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     * @param GetModuleVersionInterface|null $getModuleVersion
     */
    public function __construct(
        \Magento\Framework\Module\ModuleListInterface $moduleList,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    /**
     * Return info block html
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */

    /**
     * Return extension url
     * @return string
     */
    protected function getModuleUrl()
    {
        return 'https://risecommerce.com/';
    }

    /**
     * Return extension title
     * @return string
     */
    protected function getModuleTitle()
    {
        return "Auto LanguageSwitcher Extension";
    }
}
