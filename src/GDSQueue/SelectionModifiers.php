<?php

namespace FilippoToso\Travelport\GDSQueue;

class SelectionModifiers
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var typeRef[] $SvcSegmentRef
     */
    protected $SvcSegmentRef = null;

    /**
     * @var typeCarrier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var anonymous1084 $RFIC
     */
    protected $RFIC = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param typeCarrier $SupplierCode
     * @param anonymous1084 $RFIC
     */
    public function __construct($AirSegmentRef = null, $SupplierCode = null, $RFIC = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->SupplierCode = $SupplierCode;
      $this->RFIC = $RFIC;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\SelectionModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getSvcSegmentRef()
    {
      return $this->SvcSegmentRef;
    }

    /**
     * @param typeRef[] $SvcSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\SelectionModifiers
     */
    public function setSvcSegmentRef(array $SvcSegmentRef = null)
    {
      $this->SvcSegmentRef = $SvcSegmentRef;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeCarrier $SupplierCode
     * @return \FilippoToso\Travelport\GDSQueue\SelectionModifiers
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return anonymous1084
     */
    public function getRFIC()
    {
      return $this->RFIC;
    }

    /**
     * @param anonymous1084 $RFIC
     * @return \FilippoToso\Travelport\GDSQueue\SelectionModifiers
     */
    public function setRFIC($RFIC)
    {
      $this->RFIC = $RFIC;
      return $this;
    }

}
