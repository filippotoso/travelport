<?php

namespace FilippoToso\Travelport\Rail;

class Charges
{

    /**
     * @var typeMoney $AirCharge
     */
    protected $AirCharge = null;

    /**
     * @var typeMoney $OptionalCharge
     */
    protected $OptionalCharge = null;

    /**
     * @var typeMoney $WaiverCharge
     */
    protected $WaiverCharge = null;

    /**
     * @var StringLength1 $WaiverChargeType
     */
    protected $WaiverChargeType = null;

    /**
     * @var typeMoney $PortCharge
     */
    protected $PortCharge = null;

    /**
     * @var StringLength1to13 $PortChargeDescription
     */
    protected $PortChargeDescription = null;

    /**
     * @var typeMoney $PenaltyCharge
     */
    protected $PenaltyCharge = null;

    /**
     * @param typeMoney $AirCharge
     * @param typeMoney $OptionalCharge
     * @param typeMoney $WaiverCharge
     * @param StringLength1 $WaiverChargeType
     * @param typeMoney $PortCharge
     * @param StringLength1to13 $PortChargeDescription
     * @param typeMoney $PenaltyCharge
     */
    public function __construct($AirCharge = null, $OptionalCharge = null, $WaiverCharge = null, $WaiverChargeType = null, $PortCharge = null, $PortChargeDescription = null, $PenaltyCharge = null)
    {
      $this->AirCharge = $AirCharge;
      $this->OptionalCharge = $OptionalCharge;
      $this->WaiverCharge = $WaiverCharge;
      $this->WaiverChargeType = $WaiverChargeType;
      $this->PortCharge = $PortCharge;
      $this->PortChargeDescription = $PortChargeDescription;
      $this->PenaltyCharge = $PenaltyCharge;
    }

    /**
     * @return typeMoney
     */
    public function getAirCharge()
    {
      return $this->AirCharge;
    }

    /**
     * @param typeMoney $AirCharge
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setAirCharge($AirCharge)
    {
      $this->AirCharge = $AirCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getOptionalCharge()
    {
      return $this->OptionalCharge;
    }

    /**
     * @param typeMoney $OptionalCharge
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setOptionalCharge($OptionalCharge)
    {
      $this->OptionalCharge = $OptionalCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getWaiverCharge()
    {
      return $this->WaiverCharge;
    }

    /**
     * @param typeMoney $WaiverCharge
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setWaiverCharge($WaiverCharge)
    {
      $this->WaiverCharge = $WaiverCharge;
      return $this;
    }

    /**
     * @return StringLength1
     */
    public function getWaiverChargeType()
    {
      return $this->WaiverChargeType;
    }

    /**
     * @param StringLength1 $WaiverChargeType
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setWaiverChargeType($WaiverChargeType)
    {
      $this->WaiverChargeType = $WaiverChargeType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPortCharge()
    {
      return $this->PortCharge;
    }

    /**
     * @param typeMoney $PortCharge
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setPortCharge($PortCharge)
    {
      $this->PortCharge = $PortCharge;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getPortChargeDescription()
    {
      return $this->PortChargeDescription;
    }

    /**
     * @param StringLength1to13 $PortChargeDescription
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setPortChargeDescription($PortChargeDescription)
    {
      $this->PortChargeDescription = $PortChargeDescription;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPenaltyCharge()
    {
      return $this->PenaltyCharge;
    }

    /**
     * @param typeMoney $PenaltyCharge
     * @return \FilippoToso\Travelport\Rail\Charges
     */
    public function setPenaltyCharge($PenaltyCharge)
    {
      $this->PenaltyCharge = $PenaltyCharge;
      return $this;
    }

}
