<?php

namespace FilippoToso\Travelport\System;

class Penalty
{

    /**
     * @var boolean $CancelRefund
     */
    protected $CancelRefund = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @var boolean $NonExchangeable
     */
    protected $NonExchangeable = null;

    /**
     * @var boolean $CancelationPenalty
     */
    protected $CancelationPenalty = null;

    /**
     * @var boolean $ReissuePenalty
     */
    protected $ReissuePenalty = null;

    /**
     * @var boolean $NonReissuePenalty
     */
    protected $NonReissuePenalty = null;

    /**
     * @var boolean $TicketRefundPenalty
     */
    protected $TicketRefundPenalty = null;

    /**
     * @var boolean $ChargeApplicable
     */
    protected $ChargeApplicable = null;

    /**
     * @var boolean $ChargePortion
     */
    protected $ChargePortion = null;

    /**
     * @var typeMoney $PenaltyAmount
     */
    protected $PenaltyAmount = null;

    /**
     * @param boolean $CancelRefund
     * @param boolean $NonRefundable
     * @param boolean $NonExchangeable
     * @param boolean $CancelationPenalty
     * @param boolean $ReissuePenalty
     * @param boolean $NonReissuePenalty
     * @param boolean $TicketRefundPenalty
     * @param boolean $ChargeApplicable
     * @param boolean $ChargePortion
     * @param typeMoney $PenaltyAmount
     */
    public function __construct($CancelRefund = null, $NonRefundable = null, $NonExchangeable = null, $CancelationPenalty = null, $ReissuePenalty = null, $NonReissuePenalty = null, $TicketRefundPenalty = null, $ChargeApplicable = null, $ChargePortion = null, $PenaltyAmount = null)
    {
      $this->CancelRefund = $CancelRefund;
      $this->NonRefundable = $NonRefundable;
      $this->NonExchangeable = $NonExchangeable;
      $this->CancelationPenalty = $CancelationPenalty;
      $this->ReissuePenalty = $ReissuePenalty;
      $this->NonReissuePenalty = $NonReissuePenalty;
      $this->TicketRefundPenalty = $TicketRefundPenalty;
      $this->ChargeApplicable = $ChargeApplicable;
      $this->ChargePortion = $ChargePortion;
      $this->PenaltyAmount = $PenaltyAmount;
    }

    /**
     * @return boolean
     */
    public function getCancelRefund()
    {
      return $this->CancelRefund;
    }

    /**
     * @param boolean $CancelRefund
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setCancelRefund($CancelRefund)
    {
      $this->CancelRefund = $CancelRefund;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonExchangeable()
    {
      return $this->NonExchangeable;
    }

    /**
     * @param boolean $NonExchangeable
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setNonExchangeable($NonExchangeable)
    {
      $this->NonExchangeable = $NonExchangeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancelationPenalty()
    {
      return $this->CancelationPenalty;
    }

    /**
     * @param boolean $CancelationPenalty
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setCancelationPenalty($CancelationPenalty)
    {
      $this->CancelationPenalty = $CancelationPenalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReissuePenalty()
    {
      return $this->ReissuePenalty;
    }

    /**
     * @param boolean $ReissuePenalty
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setReissuePenalty($ReissuePenalty)
    {
      $this->ReissuePenalty = $ReissuePenalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonReissuePenalty()
    {
      return $this->NonReissuePenalty;
    }

    /**
     * @param boolean $NonReissuePenalty
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setNonReissuePenalty($NonReissuePenalty)
    {
      $this->NonReissuePenalty = $NonReissuePenalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketRefundPenalty()
    {
      return $this->TicketRefundPenalty;
    }

    /**
     * @param boolean $TicketRefundPenalty
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setTicketRefundPenalty($TicketRefundPenalty)
    {
      $this->TicketRefundPenalty = $TicketRefundPenalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeApplicable()
    {
      return $this->ChargeApplicable;
    }

    /**
     * @param boolean $ChargeApplicable
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setChargeApplicable($ChargeApplicable)
    {
      $this->ChargeApplicable = $ChargeApplicable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargePortion()
    {
      return $this->ChargePortion;
    }

    /**
     * @param boolean $ChargePortion
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setChargePortion($ChargePortion)
    {
      $this->ChargePortion = $ChargePortion;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPenaltyAmount()
    {
      return $this->PenaltyAmount;
    }

    /**
     * @param typeMoney $PenaltyAmount
     * @return \FilippoToso\Travelport\System\Penalty
     */
    public function setPenaltyAmount($PenaltyAmount)
    {
      $this->PenaltyAmount = $PenaltyAmount;
      return $this;
    }

}
