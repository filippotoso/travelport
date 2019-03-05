<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PassiveCancelReq extends BaseReq
{

    /**
     * @var PassiveSegmentRef $PassiveSegmentRef
     */
    protected $PassiveSegmentRef = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var string $PassiveReservationLocatorCode
     */
    protected $PassiveReservationLocatorCode = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

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
     * @param PassiveSegmentRef $PassiveSegmentRef
     * @param FileFinishingInfo $FileFinishingInfo
     * @param string $PassiveReservationLocatorCode
     * @param typeURVersion $Version
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $PassiveSegmentRef = null, $FileFinishingInfo = null, $PassiveReservationLocatorCode = null, $Version = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->PassiveReservationLocatorCode = $PassiveReservationLocatorCode;
      $this->Version = $Version;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return PassiveSegmentRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param PassiveSegmentRef $PassiveSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassiveReservationLocatorCode()
    {
      return $this->PassiveReservationLocatorCode;
    }

    /**
     * @param string $PassiveReservationLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setPassiveReservationLocatorCode($PassiveReservationLocatorCode)
    {
      $this->PassiveReservationLocatorCode = $PassiveReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveCancelReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
