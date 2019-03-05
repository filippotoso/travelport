<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirSearchParameters
{

    /**
     * @var boolean $NoAdvancePurchase
     */
    protected $NoAdvancePurchase = null;

    /**
     * @var boolean $RefundableFares
     */
    protected $RefundableFares = null;

    /**
     * @var boolean $NonPenaltyFares
     */
    protected $NonPenaltyFares = null;

    /**
     * @var boolean $UnRestrictedFares
     */
    protected $UnRestrictedFares = null;

    /**
     * @param boolean $NoAdvancePurchase
     * @param boolean $RefundableFares
     * @param boolean $NonPenaltyFares
     * @param boolean $UnRestrictedFares
     */
    public function __construct($NoAdvancePurchase = null, $RefundableFares = null, $NonPenaltyFares = null, $UnRestrictedFares = null)
    {
      $this->NoAdvancePurchase = $NoAdvancePurchase;
      $this->RefundableFares = $RefundableFares;
      $this->NonPenaltyFares = $NonPenaltyFares;
      $this->UnRestrictedFares = $UnRestrictedFares;
    }

    /**
     * @return boolean
     */
    public function getNoAdvancePurchase()
    {
      return $this->NoAdvancePurchase;
    }

    /**
     * @param boolean $NoAdvancePurchase
     * @return \FilippoToso\Travelport\GDSQueue\AirSearchParameters
     */
    public function setNoAdvancePurchase($NoAdvancePurchase)
    {
      $this->NoAdvancePurchase = $NoAdvancePurchase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundableFares()
    {
      return $this->RefundableFares;
    }

    /**
     * @param boolean $RefundableFares
     * @return \FilippoToso\Travelport\GDSQueue\AirSearchParameters
     */
    public function setRefundableFares($RefundableFares)
    {
      $this->RefundableFares = $RefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonPenaltyFares()
    {
      return $this->NonPenaltyFares;
    }

    /**
     * @param boolean $NonPenaltyFares
     * @return \FilippoToso\Travelport\GDSQueue\AirSearchParameters
     */
    public function setNonPenaltyFares($NonPenaltyFares)
    {
      $this->NonPenaltyFares = $NonPenaltyFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnRestrictedFares()
    {
      return $this->UnRestrictedFares;
    }

    /**
     * @param boolean $UnRestrictedFares
     * @return \FilippoToso\Travelport\GDSQueue\AirSearchParameters
     */
    public function setUnRestrictedFares($UnRestrictedFares)
    {
      $this->UnRestrictedFares = $UnRestrictedFares;
      return $this;
    }

}
