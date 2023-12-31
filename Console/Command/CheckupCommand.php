<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Sage\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckupCommand extends Command
{
    /**
     * Configures the current command.
     */
    public function configure(): void
    {
        $this->setName('gundo:sage:checkup');
        $this->setDescription('gundo:sage:checkup');
    }

    /**
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    public function execute(InputInterface $input, OutputInterface $output): ?int
    {
        $output->writeln('CheckupCommand');
        return 0;
    }
}

