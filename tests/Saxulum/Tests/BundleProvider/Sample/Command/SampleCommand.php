<?php

namespace Saxulum\Tests\BundleProvider\Sample\Command;

use Saxulum\Console\Command\AbstractPimpleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SampleCommand extends AbstractPimpleCommand
{
    protected function configure()
    {
        $this
            ->setName('sample:command')
            ->setDescription('Sample Command')
            ->addArgument(
                'value',
                InputArgument::REQUIRED
            )
        ;
    }

    /**
     * @param  InputInterface    $input
     * @param  OutputInterface   $output
     * @return int|null|void
     * @throws \RuntimeException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $value = $input->getArgument('value');
        $output->write('this is a sample command with value: '. $value);
    }
}
