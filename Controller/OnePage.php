<?php

namespace Gundo\Sage\Controller;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class OnePage extends Action
{
    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

