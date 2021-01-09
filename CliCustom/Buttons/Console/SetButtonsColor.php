<?php
namespace CliCustom\Buttons\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetButtonsColor extends Command
{
	protected function configure()
	{
		$this->setName('custombtn:set_color');
		$this->setDescription('muda cor dos btns');

		parent::configure();
	}
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$output->writeln("muda cor dos btns");
	}

}
