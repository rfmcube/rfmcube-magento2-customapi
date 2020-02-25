<?php

namespace Rfmcube\Customapi\Api;

interface OrderServiceEnhancer {

    /**
     * Loads a specified order.
     *
     * @param int $id The order ID.
     * @return \Rfmcube\Customapi\Data\OrderWrapper Array of items.
     */
    public function get($id);

    /**
     * Lists orders that match specified search criteria.
     *
     * This call returns an array of objects, but detailed information about each object’s attributes might not be
     * included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to
     * determine which call to use to get detailed information about all attributes for an object.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Rfmcube\Customapi\Data\OrderSearchResult
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
