<?php

namespace FilippoToso\Travelport\Util;

class FarePricing
{

    /**
     * @var typePTC $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var typeMoney $TotalFareAmount
     */
    protected $TotalFareAmount = null;

    /**
     * @var boolean $PrivateFare
     */
    protected $PrivateFare = null;

    /**
     * @var boolean $NegotiatedFare
     */
    protected $NegotiatedFare = null;

    /**
     * @var boolean $AutoPriceable
     */
    protected $AutoPriceable = null;

    /**
     * @var typeMoney $TotalNetFareAmount
     */
    protected $TotalNetFareAmount = null;

    /**
     * @var typeMoney $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeRef $MMid
     */
    protected $MMid = null;

    /**
     * @param typePTC $PassengerType
     * @param typeMoney $TotalFareAmount
     * @param boolean $PrivateFare
     * @param boolean $NegotiatedFare
     * @param boolean $AutoPriceable
     * @param typeMoney $TotalNetFareAmount
     * @param typeMoney $BaseFare
     * @param typeMoney $Taxes
     * @param typeRef $MMid
     */
    public function __construct($PassengerType = null, $TotalFareAmount = null, $PrivateFare = null, $NegotiatedFare = null, $AutoPriceable = null, $TotalNetFareAmount = null, $BaseFare = null, $Taxes = null, $MMid = null)
    {
      $this->PassengerType = $PassengerType;
      $this->TotalFareAmount = $TotalFareAmount;
      $this->PrivateFare = $PrivateFare;
      $this->NegotiatedFare = $NegotiatedFare;
      $this->AutoPriceable = $AutoPriceable;
      $this->TotalNetFareAmount = $TotalNetFareAmount;
      $this->BaseFare = $BaseFare;
      $this->Taxes = $Taxes;
      $this->MMid = $MMid;
    }

    /**
     * @return typePTC
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param typePTC $PassengerType
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalFareAmount()
    {
      return $this->TotalFareAmount;
    }

    /**
     * @param typeMoney $TotalFareAmount
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setTotalFareAmount($TotalFareAmount)
    {
      $this->TotalFareAmount = $TotalFareAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateFare()
    {
      return $this->PrivateFare;
    }

    /**
     * @param boolean $PrivateFare
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setPrivateFare($PrivateFare)
    {
      $this->PrivateFare = $PrivateFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNegotiatedFare()
    {
      return $this->NegotiatedFare;
    }

    /**
     * @param boolean $NegotiatedFare
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setNegotiatedFare($NegotiatedFare)
    {
      $this->NegotiatedFare = $NegotiatedFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoPriceable()
    {
      return $this->AutoPriceable;
    }

    /**
     * @param boolean $AutoPriceable
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setAutoPriceable($AutoPriceable)
    {
      $this->AutoPriceable = $AutoPriceable;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalNetFareAmount()
    {
      return $this->TotalNetFareAmount;
    }

    /**
     * @param typeMoney $TotalNetFareAmount
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setTotalNetFareAmount($TotalNetFareAmount)
    {
      $this->TotalNetFareAmount = $TotalNetFareAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param typeMoney $BaseFare
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
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
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getMMid()
    {
      return $this->MMid;
    }

    /**
     * @param typeRef $MMid
     * @return \FilippoToso\Travelport\Util\FarePricing
     */
    public function setMMid($MMid)
    {
      $this->MMid = $MMid;
      return $this;
    }

}
