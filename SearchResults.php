<?php

namespace Gundo\Sage;

use _PHPStan_532094bc1\Nette\Schema\Context;
use Magento\Search\Model\Search;
use Magento\TestFramework\Event\Magento;

interface SearchResults
{
    public function __construct(Search $search, \Magento\Backend\App\Action\Context $context);

    public function homePage();

    public function product();


}

