<?php

namespace FilippoToso\Travelport\Hotel;

class Commission
{

    /**
     * @var typeTrinary $Indicator
     */
    protected $Indicator = null;

    /**
     * @var string $Percent
     */
    protected $Percent = null;

    /**
     * @var typeMoney $CommissionAmount
     */
    protected $CommissionAmount = null;

    /**
     * @var typeMoney $ApproxCommissionAmount
     */
    protected $ApproxCommissionAmount = null;

    /**
     * @var typeMoney $CommissionOnSurcharges
     */
    protected $CommissionOnSurcharges = null;

    /**
     * @var typeMoney $ApproxCommissionOnSurcharges
     */
    protected $ApproxCommissionOnSurcharges = null;

    /**
     * @param typeTrinary $Indicator
     * @param string $Percent
     * @param typeMoney $CommissionAmount
     * @param typeMoney $ApproxCommissionAmount
     * @param typeMoney $CommissionOnSurcharges
     * @param typeMoney $ApproxCommissionOnSurcharges
     */
    public function __construct($Indicator = null, $Percent = null, $CommissionAmount = null, $ApproxCommissionAmount = null, $CommissionOnSurcharges = null, $ApproxCommissionOnSurcharges = null)
    {
      $this->Indicator = $Indicator;
      $this->Percent = $Percent;
      $this->CommissionAmount = $CommissionAmount;
      $this->ApproxCommissionAmount = $ApproxCommissionAmount;
      $this->CommissionOnSurcharges = $CommissionOnSurcharges;
      $this->ApproxCommissionOnSurcharges = $ApproxCommissionOnSurcharges;
    }

    /**
     * @return typeTrinary
     */
    public function getIndicator()
    {
      return $this->Indicator;
    }

    /**
     * @param typeTrinary $Indicator
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setIndicator($Indicator)
    {
      $this->Indicator = $Indicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param string $Percent
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCommissionAmount()
    {
      return $this->CommissionAmount;
    }

    /**
     * @param typeMoney $CommissionAmount
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setCommissionAmount($CommissionAmount)
    {
      $this->CommissionAmount = $CommissionAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproxCommissionAmount()
    {
      return $this->ApproxCommissionAmount;
    }

    /**
     * @param typeMoney $ApproxCommissionAmount
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setApproxCommissionAmount($ApproxCommissionAmount)
    {
      $this->ApproxCommissionAmount = $ApproxCommissionAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCommissionOnSurcharges()
    {
      return $this->CommissionOnSurcharges;
    }

    /**
     * @param typeMoney $CommissionOnSurcharges
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setCommissionOnSurcharges($CommissionOnSurcharges)
    {
      $this->CommissionOnSurcharges = $CommissionOnSurcharges;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproxCommissionOnSurcharges()
    {
      return $this->ApproxCommissionOnSurcharges;
    }

    /**
     * @param typeMoney $ApproxCommissionOnSurcharges
     * @return \FilippoToso\Travelport\Hotel\Commission
     */
    public function setApproxCommissionOnSurcharges($ApproxCommissionOnSurcharges)
    {
      $this->ApproxCommissionOnSurcharges = $ApproxCommissionOnSurcharges;
      return $this;
    }

}
