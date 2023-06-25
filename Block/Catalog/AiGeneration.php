<?php
/*
 * *
 *  * Copyright © Vaimo Group. All rights reserved.
 *  * See LICENSE_VAIMO.txt for license details.
 *
 */

namespace Gundo\Sage\Block\Catalog;

use GuzzleHttp\Exception\GuzzleException;
use Magento\Framework\View\Element\Template;
use Gundo\Sage\Model\DesignFactory;
use Gundo\Sage\Helper\API;
use Psr\Http\Message\StreamInterface;

class AiGeneration extends Template
{
    private API $API;

    public function __construct(Template\Context $context, API $API, array $data = [])
    {
        $this->API = $API;
        parent::__construct($context, $data);
    }

    /**
     * @throws GuzzleException
     */
    public function generateCustomTshirt($prompt): StreamInterface
    {
        $size = '256X256';
        $n = 1;
        $generatedImages =  $this->API->generateImages($prompt, $n, $size);
        return json_decode($generatedImages, true);
    }

    // Other methods for retrieving and processing custom T-shirt data
}

