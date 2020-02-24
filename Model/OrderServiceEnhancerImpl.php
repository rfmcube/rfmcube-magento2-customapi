<?php

namespace Rfmcube\Customapi\Model;

use Rfmcube\Customapi\Api\OrderServiceEnhancer;
use Magento\Sales\Model\OrderRepository;
use Magento\Framework\Api\SearchCriteriaInterface;
use Psr\Log\LoggerInterface;

class OrderServiceEnhancerImpl implements OrderServiceEnhancer {

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
    public function get($id) {
        $this->logger->info("resource order get id=" . $id);


//        print_r($map);
//        $strJson = json_encode($map);
//
//        $this->logger->info("resource order get id=" . $strJson);
//        return json_decode($strJson); //$this->orderRepository->get($id);
//        $order = $this->orderRepository->get($id);
//        return [[
//        "map" => $map,
//        "res" => $res
//        ]];
//        $oof = new \Rfmcube\Customapi\Data\CustomOrder();
//        $oof2 = new \Rfmcube\Customapi\Data\CategoryInfo();
//        $oof2->setTree(array(1, 2, 3, 4, 5));
        $item1 = array(
            'productid' => 12,
            'categoryid' => 2
        );
        $item2 = array(
            'productid' => 12,
            'categoryid' => 2
        );

//        $finalMap = array(
//            'id' => 12,
//            'name' => "sdasd",
//            'items' => [$item1, $item2]
//        );

        $order = $this->orderRepository->get($id);

//        $reflectionClass = new \ReflectionClass(\Magento\Sales\Api\Data\OrderInterface::class);
//
//        $finalMap = $order->toArray($reflectionClass->getConstants());
//
//        $address = $order->getBillingAddress();
//        if ($address !== null) {
//            $finalMap['billing_address'] = $address->toArray();
//        }
//
//        $payment = $order->getPayment();
//        if ($payment !== null) {
//            $finalMap['payment'] = $payment->toArray();
//        }
//
//        $statusHistories = $order->getStatusHistories();
//        $finalMap['status_histories'] = [];
//        if ($statusHistories !== null) {
//            foreach ($statusHistories as $sh) {
//                $finalMap['status_histories'][] = $sh->toArray();
//            }
//        }
//
//        $extensionAttributes = $order->getExtensionAttributes();
//        $finalMap['extension_attributes'] = [];
//        if ($extensionAttributes !== null) {
//            $finalMap['extension_attributes']=$extensionAttributes;
////            foreach ($extensionAttributes as $ea) {
////                $finalMap['extension_attributes'][$ea] = $extensionAttributes[$ea]->toArray();
////            }
//        }


//        $str = json_encode($order, JSON_FORCE_OBJECT);
//        echo $str;
//        $output = json_decode($str, true);
//        echo $output;

        return new \Rfmcube\Customapi\Data\OrderWrapper($order);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(SearchCriteriaInterface $searchCriteria) {
//        $this->logger->info("resource order getList searchCriteria=" . json_encode(get_object_vars($searchCriteria)));
//
//        $order = $this->orderRepository->getList($searchCriteria);
//
////        CustomOrderInterface
//        $oof = new \Rfmcube\Customapi\Data\CustomOrder();
////        $oof2->setTree(array(1, 2, 3, 4, 5));
//
//        return $oof;
    }

}
