<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SavedTripRetrieveReq extends BaseReq
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var typeTravelerLastName $TravelerLastName
     */
    protected $TravelerLastName = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param typeLocatorCode $LocatorCode
     * @param typeTravelerLastName $TravelerLastName
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LocatorCode = null, $TravelerLastName = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->LocatorCode = $LocatorCode;
      $this->TravelerLastName = $TravelerLastName;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripRetrieveReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return typeTravelerLastName
     */
    public function getTravelerLastName()
    {
      return $this->TravelerLastName;
    }

    /**
     * @param typeTravelerLastName $TravelerLastName
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripRetrieveReq
     */
    public function setTravelerLastName($TravelerLastName)
    {
      $this->TravelerLastName = $TravelerLastName;
      return $this;
    }

}
