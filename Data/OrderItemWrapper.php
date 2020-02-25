<?php

namespace Rfmcube\Customapi\Data;

class OrderItemWrapper {

    /**
     * @var \Magento\Sales\Model\Order
     */
    protected $item;

    /**
     * @var \Rfmcube\Customapi\Data\CategoryInfo[]
     */
    protected $categories;

    /**
     * @var \Rfmcube\Customapi\Data\Attribute[]
     */
    protected $attributes;

    /**
     * @param \Magento\Sales\Model\Order\Item $item
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    function __construct(\Magento\Sales\Model\Order\Item $item) {
        $this->item = $item;
    }

    /**
     *
     * @return \Rfmcube\Customapi\Data\CategoryInfo[]
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     *
     * @param \Rfmcube\Customapi\Data\CategoryInfo[] $categories
     * @return $this
     */
    public function setCategories($categories) {
        $this->categories = $categories;
        return $this;
    }

    /**
     *
     * @return \Rfmcube\Customapi\Data\Attribute[]
     */
    public function getAttributes() {
        return $this->attributes;
    }

    /**
     *
     * @param \Rfmcube\Customapi\Data\Attribute[] $attributes
     * @return $this
     */
    public function setAttributes($attributes) {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Gets the additional data for the order item.
     *
     * @return string|null Additional data.
     */
    public function getAdditionalData() {
        return $this->item->getAdditionalData();
    }

    /**
     * Gets the amount refunded for the order item.
     *
     * @return float|null Amount refunded.
     */
    public function getAmountRefunded() {
        return $this->item->getAmountRefunded();
    }

    /**
     * Gets the applied rule IDs for the order item.
     *
     * @return string|null Applied rule IDs.
     */
    public function getAppliedRuleIds() {
        return $this->item->getAppliedRuleIds();
    }

    /**
     * Gets the base amount refunded for the order item.
     *
     * @return float|null Base amount refunded.
     */
    public function getBaseAmountRefunded() {
        return $this->item->getBaseAmountRefunded();
    }

    /**
     * Gets the base cost for the order item.
     *
     * @return float|null Base cost.
     */
    public function getBaseCost() {
        return $this->item->getBaseCost();
    }

    /**
     * Gets the base discount amount for the order item.
     *
     * @return float|null Base discount amount.
     */
    public function getBaseDiscountAmount() {
        return $this->item->getBaseDiscountAmount();
    }

    /**
     * Gets the base discount invoiced for the order item.
     *
     * @return float|null Base discount invoiced.
     */
    public function getBaseDiscountInvoiced() {
        return $this->item->getBaseDiscountInvoiced();
    }

    /**
     * Gets the base discount refunded for the order item.
     *
     * @return float|null Base discount refunded.
     */
    public function getBaseDiscountRefunded() {
        return $this->item->getBaseDiscountRefunded();
    }

    /**
     * Gets the base discount tax compensation amount for the order item.
     *
     * @return float|null Base discount tax compensation amount.
     */
    public function getBaseDiscountTaxCompensationAmount() {
        return $this->item->getBaseDiscountTaxCompensationAmount();
    }

    /**
     * Gets the base discount tax compensation invoiced for the order item.
     *
     * @return float|null Base discount tax compensation invoiced.
     */
    public function getBaseDiscountTaxCompensationInvoiced() {
        return $this->item->getBaseDiscountTaxCompensationInvoiced();
    }

    /**
     * Gets the base discount tax compensation refunded for the order item.
     *
     * @return float|null Base discount tax compensation refunded.
     */
    public function getBaseDiscountTaxCompensationRefunded() {
        return $this->item->getBaseDiscountTaxCompensationRefunded();
    }

    /**
     * Gets the base original price for the order item.
     *
     * @return float|null Base original price.
     */
    public function getBaseOriginalPrice() {
        return $this->item->getBaseOriginalPrice();
    }

    /**
     * Gets the base price for the order item.
     *
     * @return float|null Base price.
     */
    public function getBasePrice() {
        return $this->item->getBasePrice();
    }

    /**
     * Gets the base price including tax for the order item.
     *
     * @return float|null Base price including tax.
     */
    public function getBasePriceInclTax() {
        return $this->item->getBasePriceInclTax();
    }

    /**
     * Gets the base row invoiced for the order item.
     *
     * @return float|null Base row invoiced.
     */
    public function getBaseRowInvoiced() {
        return $this->item->getBaseRowInvoiced();
    }

    /**
     * Gets the base row total for the order item.
     *
     * @return float|null Base row total.
     */
    public function getBaseRowTotal() {
        return $this->item->getBaseRowTotal();
    }

    /**
     * Gets the base row total including tax for the order item.
     *
     * @return float|null Base row total including tax.
     */
    public function getBaseRowTotalInclTax() {
        return $this->item->getBaseRowTotalInclTax();
    }

    /**
     * Gets the base tax amount for the order item.
     *
     * @return float|null Base tax amount.
     */
    public function getBaseTaxAmount() {
        return $this->item->getBaseTaxAmount();
    }

    /**
     * Gets the base tax before discount for the order item.
     *
     * @return float|null Base tax before discount.
     */
    public function getBaseTaxBeforeDiscount() {
        return $this->item->getBaseTaxBeforeDiscount();
    }

    /**
     * Gets the base tax invoiced for the order item.
     *
     * @return float|null Base tax invoiced.
     */
    public function getBaseTaxInvoiced() {
        return $this->item->getBaseTaxInvoiced();
    }

    /**
     * Gets the base tax refunded for the order item.
     *
     * @return float|null Base tax refunded.
     */
    public function getBaseTaxRefunded() {
        return $this->item->getBaseTaxRefunded();
    }

    /**
     * Gets the base WEEE tax applied amount for the order item.
     *
     * @return float|null Base WEEE tax applied amount.
     */
    public function getBaseWeeeTaxAppliedAmount() {
        return $this->item->getBaseWeeeTaxAppliedAmount();
    }

    /**
     * Gets the base WEEE tax applied row amount for the order item.
     *
     * @return float|null Base WEEE tax applied row amount.
     */
    public function getBaseWeeeTaxAppliedRowAmnt() {
        return $this->item->getBaseWeeeTaxAppliedRowAmnt();
    }

    /**
     * Gets the base WEEE tax disposition for the order item.
     *
     * @return float|null Base WEEE tax disposition.
     */
    public function getBaseWeeeTaxDisposition() {
        return $this->item->getBaseWeeeTaxDisposition();
    }

    /**
     * Gets the base WEEE tax row disposition for the order item.
     *
     * @return float|null Base WEEE tax row disposition.
     */
    public function getBaseWeeeTaxRowDisposition() {
        return $this->item->getBaseWeeeTaxRowDisposition();
    }

    /**
     * Gets the created-at timestamp for the order item.
     *
     * @return string|null Created-at timestamp.
     */
    public function getCreatedAt() {
        return $this->item->getCreatedAt();
    }

    /**
     * Gets the description for the order item.
     *
     * @return string|null Description.
     */
    public function getDescription() {
        return $this->item->getDescription();
    }

    /**
     * Gets the discount amount for the order item.
     *
     * @return float|null Discount amount.
     */
    public function getDiscountAmount() {
        return $this->item->getDiscountAmount();
    }

    /**
     * Gets the discount invoiced for the order item.
     *
     * @return float|null Discount invoiced.
     */
    public function getDiscountInvoiced() {
        return $this->item->getDiscountInvoiced();
    }

    /**
     * Gets the discount percent for the order item.
     *
     * @return float|null Discount percent.
     */
    public function getDiscountPercent() {
        return $this->item->getDiscountPercent();
    }

    /**
     * Gets the discount refunded for the order item.
     *
     * @return float|null Discount refunded.
     */
    public function getDiscountRefunded() {
        return $this->item->getDiscountRefunded();
    }

    /**
     * Gets the event ID for the order item.
     *
     * @return int|null Event ID.
     */
    public function getEventId() {
        return $this->item->getEventId();
    }

    /**
     * Gets the external order item ID for the order item.
     *
     * @return string|null External order item ID.
     */
    public function getExtOrderItemId() {
        return $this->item->getExtOrderItemId();
    }

    /**
     * Gets the free-shipping flag value for the order item.
     *
     * @return int|null Free-shipping flag value.
     */
    public function getFreeShipping() {
        return $this->item->getFreeShipping();
    }

    /**
     * Gets the GW base price for the order item.
     *
     * @return float|null GW base price.
     */
    public function getGwBasePrice() {
        return $this->item->getGwBasePrice();
    }

    /**
     * Gets the GW base price invoiced for the order item.
     *
     * @return float|null GW base price invoiced.
     */
    public function getGwBasePriceInvoiced() {
        return $this->item->getGwBasePriceInvoiced();
    }

    /**
     * Gets the GW base price refunded for the order item.
     *
     * @return float|null GW base price refunded.
     */
    public function getGwBasePriceRefunded() {
        return $this->item->getGwBasePriceRefunded();
    }

    /**
     * Gets the GW base tax amount for the order item.
     *
     * @return float|null GW base tax amount.
     */
    public function getGwBaseTaxAmount() {
        return $this->item->getGwBaseTaxAmount();
    }

    /**
     * Gets the GW base tax amount invoiced for the order item.
     *
     * @return float|null GW base tax amount invoiced.
     */
    public function getGwBaseTaxAmountInvoiced() {
        return $this->item->getGwBaseTaxAmountInvoiced();
    }

    /**
     * Gets the GW base tax amount refunded for the order item.
     *
     * @return float|null GW base tax amount refunded.
     */
    public function getGwBaseTaxAmountRefunded() {
        return $this->item->getGwBaseTaxAmountRefunded();
    }

    /**
     * Gets the GW ID for the order item.
     *
     * @return int|null GW ID.
     */
    public function getGwId() {
        return $this->item->getGwId();
    }

    /**
     * Gets the GW price for the order item.
     *
     * @return float|null GW price.
     */
    public function getGwPrice() {
        return $this->item->getGwPrice();
    }

    /**
     * Gets the GW price invoiced for the order item.
     *
     * @return float|null GW price invoiced.
     */
    public function getGwPriceInvoiced() {
        return $this->item->getGwPriceInvoiced();
    }

    /**
     * Gets the GW price refunded for the order item.
     *
     * @return float|null GW price refunded.
     */
    public function getGwPriceRefunded() {
        return $this->item->getGwPriceRefunded();
    }

    /**
     * Gets the GW tax amount for the order item.
     *
     * @return float|null GW tax amount.
     */
    public function getGwTaxAmount() {
        return $this->item->getGwTaxAmount();
    }

    /**
     * Gets the GW tax amount invoiced for the order item.
     *
     * @return float|null GW tax amount invoiced.
     */
    public function getGwTaxAmountInvoiced() {
        return $this->item->getGwTaxAmountInvoiced();
    }

    /**
     * Gets the GW tax amount refunded for the order item.
     *
     * @return float|null GW tax amount refunded.
     */
    public function getGwTaxAmountRefunded() {
        return $this->item->getGwTaxAmountRefunded();
    }

    /**
     * Gets the discount tax compensation amount for the order item.
     *
     * @return float|null Discount tax compensation amount.
     */
    public function getDiscountTaxCompensationAmount() {
        return $this->item->getDiscountTaxCompensationAmount();
    }

    /**
     * Gets the discount tax compensation canceled for the order item.
     *
     * @return float|null Discount tax compensation canceled.
     */
    public function getDiscountTaxCompensationCanceled() {
        return $this->item->getDiscountTaxCompensationCanceled();
    }

    /**
     * Gets the discount tax compensation invoiced for the order item.
     *
     * @return float|null Discount tax compensation invoiced.
     */
    public function getDiscountTaxCompensationInvoiced() {
        return $this->item->getDiscountTaxCompensationInvoiced();
    }

    /**
     * Gets the discount tax compensation refunded for the order item.
     *
     * @return float|null Discount tax compensation refunded.
     */
    public function getDiscountTaxCompensationRefunded() {
        return $this->item->getDiscountTaxCompensationRefunded();
    }

    /**
     * Gets the is-quantity-decimal flag value for the order item.
     *
     * @return int|null Is-quantity-decimal flag value.
     */
    public function getIsQtyDecimal() {
        return $this->item->getIsQtyDecimal();
    }

    /**
     * Gets the is-virtual flag value for the order item.
     *
     * @return int|null Is-virtual flag value.
     */
    public function getIsVirtual() {
        return $this->item->getIsVirtual();
    }

    /**
     * Gets the item ID for the order item.
     *
     * @return int|null Item ID.
     */
    public function getItemId() {
        return $this->item->getItemId();
    }

    /**
     * Gets the locked DO invoice flag value for the order item.
     *
     * @return int|null Locked DO invoice flag value.
     */
    public function getLockedDoInvoice() {
        return $this->item->getLockedDoInvoice();
    }

    /**
     * Gets the locked DO ship flag value for the order item.
     *
     * @return int|null Locked DO ship flag value.
     */
    public function getLockedDoShip() {
        return $this->item->getLockedDoShip();
    }

    /**
     * Gets the name for the order item.
     *
     * @return string|null Name.
     */
    public function getName() {
        return $this->item->getName();
    }

    /**
     * Gets the no discount flag value for the order item.
     *
     * @return int|null No-discount flag value.
     */
    public function getNoDiscount() {
        return $this->item->getNoDiscount();
    }

    /**
     * Gets the order ID for the order item.
     *
     * @return int|null Order ID.
     */
    public function getOrderId() {
        return $this->item->getOrderId();
    }

    /**
     * Gets the original price for the order item.
     *
     * @return float|null Original price.
     */
    public function getOriginalPrice() {
        return $this->item->getOriginalPrice();
    }

    /**
     * Gets the parent item ID for the order item.
     *
     * @return int|null Parent item ID.
     */
    public function getParentItemId() {
        return $this->item->getParentItemId();
    }

    /**
     * Gets the price for the order item.
     *
     * @return float|null Price.
     */
    public function getPrice() {
        return $this->item->getPrice();
    }

    /**
     * Gets the price including tax for the order item.
     *
     * @return float|null Price including tax.
     */
    public function getPriceInclTax() {
        return $this->item->getPriceInclTax();
    }

    /**
     * Gets the product ID for the order item.
     *
     * @return int|null Product ID.
     */
    public function getProductId() {
        return $this->item->getProductId();
    }

    /**
     * Gets the product type for the order item.
     *
     * @return string|null Product type.
     */
    public function getProductType() {
        return $this->item->getProductType();
    }

    /**
     * Gets the quantity backordered for the order item.
     *
     * @return float|null Quantity backordered.
     */
    public function getQtyBackordered() {
        return $this->item->getQtyBackordered();
    }

    /**
     * Gets the quantity canceled for the order item.
     *
     * @return float|null Quantity canceled.
     */
    public function getQtyCanceled() {
        return $this->item->getQtyCanceled();
    }

    /**
     * Gets the quantity invoiced for the order item.
     *
     * @return float|null Quantity invoiced.
     */
    public function getQtyInvoiced() {
        return $this->item->getQtyInvoiced();
    }

    /**
     * Gets the quantity ordered for the order item.
     *
     * @return float|null Quantity ordered.
     */
    public function getQtyOrdered() {
        return $this->item->getQtyOrdered();
    }

    /**
     * Gets the quantity refunded for the order item.
     *
     * @return float|null Quantity refunded.
     */
    public function getQtyRefunded() {
        return $this->item->getQtyRefunded();
    }

    /**
     * Gets the quantity returned for the order item.
     *
     * @return float|null Quantity returned.
     */
    public function getQtyReturned() {
        return $this->item->getQtyReturned();
    }

    /**
     * Gets the quantity shipped for the order item.
     *
     * @return float|null Quantity shipped.
     */
    public function getQtyShipped() {
        return $this->item->getQtyShipped();
    }

    /**
     * Gets the quote item ID for the order item.
     *
     * @return int|null Quote item ID.
     */
    public function getQuoteItemId() {
        return $this->item->getQuoteItemId();
    }

    /**
     * Gets the row invoiced for the order item.
     *
     * @return float|null Row invoiced.
     */
    public function getRowInvoiced() {
        return $this->item->getRowInvoiced();
    }

    /**
     * Gets the row total for the order item.
     *
     * @return float|null Row total.
     */
    public function getRowTotal() {
        return $this->item->getRowTotal();
    }

    /**
     * Gets the row total including tax for the order item.
     *
     * @return float|null Row total including tax.
     */
    public function getRowTotalInclTax() {
        return $this->item->getRowTotalInclTax();
    }

    /**
     * Gets the row weight for the order item.
     *
     * @return float|null Row weight.
     */
    public function getRowWeight() {
        return $this->item->getRowWeight();
    }

    /**
     * Gets the SKU for the order item.
     *
     * @return string SKU.
     */
    public function getSku() {
        return $this->item->getSku();
    }

    /**
     * Gets the store ID for the order item.
     *
     * @return int|null Store ID.
     */
    public function getStoreId() {
        return $this->item->getStoreId();
    }

    /**
     * Gets the tax amount for the order item.
     *
     * @return float|null Tax amount.
     */
    public function getTaxAmount() {
        return $this->item->getTaxAmount();
    }

    /**
     * Gets the tax before discount for the order item.
     *
     * @return float|null Tax before discount.
     */
    public function getTaxBeforeDiscount() {
        return $this->item->getTaxBeforeDiscount();
    }

    /**
     * Gets the tax canceled for the order item.
     *
     * @return float|null Tax canceled.
     */
    public function getTaxCanceled() {
        return $this->item->getTaxCanceled();
    }

    /**
     * Gets the tax invoiced for the order item.
     *
     * @return float|null Tax invoiced.
     */
    public function getTaxInvoiced() {
        return $this->item->getTaxInvoiced();
    }

    /**
     * Gets the tax percent for the order item.
     *
     * @return float|null Tax percent.
     */
    public function getTaxPercent() {
        return $this->item->getTaxPercent();
    }

    /**
     * Gets the tax refunded for the order item.
     *
     * @return float|null Tax refunded.
     */
    public function getTaxRefunded() {
        return $this->item->getTaxRefunded();
    }

    /**
     * Gets the updated-at timestamp for the order item.
     *
     * @return string|null Updated-at timestamp.
     */
    public function getUpdatedAt() {
        return $this->item->getUpdatedAt();
    }

    /**
     * Gets the WEEE tax applied for the order item.
     *
     * @return string|null WEEE tax applied.
     */
    public function getWeeeTaxApplied() {
        return $this->item->getWeeeTaxApplied();
    }

    /**
     * Gets the WEEE tax applied amount for the order item.
     *
     * @return float|null WEEE tax applied amount.
     */
    public function getWeeeTaxAppliedAmount() {
        return $this->item->getWeeeTaxAppliedAmount();
    }

    /**
     * Gets the WEEE tax applied row amount for the order item.
     *
     * @return float|null WEEE tax applied row amount.
     */
    public function getWeeeTaxAppliedRowAmount() {
        return $this->item->getWeeeTaxAppliedRowAmount();
    }

    /**
     * Gets the WEEE tax disposition for the order item.
     *
     * @return float|null WEEE tax disposition.
     */
    public function getWeeeTaxDisposition() {
        return $this->item->getWeeeTaxDisposition();
    }

    /**
     * Gets the WEEE tax row disposition for the order item.
     *
     * @return float|null WEEE tax row disposition.
     */
    public function getWeeeTaxRowDisposition() {
        return $this->item->getWeeeTaxRowDisposition();
    }

    /**
     * Gets the weight for the order item.
     *
     * @return float|null Weight.
     */
    public function getWeight() {
        return $this->item->getWeight();
    }

    /**
     * Gets the parent item
     *
     * @return \Magento\Sales\Api\Data\OrderItemInterface|null Parent item
     */
    public function getParentItem() {
        return $this->item->getParentItem();
    }

}
