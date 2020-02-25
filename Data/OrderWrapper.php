<?php

namespace Rfmcube\Customapi\Data;

class OrderWrapper {

    /**
     * @var \Magento\Sales\Model\Order
     */
    protected $order;

    /**
     * @var \Rfmcube\Customapi\Data\OrderItemWrapper[]
     */
    protected $items;

    /**
     * @param \Magento\Sales\Model\Order $order
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    function __construct(\Magento\Sales\Model\Order $order) {
        $this->order = $order;
    }

    /**
     * Gets the negative adjustment value for the order.
     *
     * @return float|null Negative adjustment value.
     */
    public function getAdjustmentNegative() {
        return $this->order->getAdjustmentNegative();
    }

    /**
     * Gets the positive adjustment value for the order.
     *
     * @return float|null Positive adjustment value.
     */
    public function getAdjustmentPositive() {
        return $this->order->getAdjustmentPositive();
    }

    /**
     * Gets the applied rule IDs for the order.
     *
     * @return string|null Applied rule IDs.
     */
    public function getAppliedRuleIds() {
        return $this->order->getAppliedRuleIds();
    }

    /**
     * Gets the base negative adjustment value for the order.
     *
     * @return float|null Base negative adjustment value.
     */
    public function getBaseAdjustmentNegative() {
        return $this->order->getBaseAdjustmentNegative();
    }

    /**
     * Gets the base positive adjustment value for the order.
     *
     * @return float|null Base positive adjustment value.
     */
    public function getBaseAdjustmentPositive() {
        return $this->order->getBaseAdjustmentPositive();
    }

    /**
     * Gets the base currency code for the order.
     *
     * @return string|null Base currency code.
     */
    public function getBaseCurrencyCode() {
        return $this->order->getBaseCurrencyCode();
    }

    /**
     * Gets the base discount amount for the order.
     *
     * @return float|null Base discount amount.
     */
    public function getBaseDiscountAmount() {
        return $this->order->getBaseDiscountAmount();
    }

    /**
     * Gets the base discount canceled for the order.
     *
     * @return float|null Base discount canceled.
     */
    public function getBaseDiscountCanceled() {
        return $this->order->getBaseDiscountCanceled();
    }

    /**
     * Gets the base discount invoiced amount for the order.
     *
     * @return float|null Base discount invoiced.
     */
    public function getBaseDiscountInvoiced() {
        return $this->order->getBaseDiscountInvoiced();
    }

    /**
     * Gets the base discount refunded amount for the order.
     *
     * @return float|null Base discount refunded.
     */
    public function getBaseDiscountRefunded() {
        return $this->order->getBaseDiscountRefunded();
    }

    /**
     * Gets the base grand total for the order.
     *
     * @return float Base grand total.
     */
    public function getBaseGrandTotal() {
        return $this->order->getBaseGrandTotal();
    }

    /**
     * Gets the base discount tax compensation amount for the order.
     *
     * @return float|null Base discount tax compensation amount.
     */
    public function getBaseDiscountTaxCompensationAmount() {
        return $this->order->getBaseDiscountTaxCompensationAmount();
    }

    /**
     * Gets the base discount tax compensation invoiced amount for the order.
     *
     * @return float|null Base discount tax compensation invoiced.
     */
    public function getBaseDiscountTaxCompensationInvoiced() {
        return $this->order->getBaseDiscountTaxCompensationInvoiced();
    }

    /**
     * Gets the base discount tax compensation refunded amount for the order.
     *
     * @return float|null Base discount tax compensation refunded.
     */
    public function getBaseDiscountTaxCompensationRefunded() {
        return $this->order->getBaseDiscountTaxCompensationRefunded();
    }

    /**
     * Gets the base shipping amount for the order.
     *
     * @return float|null Base shipping amount.
     */
    public function getBaseShippingAmount() {
        return $this->order->getBaseShippingAmount();
    }

    /**
     * Gets the base shipping canceled for the order.
     *
     * @return float|null Base shipping canceled.
     */
    public function getBaseShippingCanceled() {
        return $this->order->getBaseShippingCanceled();
    }

    /**
     * Gets the base shipping discount amount for the order.
     *
     * @return float|null Base shipping discount amount.
     */
    public function getBaseShippingDiscountAmount() {
        return $this->order->getBaseShippingDiscountAmount();
    }

    /**
     * Gets the base shipping discount tax compensation amount for the order.
     *
     * @return float|null Base shipping discount tax compensation amount.
     */
    public function getBaseShippingDiscountTaxCompensationAmnt() {
        return $this->order->getBaseShippingDiscountTaxCompensationAmnt();
    }

    /**
     * Gets the base shipping including tax for the order.
     *
     * @return float|null Base shipping including tax.
     */
    public function getBaseShippingInclTax() {
        return $this->order->getBaseShippingInclTax();
    }

    /**
     * Gets the base shipping invoiced amount for the order.
     *
     * @return float|null Base shipping invoiced.
     */
    public function getBaseShippingInvoiced() {
        return $this->order->getBaseShippingInvoiced();
    }

    /**
     * Gets the base shipping refunded amount for the order.
     *
     * @return float|null Base shipping refunded.
     */
    public function getBaseShippingRefunded() {
        return $this->order->getBaseShippingRefunded();
    }

    /**
     * Gets the base shipping tax amount for the order.
     *
     * @return float|null Base shipping tax amount.
     */
    public function getBaseShippingTaxAmount() {
        return $this->order->getBaseShippingTaxAmount();
    }

    /**
     * Gets the base shipping tax refunded amount for the order.
     *
     * @return float|null Base shipping tax refunded.
     */
    public function getBaseShippingTaxRefunded() {
        return $this->order->getBaseShippingTaxRefunded();
    }

    /**
     * Gets the base subtotal for the order.
     *
     * @return float|null Base subtotal.
     */
    public function getBaseSubtotal() {
        return $this->order->getBaseSubtotal();
    }

    /**
     * Gets the base subtotal canceled for the order.
     *
     * @return float|null Base subtotal canceled.
     */
    public function getBaseSubtotalCanceled() {
        return $this->order->getBaseSubtotalCanceled();
    }

    /**
     * Gets the base subtotal including tax for the order.
     *
     * @return float|null Base subtotal including tax.
     */
    public function getBaseSubtotalInclTax() {
        return $this->order->getBaseSubtotalInclTax();
    }

    /**
     * Gets the base subtotal invoiced amount for the order.
     *
     * @return float|null Base subtotal invoiced.
     */
    public function getBaseSubtotalInvoiced() {
        return $this->order->getBaseSubtotalInvoiced();
    }

    /**
     * Gets the base subtotal refunded amount for the order.
     *
     * @return float|null Base subtotal refunded.
     */
    public function getBaseSubtotalRefunded() {
        return $this->order->getBaseSubtotalRefunded();
    }

    /**
     * Gets the base tax amount for the order.
     *
     * @return float|null Base tax amount.
     */
    public function getBaseTaxAmount() {
        return $this->order->getBaseTaxAmount();
    }

    /**
     * Gets the base tax canceled for the order.
     *
     * @return float|null Base tax canceled.
     */
    public function getBaseTaxCanceled() {
        return $this->order->getBaseTaxCanceled();
    }

    /**
     * Gets the base tax invoiced amount for the order.
     *
     * @return float|null Base tax invoiced.
     */
    public function getBaseTaxInvoiced() {
        return $this->order->getBaseTaxInvoiced();
    }

    /**
     * Gets the base tax refunded amount for the order.
     *
     * @return float|null Base tax refunded.
     */
    public function getBaseTaxRefunded() {
        return $this->order->getBaseTaxRefunded();
    }

    /**
     * Gets the base total canceled for the order.
     *
     * @return float|null Base total canceled.
     */
    public function getBaseTotalCanceled() {
        return $this->order->getBaseTotalCanceled();
    }

    /**
     * Gets the base total due for the order.
     *
     * @return float|null Base total due.
     */
    public function getBaseTotalDue() {
        return $this->order->getBaseTotalDue();
    }

    /**
     * Gets the base total invoiced amount for the order.
     *
     * @return float|null Base total invoiced.
     */
    public function getBaseTotalInvoiced() {
        return $this->order->getBaseTotalInvoiced();
    }

    /**
     * Gets the base total invoiced cost for the order.
     *
     * @return float|null Base total invoiced cost.
     */
    public function getBaseTotalInvoicedCost() {
        return $this->order->getBaseTotalInvoicedCost();
    }

    /**
     * Gets the base total offline refunded amount for the order.
     *
     * @return float|null Base total offline refunded.
     */
    public function getBaseTotalOfflineRefunded() {
        return $this->order->getBaseTotalOfflineRefunded();
    }

    /**
     * Gets the base total online refunded amount for the order.
     *
     * @return float|null Base total online refunded.
     */
    public function getBaseTotalOnlineRefunded() {
        return $this->order->getBaseTotalOnlineRefunded();
    }

    /**
     * Gets the base total paid for the order.
     *
     * @return float|null Base total paid.
     */
    public function getBaseTotalPaid() {
        return $this->order->getBaseTotalPaid();
    }

    /**
     * Gets the base total quantity ordered for the order.
     *
     * @return float|null Base total quantity ordered.
     */
    public function getBaseTotalQtyOrdered() {
        return $this->order->getBaseTotalQtyOrdered();
    }

    /**
     * Gets the base total refunded amount for the order.
     *
     * @return float|null Base total refunded.
     */
    public function getBaseTotalRefunded() {
        return $this->order->getBaseTotalRefunded();
    }

    /**
     * Gets the base-to-global rate for the order.
     *
     * @return float|null Base-to-global rate.
     */
    public function getBaseToGlobalRate() {
        return $this->order->getBaseToGlobalRate();
    }

    /**
     * Gets the base-to-order rate for the order.
     *
     * @return float|null Base-to-order rate.
     */
    public function getBaseToOrderRate() {
        return $this->order->getBaseToOrderRate();
    }

    /**
     * Gets the billing address ID for the order.
     *
     * @return int|null Billing address ID.
     */
    public function getBillingAddressId() {
        return $this->order->getBillingAddressId();
    }

    /**
     * Gets the can-ship-partially flag value for the order.
     *
     * @return int|null Can-ship-partially flag value.
     */
    public function getCanShipPartially() {
        return $this->order->getCanShipPartially();
    }

    /**
     * Gets the can-ship-partially-item flag value for the order.
     *
     * @return int|null Can-ship-partially-item flag value.
     */
    public function getCanShipPartiallyItem() {
        return $this->order->getCanShipPartiallyItem();
    }

    /**
     * Gets the coupon code for the order.
     *
     * @return string|null Coupon code.
     */
    public function getCouponCode() {
        return $this->order->getCouponCode();
    }

    /**
     * Gets the created-at timestamp for the order.
     *
     * @return string|null Created-at timestamp.
     */
    public function getCreatedAt() {
        return $this->order->getCreatedAt();
    }

    /**
     * Sets the created-at timestamp for the order.
     *
     * @param string $createdAt timestamp
     * @return $this
     */
    public function setCreatedAt($createdAt) {
        return $this->order->setCreatedAt($createdAt);
    }

    /**
     * Gets the customer date-of-birth (DOB) for the order.
     *
     * @return string|null Customer date-of-birth (DOB).
     */
    public function getCustomerDob() {
        return $this->order->getCustomerDob();
    }

    /**
     * Gets the customer email address for the order.
     *
     * @return string Customer email address.
     */
    public function getCustomerEmail() {
        return $this->order->getCustomerEmail();
    }

    /**
     * Gets the customer first name for the order.
     *
     * @return string|null Customer first name.
     */
    public function getCustomerFirstname() {
        return $this->order->getCustomerFirstname();
    }

    /**
     * Gets the customer gender for the order.
     *
     * @return int|null Customer gender.
     */
    public function getCustomerGender() {
        return $this->order->getCustomerGender();
    }

    /**
     * Gets the customer group ID for the order.
     *
     * @return int|null Customer group ID.
     */
    public function getCustomerGroupId() {
        return $this->order->getCustomerGroupId();
    }

    /**
     * Gets the customer ID for the order.
     *
     * @return int|null Customer ID.
     */
    public function getCustomerId() {
        return $this->order->getCustomerId();
    }

    /**
     * Gets the customer-is-guest flag value for the order.
     *
     * @return int|null Customer-is-guest flag value.
     */
    public function getCustomerIsGuest() {
        return $this->order->getCustomerIsGuest();
    }

    /**
     * Gets the customer last name for the order.
     *
     * @return string|null Customer last name.
     */
    public function getCustomerLastname() {
        return $this->order->getCustomerLastname();
    }

    /**
     * Gets the customer middle name for the order.
     *
     * @return string|null Customer middle name.
     */
    public function getCustomerMiddlename() {
        return $this->order->getCustomerMiddlename();
    }

    /**
     * Gets the customer note for the order.
     *
     * @return string|null Customer note.
     */
    public function getCustomerNote() {
        return $this->order->getCustomerNote();
    }

    /**
     * Gets the customer-note-notify flag value for the order.
     *
     * @return int|null Customer-note-notify flag value.
     */
    public function getCustomerNoteNotify() {
        return $this->order->getCustomerNoteNotify();
    }

    /**
     * Gets the customer prefix for the order.
     *
     * @return string|null Customer prefix.
     */
    public function getCustomerPrefix() {
        return $this->order->getCustomerPrefix();
    }

    /**
     * Gets the customer suffix for the order.
     *
     * @return string|null Customer suffix.
     */
    public function getCustomerSuffix() {
        return $this->order->getCustomerSuffix();
    }

    /**
     * Gets the customer value-added tax (VAT) for the order.
     *
     * @return string|null Customer value-added tax (VAT).
     */
    public function getCustomerTaxvat() {
        return $this->order->getCustomerTaxvat();
    }

    /**
     * Gets the discount amount for the order.
     *
     * @return float|null Discount amount.
     */
    public function getDiscountAmount() {
        return $this->order->getDiscountAmount();
    }

    /**
     * Gets the discount canceled for the order.
     *
     * @return float|null Discount canceled.
     */
    public function getDiscountCanceled() {
        return $this->order->getDiscountCanceled();
    }

    /**
     * Gets the discount description for the order.
     *
     * @return string|null Discount description.
     */
    public function getDiscountDescription() {
        return $this->order->getDiscountDescription();
    }

    /**
     * Gets the discount invoiced amount for the order.
     *
     * @return float|null Discount invoiced.
     */
    public function getDiscountInvoiced() {
        return $this->order->getDiscountInvoiced();
    }

    /**
     * Gets the discount refunded amount for the order.
     *
     * @return float|null Discount refunded amount.
     */
    public function getDiscountRefunded() {
        return $this->order->getDiscountRefunded();
    }

    /**
     * Gets the edit increment value for the order.
     *
     * @return int|null Edit increment value.
     */
    public function getEditIncrement() {
        return $this->order->getEditIncrement();
    }

    /**
     * Gets the email-sent flag value for the order.
     *
     * @return int|null Email-sent flag value.
     */
    public function getEmailSent() {
        return $this->order->getEmailSent();
    }

    /**
     * Gets the ID for the order.
     *
     * @return int|null Order ID.
     */
    public function getEntityId() {
        return $this->order->getEntityId();
    }

    /**
     * Sets entity ID.
     *
     * @param int $entityId
     * @return $this
     */
    public function setEntityId($entityId) {
        return $this->order->setEntityId($entityId);
    }

    /**
     * Gets the external customer ID for the order.
     *
     * @return string|null External customer ID.
     */
    public function getExtCustomerId() {
        return $this->order->getExtCustomerId();
    }

    /**
     * Gets the external order ID for the order.
     *
     * @return string|null External order ID.
     */
    public function getExtOrderId() {
        return $this->order->getExtOrderId();
    }

    /**
     * Gets the forced-shipment-with-invoice flag value for the order.
     *
     * @return int|null Forced-shipment-with-invoice flag value.
     */
    public function getForcedShipmentWithInvoice() {
        return $this->order->getForcedShipmentWithInvoice();
    }

    /**
     * Gets the global currency code for the order.
     *
     * @return string|null Global currency code.
     */
    public function getGlobalCurrencyCode() {
        return $this->order->getGlobalCurrencyCode();
    }

    /**
     * Gets the grand total for the order.
     *
     * @return float Grand total.
     */
    public function getGrandTotal() {
        return $this->order->getGrandTotal();
    }

    /**
     * Gets the discount tax compensation amount for the order.
     *
     * @return float|null Discount tax compensation amount.
     */
    public function getDiscountTaxCompensationAmount() {
        return $this->order->getDiscountTaxCompensationAmount();
    }

    /**
     * Gets the discount tax compensation invoiced amount for the order.
     *
     * @return float|null Discount tax compensation invoiced amount.
     */
    public function getDiscountTaxCompensationInvoiced() {
        return $this->order->getDiscountTaxCompensationInvoiced();
    }

    /**
     * Gets the discount tax compensation refunded amount for the order.
     *
     * @return float|null Discount tax compensation refunded amount.
     */
    public function getDiscountTaxCompensationRefunded() {
        return $this->order->getDiscountTaxCompensationRefunded();
    }

    /**
     * Gets the hold before state for the order.
     *
     * @return string|null Hold before state.
     */
    public function getHoldBeforeState() {
        return $this->order->getHoldBeforeState();
    }

    /**
     * Gets the hold before status for the order.
     *
     * @return string|null Hold before status.
     */
    public function getHoldBeforeStatus() {
        return $this->order->getHoldBeforeStatus();
    }

    /**
     * Gets the increment ID for the order.
     *
     * @return string|null Increment ID.
     */
    public function getIncrementId() {
        return $this->order->getIncrementId();
    }

    /**
     * Gets the is-virtual flag value for the order.
     *
     * @return int|null Is-virtual flag value.
     */
    public function getIsVirtual() {
        return $this->order->getIsVirtual();
    }

    /**
     * Gets the order currency code for the order.
     *
     * @return string|null Order currency code.
     */
    public function getOrderCurrencyCode() {
        return $this->order->getOrderCurrencyCode();
    }

    /**
     * Gets the original increment ID for the order.
     *
     * @return string|null Original increment ID.
     */
    public function getOriginalIncrementId() {
        return $this->order->getOriginalIncrementId();
    }

    /**
     * Gets the payment authorization amount for the order.
     *
     * @return float|null Payment authorization amount.
     */
    public function getPaymentAuthorizationAmount() {
        return $this->order->getPaymentAuthorizationAmount();
    }

    /**
     * Gets the payment authorization expiration date for the order.
     *
     * @return int|null Payment authorization expiration date.
     */
    public function getPaymentAuthExpiration() {
        return $this->order->getPaymentAuthExpiration();
    }

    /**
     * Gets the protect code for the order.
     *
     * @return string|null Protect code.
     */
    public function getProtectCode() {
        return $this->order->getProtectCode();
    }

    /**
     * Gets the quote address ID for the order.
     *
     * @return int|null Quote address ID.
     */
    public function getQuoteAddressId() {
        return $this->order->getQuoteAddressId();
    }

    /**
     * Gets the quote ID for the order.
     *
     * @return int|null Quote ID.
     */
    public function getQuoteId() {
        return $this->order->getQuoteId();
    }

    /**
     * Gets the relation child ID for the order.
     *
     * @return string|null Relation child ID.
     */
    public function getRelationChildId() {
        return $this->order->getRelationChildId();
    }

    /**
     * Gets the relation child real ID for the order.
     *
     * @return string|null Relation child real ID.
     */
    public function getRelationChildRealId() {
        return $this->order->getRelationChildRealId();
    }

    /**
     * Gets the relation parent ID for the order.
     *
     * @return string|null Relation parent ID.
     */
    public function getRelationParentId() {
        return $this->order->getRelationParentId();
    }

    /**
     * Gets the relation parent real ID for the order.
     *
     * @return string|null Relation parent real ID.
     */
    public function getRelationParentRealId() {
        return $this->order->getRelationParentRealId();
    }

    /**
     * Gets the remote IP address for the order.
     *
     * @return string|null Remote IP address.
     */
    public function getRemoteIp() {
        return $this->order->getRemoteIp();
    }

    /**
     * Gets the shipping amount for the order.
     *
     * @return float|null Shipping amount.
     */
    public function getShippingAmount() {
        return $this->order->getShippingAmount();
    }

    /**
     * Gets the shipping canceled amount for the order.
     *
     * @return float|null Shipping canceled amount.
     */
    public function getShippingCanceled() {
        return $this->order->getShippingCanceled();
    }

    /**
     * Gets the shipping description for the order.
     *
     * @return string|null Shipping description.
     */
    public function getShippingDescription() {
        return $this->order->getShippingDescription();
    }

    /**
     * Gets the shipping discount amount for the order.
     *
     * @return float|null Shipping discount amount.
     */
    public function getShippingDiscountAmount() {
        return $this->order->getShippingDiscountAmount();
    }

    /**
     * Gets the shipping discount tax compensation amount for the order.
     *
     * @return float|null Shipping discount tax compensation amount.
     */
    public function getShippingDiscountTaxCompensationAmount() {
        return $this->order->getShippingDiscountTaxCompensationAmount();
    }

    /**
     * Gets the shipping including tax amount for the order.
     *
     * @return float|null Shipping including tax amount.
     */
    public function getShippingInclTax() {
        return $this->order->getShippingInclTax();
    }

    /**
     * Gets the shipping invoiced amount for the order.
     *
     * @return float|null Shipping invoiced amount.
     */
    public function getShippingInvoiced() {
        return $this->order->getShippingInvoiced();
    }

    /**
     * Gets the shipping refunded amount for the order.
     *
     * @return float|null Shipping refunded amount.
     */
    public function getShippingRefunded() {
        return $this->order->getShippingRefunded();
    }

    /**
     * Gets the shipping tax amount for the order.
     *
     * @return float|null Shipping tax amount.
     */
    public function getShippingTaxAmount() {
        return $this->order->getShippingTaxAmount();
    }

    /**
     * Gets the shipping tax refunded amount for the order.
     *
     * @return float|null Shipping tax refunded amount.
     */
    public function getShippingTaxRefunded() {
        return $this->order->getShippingTaxRefunded();
    }

    /**
     * Gets the state for the order.
     *
     * @return string|null State.
     */
    public function getState() {
        return $this->order->getState();
    }

    /**
     * Gets the status for the order.
     *
     * @return string|null Status.
     */
    public function getStatus() {
        return $this->order->getStatus();
    }

    /**
     * Gets the store currency code for the order.
     *
     * @return string|null Store currency code.
     */
    public function getStoreCurrencyCode() {
        return $this->order->getStoreCurrencyCode();
    }

    /**
     * Gets the store ID for the order.
     *
     * @return int|null Store ID.
     */
    public function getStoreId() {
        return $this->order->getStoreId();
    }

    /**
     * Gets the store name for the order.
     *
     * @return string|null Store name.
     */
    public function getStoreName() {
        return $this->order->getStoreName();
    }

    /**
     * Gets the store-to-base rate for the order.
     *
     * @return float|null Store-to-base rate.
     */
    public function getStoreToBaseRate() {
        return $this->order->getStoreToBaseRate();
    }

    /**
     * Gets the store-to-order rate for the order.
     *
     * @return float|null Store-to-order rate.
     */
    public function getStoreToOrderRate() {
        return $this->order->getStoreToOrderRate();
    }

    /**
     * Gets the subtotal for the order.
     *
     * @return float|null Subtotal.
     */
    public function getSubtotal() {
        return $this->order->getSubtotal();
    }

    /**
     * Gets the subtotal canceled amount for the order.
     *
     * @return float|null Subtotal canceled amount.
     */
    public function getSubtotalCanceled() {
        return $this->order->getSubtotalCanceled();
    }

    /**
     * Gets the subtotal including tax amount for the order.
     *
     * @return float|null Subtotal including tax amount.
     */
    public function getSubtotalInclTax() {
        return $this->order->getSubtotalInclTax();
    }

    /**
     * Gets the subtotal invoiced amount for the order.
     *
     * @return float|null Subtotal invoiced amount.
     */
    public function getSubtotalInvoiced() {
        return $this->order->getSubtotalInvoiced();
    }

    /**
     * Gets the subtotal refunded amount for the order.
     *
     * @return float|null Subtotal refunded amount.
     */
    public function getSubtotalRefunded() {
        return $this->order->getSubtotalRefunded();
    }

    /**
     * Gets the tax amount for the order.
     *
     * @return float|null Tax amount.
     */
    public function getTaxAmount() {
        return $this->order->getTaxAmount();
    }

    /**
     * Gets the tax canceled amount for the order.
     *
     * @return float|null Tax canceled amount.
     */
    public function getTaxCanceled() {
        return $this->order->getTaxCanceled();
    }

    /**
     * Gets the tax invoiced amount for the order.
     *
     * @return float|null Tax invoiced amount.
     */
    public function getTaxInvoiced() {
        return $this->order->getTaxInvoiced();
    }

    /**
     * Gets the tax refunded amount for the order.
     *
     * @return float|null Tax refunded amount.
     */
    public function getTaxRefunded() {
        return $this->order->getTaxRefunded();
    }

    /**
     * Gets the total canceled for the order.
     *
     * @return float|null Total canceled.
     */
    public function getTotalCanceled() {
        return $this->order->getTotalCanceled();
    }

    /**
     * Gets the total due for the order.
     *
     * @return float|null Total due.
     */
    public function getTotalDue() {
        return $this->order->getTotalDue();
    }

    /**
     * Gets the total invoiced amount for the order.
     *
     * @return float|null Total invoiced amount.
     */
    public function getTotalInvoiced() {
        return $this->order->getTotalInvoiced();
    }

    /**
     * Gets the total item count for the order.
     *
     * @return int|null Total item count.
     */
    public function getTotalItemCount() {
        return $this->order->getTotalItemCount();
    }

    /**
     * Gets the total offline refunded amount for the order.
     *
     * @return float|null Total offline refunded amount.
     */
    public function getTotalOfflineRefunded() {
        return $this->order->getTotalOfflineRefunded();
    }

    /**
     * Gets the total online refunded amount for the order.
     *
     * @return float|null Total online refunded amount.
     */
    public function getTotalOnlineRefunded() {
        return $this->order->getTotalOnlineRefunded();
    }

    /**
     * Gets the total paid for the order.
     *
     * @return float|null Total paid.
     */
    public function getTotalPaid() {
        return $this->order->getTotalPaid();
    }

    /**
     * Gets the total quantity ordered for the order.
     *
     * @return float|null Total quantity ordered.
     */
    public function getTotalQtyOrdered() {
        return $this->order->getTotalQtyOrdered();
    }

    /**
     * Gets the total amount refunded amount for the order.
     *
     * @return float|null Total amount refunded.
     */
    public function getTotalRefunded() {
        return $this->order->getTotalRefunded();
    }

    /**
     * Gets the updated-at timestamp for the order.
     *
     * @return string|null Updated-at timestamp.
     */
    public function getUpdatedAt() {
        return $this->order->getUpdatedAt();
    }

    /**
     * Gets the weight for the order.
     *
     * @return float|null Weight.
     */
    public function getWeight() {
        return $this->order->getWeight();
    }

    /**
     * Gets the X-Forwarded-For HTTP header field for the order.
     *
     * This field identifies the originating IP address of a client
     * connecting to a web server through an HTTP proxy or load balancer.
     *
     * @return string|null X-Forwarded-For field value.
     */
    public function getXForwardedFor() {
        return $this->order->getXForwardedFor();
    }

    /**
     * Gets items for the order.
     *
     * @return \Rfmcube\Customapi\Data\OrderItemWrapper[] Array of items.
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * Sets items for the order.
     *
     * @param \Magento\Sales\Api\Data\OrderItemInterface[] $items
     * @return $this
     */
    public function setItems($items) {
        $this->items = $items;
        return $this;
    }

    /**
     * Retrieve order billing address
     *
     * @return \Magento\Sales\Api\Data\OrderAddressInterface|null
     */
    public function getBillingAddress() {
        return $this->order->getBillingAddress();
    }

    /**
     * Gets order payment
     *
     * @return \Magento\Sales\Api\Data\OrderPaymentInterface|null
     */
    public function getPayment() {
        return $this->order->getPayment();
    }

    /**
     * Gets status histories for the order.
     *
     * @return \Magento\Sales\Api\Data\OrderStatusHistoryInterface[]|null Array of status histories.
     */
    public function getStatusHistories() {
        return $this->order->getStatusHistories();
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Sales\Api\Data\OrderExtensionInterface|null
     */
    public function getExtensionAttributes() {
        return $this->order->getExtensionAttributes();
    }

}
