<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationDisplayDetailsReq extends BaseReq
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var boolean $ProviderReservationDetail
     */
    protected $ProviderReservationDetail = null;

    /**
     * @var boolean $CustomCheck
     */
    protected $CustomCheck = null;

    /**
     * @var boolean $ProviderProfile
     */
    protected $ProviderProfile = null;

    /**
     * @var boolean $DivideDetails
     */
    protected $DivideDetails = null;

    /**
     * @var boolean $EnhancedItinModifiers
     */
    protected $EnhancedItinModifiers = null;

    /**
     * @var boolean $IntegratedContent
     */
    protected $IntegratedContent = null;

    /**
     * @var boolean $Cruise
     */
    protected $Cruise = null;

    /**
     * @var boolean $RailSegment
     */
    protected $RailSegment = null;

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
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param boolean $ProviderReservationDetail
     * @param boolean $CustomCheck
     * @param boolean $ProviderProfile
     * @param boolean $DivideDetails
     * @param boolean $EnhancedItinModifiers
     * @param boolean $IntegratedContent
     * @param boolean $Cruise
     * @param boolean $RailSegment
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProviderCode = null, $ProviderLocatorCode = null, $ProviderReservationDetail = null, $CustomCheck = null, $ProviderProfile = null, $DivideDetails = null, $EnhancedItinModifiers = null, $IntegratedContent = null, $Cruise = null, $RailSegment = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      $this->CustomCheck = $CustomCheck;
      $this->ProviderProfile = $ProviderProfile;
      $this->DivideDetails = $DivideDetails;
      $this->EnhancedItinModifiers = $EnhancedItinModifiers;
      $this->IntegratedContent = $IntegratedContent;
      $this->Cruise = $Cruise;
      $this->RailSegment = $RailSegment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
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
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProviderReservationDetail()
    {
      return $this->ProviderReservationDetail;
    }

    /**
     * @param boolean $ProviderReservationDetail
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setProviderReservationDetail($ProviderReservationDetail)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomCheck()
    {
      return $this->CustomCheck;
    }

    /**
     * @param boolean $CustomCheck
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setCustomCheck($CustomCheck)
    {
      $this->CustomCheck = $CustomCheck;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProviderProfile()
    {
      return $this->ProviderProfile;
    }

    /**
     * @param boolean $ProviderProfile
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setProviderProfile($ProviderProfile)
    {
      $this->ProviderProfile = $ProviderProfile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDivideDetails()
    {
      return $this->DivideDetails;
    }

    /**
     * @param boolean $DivideDetails
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setDivideDetails($DivideDetails)
    {
      $this->DivideDetails = $DivideDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnhancedItinModifiers()
    {
      return $this->EnhancedItinModifiers;
    }

    /**
     * @param boolean $EnhancedItinModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setEnhancedItinModifiers($EnhancedItinModifiers)
    {
      $this->EnhancedItinModifiers = $EnhancedItinModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntegratedContent()
    {
      return $this->IntegratedContent;
    }

    /**
     * @param boolean $IntegratedContent
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setIntegratedContent($IntegratedContent)
    {
      $this->IntegratedContent = $IntegratedContent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCruise()
    {
      return $this->Cruise;
    }

    /**
     * @param boolean $Cruise
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setCruise($Cruise)
    {
      $this->Cruise = $Cruise;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRailSegment()
    {
      return $this->RailSegment;
    }

    /**
     * @param boolean $RailSegment
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsReq
     */
    public function setRailSegment($RailSegment)
    {
      $this->RailSegment = $RailSegment;
      return $this;
    }

}
