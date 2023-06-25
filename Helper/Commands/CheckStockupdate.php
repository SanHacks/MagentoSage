<?php

namespace Gundo\Sage\Helper\Commands;

use Magento\Framework\Api\Search\SearchCriteriaInterface;
use Magento\Framework\Api\Search\SearchResult;
use Magento\Framework\App\ScopeResolverInterface;
use Magento\Framework\Data\SearchResultInterface;
use Magento\Framework\Search\Request\Builder;
use Magento\Framework\Search\SearchEngineInterface;
use Magento\Framework\Search\SearchResponseBuilder;
use Magento\Search\Api\SearchInterface;
use Magento\Search\Model\Search;
class CheckStockupdate extends Search implements SearchInterface
{

    public function __construct(Builder $requestBuilder, ScopeResolverInterface $scopeResolver, SearchEngineInterface $searchEngine, SearchResponseBuilder $searchResponseBuilder)
    {
        parent::__construct($requestBuilder, $scopeResolver, $searchEngine, $searchResponseBuilder);
    }

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return \Magento\Framework\Api\Search\SearchResultInterface|SearchResult
     */
    public function search(SearchCriteriaInterface $searchCriteria): \Magento\Framework\Api\Search\SearchResultInterface|SearchResult
    {
        return parent::search($searchCriteria);
    }
}
