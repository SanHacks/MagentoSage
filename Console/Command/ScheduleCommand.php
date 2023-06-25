<?php

namespace Gundo\Sage\Console\Command;

use Magento\Catalog\Model\ProductSearchResults;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Gundo\Sage\Helper\Commands;
class ScheduleCommand extends Command
{
    /**
     * Configures the current command.
     */
    public function configure(): void
    {
        $this->setName('gundo:sage:schedule');
        $this->setDescription('gundo:sage:schedule');
    }

    /**
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    public function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $output->writeln('ScheduleCommand');
        return 0;
    }
}

