<?php

namespace FilippoToso\Travelport\Air;

class TravelComplianceData
{

    /**
     * @var PolicyCompliance[] $PolicyCompliance
     */
    protected $PolicyCompliance = null;

    /**
     * @var ContractCompliance[] $ContractCompliance
     */
    protected $ContractCompliance = null;

    /**
     * @var PreferredSupplier[] $PreferredSupplier
     */
    protected $PreferredSupplier = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var typeRef $PassiveSegmentRef
     */
    protected $PassiveSegmentRef = null;

    /**
     * @var typeRef $RailSegmentRef
     */
    protected $RailSegmentRef = null;

    /**
     * @var typeLocatorCode $ReservationLocatorRef
     */
    protected $ReservationLocatorRef = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param typeRef $AirSegmentRef
     * @param typeRef $PassiveSegmentRef
     * @param typeRef $RailSegmentRef
     * @param typeLocatorCode $ReservationLocatorRef
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key, $AirSegmentRef, $PassiveSegmentRef, $RailSegmentRef, $ReservationLocatorRef, $ElStat, $KeyOverride)
    {
      $this->Key = $Key;
      $this->AirSegmentRef = $AirSegmentRef;
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->ReservationLocatorRef = $ReservationLocatorRef;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return PolicyCompliance[]
     */
    public function getPolicyCompliance()
    {
      return $this->PolicyCompliance;
    }

    /**
     * @param PolicyCompliance[] $PolicyCompliance
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setPolicyCompliance(array $PolicyCompliance = null)
    {
      $this->PolicyCompliance = $PolicyCompliance;
      return $this;
    }

    /**
     * @return ContractCompliance[]
     */
    public function getContractCompliance()
    {
      return $this->ContractCompliance;
    }

    /**
     * @param ContractCompliance[] $ContractCompliance
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setContractCompliance(array $ContractCompliance = null)
    {
      $this->ContractCompliance = $ContractCompliance;
      return $this;
    }

    /**
     * @return PreferredSupplier[]
     */
    public function getPreferredSupplier()
    {
      return $this->PreferredSupplier;
    }

    /**
     * @param PreferredSupplier[] $PreferredSupplier
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setPreferredSupplier(array $PreferredSupplier = null)
    {
      $this->PreferredSupplier = $PreferredSupplier;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeRef $PassiveSegmentRef
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getRailSegmentRef()
    {
      return $this->RailSegmentRef;
    }

    /**
     * @param typeRef $RailSegmentRef
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setRailSegmentRef($RailSegmentRef)
    {
      $this->RailSegmentRef = $RailSegmentRef;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorRef()
    {
      return $this->ReservationLocatorRef;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorRef
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setReservationLocatorRef($ReservationLocatorRef)
    {
      $this->ReservationLocatorRef = $ReservationLocatorRef;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\TravelComplianceData
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
