<?php

namespace CliCustom\Buttons\Helper;

use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{

	const XML_PATH_COLOR = 'buttons/';
	protected $configWriter;

	public function __construct(
		Context $context,
		WriterInterface $configWriter
	)
	{
		parent::__construct($context);
		$this->configWriter = $configWriter;
	}

	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_COLOR .'general/'. $code, $storeId);
	}

	public function setGeneralConfig($code, $value)
	{
		var_dump('arro');
		$this->configWriter
			 ->save(self::XML_PATH_COLOR .'general/'. $code,  $value, 'default', $scopeId = 0);
	}

}
