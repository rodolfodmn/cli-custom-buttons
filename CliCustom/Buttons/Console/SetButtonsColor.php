<?php
namespace CliCustom\Buttons\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class SetButtonsColor extends Command
{
	const COR = 'cor';

	protected function configure()
	{
		$options = [
			new InputOption(
				self::COR,
				null,
				InputOption::VALUE_REQUIRED,
				'Cor'
			)
		];

		$this->setName('custombtn:set_color')
			 ->setDescription('muda cor dos btns')
			 ->setDefinition($options);

		 parent::configure();
	}
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$cor = $input->getOption(self::COR);
		$output->writeln("muda cor dos btns para: #{$cor}");
		return $this;
	}

}
