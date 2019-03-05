<?php

namespace FilippoToso\Travelport\Util;

class AirRefundInfo
{

    /**
     * @var RefundRemark $RefundRemark
     */
    protected $RefundRemark = null;

    /**
     * @var typeMoney $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var typeMoney $RetainAmount
     */
    protected $RetainAmount = null;

    /**
     * @var typeMoney $RefundFee
     */
    protected $RefundFee = null;

    /**
     * @var string $RefundableTaxes
     */
    protected $RefundableTaxes = null;

    /**
     * @var typeCurrency $FiledCurrency
     */
    protected $FiledCurrency = null;

    /**
     * @var float $ConversionRate
     */
    protected $ConversionRate = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $OriginalTicketTotal
     */
    protected $OriginalTicketTotal = null;

    /**
     * @var typeMoney $ForfeitAmount
     */
    protected $ForfeitAmount = null;

    /**
     * @var boolean $Retain
     */
    protected $Retain = null;

    /**
     * @var boolean $Refund
     */
    protected $Refund = null;

    /**
     * @param RefundRemark $RefundRemark
     * @param typeMoney $RefundAmount
     * @param typeMoney $RetainAmount
     * @param typeMoney $RefundFee
     * @param string $RefundableTaxes
     * @param typeCurrency $FiledCurrency
     * @param float $ConversionRate
     * @param typeMoney $Taxes
     * @param typeMoney $OriginalTicketTotal
     * @param typeMoney $ForfeitAmount
     * @param boolean $Retain
     * @param boolean $Refund
     */
    public function __construct($RefundRemark = null, $RefundAmount = null, $RetainAmount = null, $RefundFee = null, $RefundableTaxes = null, $FiledCurrency = null, $ConversionRate = null, $Taxes = null, $OriginalTicketTotal = null, $ForfeitAmount = null, $Retain = null, $Refund = null)
    {
      $this->RefundRemark = $RefundRemark;
      $this->RefundAmount = $RefundAmount;
      $this->RetainAmount = $RetainAmount;
      $this->RefundFee = $RefundFee;
      $this->RefundableTaxes = $RefundableTaxes;
      $this->FiledCurrency = $FiledCurrency;
      $this->ConversionRate = $ConversionRate;
      $this->Taxes = $Taxes;
      $this->OriginalTicketTotal = $OriginalTicketTotal;
      $this->ForfeitAmount = $ForfeitAmount;
      $this->Retain = $Retain;
      $this->Refund = $Refund;
    }

    /**
     * @return RefundRemark
     */
    public function getRefundRemark()
    {
      return $this->RefundRemark;
    }

    /**
     * @param RefundRemark $RefundRemark
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRefundRemark($RefundRemark)
    {
      $this->RefundRemark = $RefundRemark;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param typeMoney $RefundAmount
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRetainAmount()
    {
      return $this->RetainAmount;
    }

    /**
     * @param typeMoney $RetainAmount
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRetainAmount($RetainAmount)
    {
      $this->RetainAmount = $RetainAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundFee()
    {
      return $this->RefundFee;
    }

    /**
     * @param typeMoney $RefundFee
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRefundFee($RefundFee)
    {
      $this->RefundFee = $RefundFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundableTaxes()
    {
      return $this->RefundableTaxes;
    }

    /**
     * @param string $RefundableTaxes
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRefundableTaxes($RefundableTaxes)
    {
      $this->RefundableTaxes = $RefundableTaxes;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getFiledCurrency()
    {
      return $this->FiledCurrency;
    }

    /**
     * @param typeCurrency $FiledCurrency
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setFiledCurrency($FiledCurrency)
    {
      $this->FiledCurrency = $FiledCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->ConversionRate;
    }

    /**
     * @param float $ConversionRate
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setConversionRate($ConversionRate)
    {
      $this->ConversionRate = $ConversionRate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getOriginalTicketTotal()
    {
      return $this->OriginalTicketTotal;
    }

    /**
     * @param typeMoney $OriginalTicketTotal
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setOriginalTicketTotal($OriginalTicketTotal)
    {
      $this->OriginalTicketTotal = $OriginalTicketTotal;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getForfeitAmount()
    {
      return $this->ForfeitAmount;
    }

    /**
     * @param typeMoney $ForfeitAmount
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setForfeitAmount($ForfeitAmount)
    {
      $this->ForfeitAmount = $ForfeitAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetain()
    {
      return $this->Retain;
    }

    /**
     * @param boolean $Retain
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRetain($Retain)
    {
      $this->Retain = $Retain;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param boolean $Refund
     * @return \FilippoToso\Travelport\Util\AirRefundInfo
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

}
