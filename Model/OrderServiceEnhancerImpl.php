<?php
namespace Rfmcube\Customapi\Model;

use Rfmcube\Customapi\Api\OrderServiceEnhancer;
use Magento\Sales\Model\OrderRepository;
use Magento\Framework\Api\SearchCriteriaInterface;
use Psr\Log\LoggerInterface;

class OrderServiceEnhancerImpl implements OrderServiceEnhancer
{
        protected $orderRepository;

        protected $logger;

    public function __construct(
      OrderRepository $orderRepository,
      LoggerInterface $logger
    ) {
          $this->orderRepository = $orderRepository;
          $this->logger = $logger;
    }

    /**
    * {@inheritdoc}
    */
    public function get($id)
    {
      $this->logger->info("resource order get id=" . $id);

      return $this->orderRepository->get($id);
    }

    /**
   * {@inheritdoc}
   */
  public function getList(SearchCriteriaInterface $searchCriteria)
  {
      $this->logger->info("resource order getList searchCriteria=" . json_encode(get_object_vars($searchCriteria)));

      return $this->orderRepository->getList($searchCriteria);
  }

}
