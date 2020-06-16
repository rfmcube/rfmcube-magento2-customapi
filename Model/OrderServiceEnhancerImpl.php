<?php

namespace Rfmcube\Customapi\Model;

use Rfmcube\Customapi\Api\OrderServiceEnhancer;
use Magento\Sales\Model\OrderRepository;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Model\ProductRepository;
use Magento\Framework\Api\SearchCriteriaInterface;
use Psr\Log\LoggerInterface;

class OrderServiceEnhancerImpl implements OrderServiceEnhancer {

    protected $orderRepository;
    protected $productRepository;
    protected $categoryRepository;
    protected $logger;

    public function __construct(
            OrderRepository $orderRepository,
            ProductRepository $productRepository,
            CategoryRepository $categoryRepository,
            LoggerInterface $logger
    ) {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->logger = $logger;
    }

    /**
     * Build the category tree of the category
     *
     * @param \Magento\Catalog\Api\Data\CategoryInterface $category
     * @return array
     */
    private function buildTree($category) {
        $tree = [];
        $this->_walkParent($tree, $category);
        $tree = array_reverse($tree);
//        $this->logger->info("category tree " . implode(",", $tree));
        return $tree;
    }

    private function _walkParent(& $tree, $category) {
        $tree[] = $category->getId();
        $parentId = $category->getParentId();
        if (isset($parentId) && $parentId > 0) {
            $parentCategory = $this->categoryRepository->get($parentId);
            $this->_walkParent($tree, $parentCategory);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($id) {
//      $this->logger->info("resource order get id=" . $id);

        $order = $this->orderRepository->get($id);

        $wrapped = new \Rfmcube\Customapi\Data\OrderWrapper($order);

        $items = [];
        foreach ($order->getItems() as $it) {
            $item = new \Rfmcube\Customapi\Data\OrderItemWrapper($it);

            try {
//              $this->logger->info("get product id=" .$item->getProductId());
                $product = $this->productRepository->getById($item->getProductId());
//              $this->logger->info("found product " .$item->getProductId());

                $attributes = [];
                foreach ($product->getAttributes() as $attr) {
                    $value = $product->getData($attr->getAttributeCode());
                    $attributes[] = new \Rfmcube\Customapi\Data\Attribute($attr->getAttributeCode(), $value);
                }
                $item->setAttributes($attributes);

                $categoryIds = $product->getCategoryIds();

                $categoriesInfo = [];
                foreach ($categoryIds as $categoryId) {
                    try {
                        $category = $this->categoryRepository->get($categoryId);
//                $this->logger->info("category id=" . $categoryId . " name=" . $category->getName());
                        $categoryInfo = new \Rfmcube\Customapi\Data\CategoryInfo();
                        $categoryInfo->setId($category->getId());
                        $categoryInfo->setParentId($category->getParentId());
                        $categoryInfo->setName($category->getName());
                        $categoryInfo->setTree($this->buildTree($category));
                        $categoriesInfo[] = $categoryInfo;
                        
                    } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
//                        $this->logger->info("Caught exception: " . $e->getMessage());
                    }
                }
                $item->setCategories($categoriesInfo);
                
            } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
//                $this->logger->info("Caught exception: " . $e->getMessage());
            } finally {
                $items[] = $item;
            }
        }
        $wrapped->setItems($items);

        return $wrapped;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(SearchCriteriaInterface $searchCriteria) {

        $list = $this->orderRepository->getList($searchCriteria);

        $result = new \Rfmcube\Customapi\Data\OrderSearchResult();
        $result->setSearchCriteria($list->getSearchCriteria());
        $result->setTotalCount($list->getTotalCount());

        $items = [];
        foreach ($list->getItems() as $it) {
            $items[] = $this->get($it->getEntityId());
        }
        $result->setItems($items);

        return $result;
    }

}
