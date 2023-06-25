<?php
/*
 * *
 *  * Copyright © Vaimo Group. All rights reserved.
 *  * See LICENSE_VAIMO.txt for license details.
 *
 */

namespace Gundo\Sage\Model\Config\Source;

class Size
{
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 'small',
                'label' => __('Small'),
            ],
            [
                'value' => 'medium',
                'label' => __('Medium'),
            ],
            [
                'value' => 'large',
                'label' => __('Large'),
            ],
        ];
    }

}
