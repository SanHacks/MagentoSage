<?php
/*
 * *
 *  * Copyright © Vaimo Group. All rights reserved.
 *  * See LICENSE_VAIMO.txt for license details.
 *
 */

namespace Gundo\Sage\Model;

use Magento\Eav\Model\ResourceModel\Entity\Type\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class DataProvider extends AbstractDataProvider
{
    protected $collection;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData(): array
    {
        if ($this->getCollection()->isLoaded()) {
            return $this->collection->toArray();
        }
        $items = $this->getCollection()->getItems();
        $data = [
            'totalRecords' => $this->collection->getSize(),
            'items' => [],
        ];
        foreach ($items as $item) {
            $data['items'][] = $item->getData();
        }
        return $data;
    }
}
