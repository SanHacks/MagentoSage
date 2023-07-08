<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Sage\Model\Config\Source;

class Color
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'red',
                'label' => __('Red'),
            ],
            [
                'value' => 'green',
                'label' => __('Green'),
            ],
            [
                'value' => 'blue',
                'label' => __('Blue'),
            ],
        ];
    }

}
