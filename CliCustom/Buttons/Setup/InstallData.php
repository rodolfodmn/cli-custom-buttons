<?php
namespace CliCustom\Buttons\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

	public function __construct() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
	}

}
