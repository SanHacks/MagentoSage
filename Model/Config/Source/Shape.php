<?php
/*
 * *
 *  * Copyright © Vaimo Group. All rights reserved.
 *  * See LICENSE_VAIMO.txt for license details.
 *
 */

namespace Gundo\Sage\Model\Config\Source;

class Shape
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'round',
                'label' => __('Round'),
            ],
            [
                'value' => 'square',
                'label' => __('Square'),
            ],
        ];
    }

}
