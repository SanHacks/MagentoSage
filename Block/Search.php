<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Sage\Block;

use Magento\Framework\View\Element\Template;

class Search extends Template
{
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getSearch(): string
    {
        return 'Search';
    }


}

