<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

declare(strict_types=1);

namespace Gundo\Sage\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\FunctionalTestingFramework\ObjectManagerInterface;

class DesignFactory
{
    private ObjectManagerInterface $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function create(): object
    {
        return $this->objectManager->create(DesignFactory::class);
    }
}

