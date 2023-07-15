<?php
/*
 * *
 *  * Copyright © Gundo Sifhufhi. All rights reserved.
 *  * See Github_Sanhacks.txt for license details.
 *
 */

namespace Gundo\Sage\Controller\Catalog;

use Gundo\Sage\Block\Catalog\AiGeneration;
use Gundo\Sage\Controller\ResponseInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index extends Action
{

    private AiGeneration $AiGeneration;

    public function __construct(Context $context, AiGeneration $AiGeneration)
    {
        parent::__construct($context);
        $this->AiGeneration = $AiGeneration;

    }

    /**
     * Dispatch request
     *
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        // Retrieve the search parameters
        $searchParams = $this->getRequest()->getParams();

        // Use the custom T-shirt block to retrieve and process data
        $customTshirtData = $this->AiGeneration->generateCustomTshirt($searchParams['prompt']);

        // Pass the data to the template for rendering
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        // Pass the data to the template for rendering
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        // Set custom T-shirt data to be accessed in the template
        $resultPage->getLayout()
            ->getBlock('custom_tshirt_block')
            ->setData('custom_tshirt_data', $customTshirtData);

        return $resultPage;
    }

}

