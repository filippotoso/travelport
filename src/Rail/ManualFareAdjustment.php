<?php

namespace FilippoToso\Travelport\Rail;

class ManualFareAdjustment
{

    /**
     * @var typeAdjustmentTarget $AppliedOn
     */
    protected $AppliedOn = null;

    /**
     * @var typeAdjustmentType $AdjustmentType
     */
    protected $AdjustmentType = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var typeRef $PassengerRef
     */
    protected $PassengerRef = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @var typeFareTypeCode $FareType
     */
    protected $FareType = null;

    /**
     * @param typeAdjustmentTarget $AppliedOn
     * @param typeAdjustmentType $AdjustmentType
     * @param float $Value
     * @param typeRef $PassengerRef
     * @param typeTicketDesignator $TicketDesignator
     * @param typeFareTypeCode $FareType
     */
    public function __construct($AppliedOn = null, $AdjustmentType = null, $Value = null, $PassengerRef = null, $TicketDesignator = null, $FareType = null)
    {
      $this->AppliedOn = $AppliedOn;
      $this->AdjustmentType = $AdjustmentType;
      $this->Value = $Value;
      $this->PassengerRef = $PassengerRef;
      $this->TicketDesignator = $TicketDesignator;
      $this->FareType = $FareType;
    }

    /**
     * @return typeAdjustmentTarget
     */
    public function getAppliedOn()
    {
      return $this->AppliedOn;
    }

    /**
     * @param typeAdjustmentTarget $AppliedOn
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setAppliedOn($AppliedOn)
    {
      $this->AppliedOn = $AppliedOn;
      return $this;
    }

    /**
     * @return typeAdjustmentType
     */
    public function getAdjustmentType()
    {
      return $this->AdjustmentType;
    }

    /**
     * @param typeAdjustmentType $AdjustmentType
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setAdjustmentType($AdjustmentType)
    {
      $this->AdjustmentType = $AdjustmentType;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassengerRef()
    {
      return $this->PassengerRef;
    }

    /**
     * @param typeRef $PassengerRef
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setPassengerRef($PassengerRef)
    {
      $this->PassengerRef = $PassengerRef;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return typeFareTypeCode
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param typeFareTypeCode $FareType
     * @return \FilippoToso\Travelport\Rail\ManualFareAdjustment
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

}
