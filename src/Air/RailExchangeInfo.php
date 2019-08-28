<?php

namespace FilippoToso\Travelport\Air;

class RailExchangeInfo
{

    /**
     * @var typeMoney $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var typeMoney $CancellationFee
     */
    protected $CancellationFee = null;

    /**
     * @var typeMoney $ExchangeAmount
     */
    protected $ExchangeAmount = null;

    /**
     * @var typeMoney $ApproximateRefundAmount
     */
    protected $ApproximateRefundAmount = null;

    /**
     * @var typeMoney $ApproximateCancellationFee
     */
    protected $ApproximateCancellationFee = null;

    /**
     * @var typeMoney $ApproximateExchangeAmount
     */
    protected $ApproximateExchangeAmount = null;

    /**
     * @var typeMoney $RetainAmount
     */
    protected $RetainAmount = null;

    /**
     * @param typeMoney $RefundAmount
     * @param typeMoney $CancellationFee
     * @param typeMoney $ExchangeAmount
     * @param typeMoney $ApproximateRefundAmount
     * @param typeMoney $ApproximateCancellationFee
     * @param typeMoney $ApproximateExchangeAmount
     * @param typeMoney $RetainAmount
     */
    public function __construct($RefundAmount = null, $CancellationFee = null, $ExchangeAmount = null, $ApproximateRefundAmount = null, $ApproximateCancellationFee = null, $ApproximateExchangeAmount = null, $RetainAmount = null)
    {
      $this->RefundAmount = $RefundAmount;
      $this->CancellationFee = $CancellationFee;
      $this->ExchangeAmount = $ExchangeAmount;
      $this->ApproximateRefundAmount = $ApproximateRefundAmount;
      $this->ApproximateCancellationFee = $ApproximateCancellationFee;
      $this->ApproximateExchangeAmount = $ApproximateExchangeAmount;
      $this->RetainAmount = $RetainAmount;
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
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCancellationFee()
    {
      return $this->CancellationFee;
    }

    /**
     * @param typeMoney $CancellationFee
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setCancellationFee($CancellationFee)
    {
      $this->CancellationFee = $CancellationFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExchangeAmount()
    {
      return $this->ExchangeAmount;
    }

    /**
     * @param typeMoney $ExchangeAmount
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setExchangeAmount($ExchangeAmount)
    {
      $this->ExchangeAmount = $ExchangeAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateRefundAmount()
    {
      return $this->ApproximateRefundAmount;
    }

    /**
     * @param typeMoney $ApproximateRefundAmount
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setApproximateRefundAmount($ApproximateRefundAmount)
    {
      $this->ApproximateRefundAmount = $ApproximateRefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateCancellationFee()
    {
      return $this->ApproximateCancellationFee;
    }

    /**
     * @param typeMoney $ApproximateCancellationFee
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setApproximateCancellationFee($ApproximateCancellationFee)
    {
      $this->ApproximateCancellationFee = $ApproximateCancellationFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateExchangeAmount()
    {
      return $this->ApproximateExchangeAmount;
    }

    /**
     * @param typeMoney $ApproximateExchangeAmount
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setApproximateExchangeAmount($ApproximateExchangeAmount)
    {
      $this->ApproximateExchangeAmount = $ApproximateExchangeAmount;
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
     * @return \FilippoToso\Travelport\Air\RailExchangeInfo
     */
    public function setRetainAmount($RetainAmount)
    {
      $this->RetainAmount = $RetainAmount;
      return $this;
    }

}
