<?php

namespace Renato\StudyModule\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends \Symfony\Component\Console\Command\Command
{
    protected function configure()
    {
        $this->setName('renato:teste')
             ->setDescription('Nosso Primeiro comando');
        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Olá Magenteiro');
    }
}