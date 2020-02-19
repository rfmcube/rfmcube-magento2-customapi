<?php
namespace Rfmcube\Customapi\Model;

use Rfmcube\Customapi\Api\CustomerServiceEnhancer;
use Magento\Customer\Model\ResourceModel\CustomerRepository;
use Magento\Framework\Api\SearchCriteriaInterface;
use Psr\Log\LoggerInterface;

class CustomerServiceEnhancerImpl implements CustomerServiceEnhancer
{
        protected $customerRepository;

        protected $logger;

    public function __construct(
      CustomerRepository $customerRepository,
      LoggerInterface $logger
    ) {
          $this->customerRepository = $customerRepository;
          $this->logger = $logger;
    }

    /**
    * {@inheritdoc}
    */
    public function getById($customerId)
    {
      $this->logger->info("resource customer getByid id=" . $customerId);

      return $this->customerRepository->getById($customerId);
    }

    /**
   * {@inheritdoc}
   */
  public function getList(SearchCriteriaInterface $searchCriteria)
  {
      $this->logger->info("resource customer getList searchCriteria=" . json_encode(get_object_vars($searchCriteria)));

      return $this->customerRepository->getList($searchCriteria);
  }

}
