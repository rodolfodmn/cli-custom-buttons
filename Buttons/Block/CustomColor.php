<?php
namespace CliCustom\Buttons\Block;

class CustomColor extends \Magento\Framework\View\Element\Template
{

    protected $helperData;
    public function __construct(
        \CliCustom\Buttons\Helper\Data $helperData,
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        $this->helperData = $helperData;
        parent::__construct($context);
    }

    public function getCustomColor()
    {
        return $this->helperData->getGeneralConfig('custom_color');
    }
}
