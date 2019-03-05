<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordRetrieveReq extends BaseReq
{

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var ProviderReservationInfo $ProviderReservationInfo
     */
    protected $ProviderReservationInfo = null;

    /**
     * @var boolean $ViewOnlyInd
     */
    protected $ViewOnlyInd = null;

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
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @param boolean $ViewOnlyInd
     * @param typeTravelerLastName $TravelerLastName
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $UniversalRecordLocatorCode = null, $ProviderReservationInfo = null, $ViewOnlyInd = null, $TravelerLastName = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      $this->ViewOnlyInd = $ViewOnlyInd;
      $this->TravelerLastName = $TravelerLastName;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return ProviderReservationInfo
     */
    public function getProviderReservationInfo()
    {
      return $this->ProviderReservationInfo;
    }

    /**
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveReq
     */
    public function setProviderReservationInfo($ProviderReservationInfo)
    {
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getViewOnlyInd()
    {
      return $this->ViewOnlyInd;
    }

    /**
     * @param boolean $ViewOnlyInd
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveReq
     */
    public function setViewOnlyInd($ViewOnlyInd)
    {
      $this->ViewOnlyInd = $ViewOnlyInd;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveReq
     */
    public function setTravelerLastName($TravelerLastName)
    {
      $this->TravelerLastName = $TravelerLastName;
      return $this;
    }

}
