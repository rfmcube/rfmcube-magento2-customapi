<?php

namespace Rfmcube\Customapi\Data;

class OrderSearchResult {

    protected $searchCriteria;
    protected $totalCount;
    protected $items;

    /**
     * Get search criteria.
     *
     * @return \Magento\Framework\Api\SearchCriteriaInterface
     */
    public function getSearchCriteria() {
        return $this->searchCriteria;
    }

    /**
     * Set search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return $this
     */
    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria) {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }

    /**
     * Get total count.
     *
     * @return int
     */
    public function getTotalCount() {
        return $this->totalCount;
    }

    /**
     * Set total count.
     *
     * @param int $totalCount
     * @return $this
     */
    public function setTotalCount($totalCount) {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * Get items.
     *
     * @return \Rfmcube\Customapi\Data\OrderWrapper[] Array of collection items.
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Set items.
     *
     * @param \Rfmcube\Customapi\Data\OrderWrapper[] $items
     * @return $this
     */
    public function setItems($items) {
        $this->items = $items;
        return $this;
    }

}
