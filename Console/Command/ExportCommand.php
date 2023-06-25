<?php

namespace Gundo\Sage\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Downloadable\Api\Data;

class ExportCommand extends Command
{
    /**
     * Configures the current command.
     */
    public function configure()
    {
        $this->setName('gundo:sage:export');
        $this->setDescription('gundo:sage:export');
    }

    /**
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    public function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $output->writeln('ExportCommand');

        return 0;
    }


}

