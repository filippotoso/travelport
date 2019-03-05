<?php

namespace FilippoToso\Travelport\Air;

class AirVoidDocumentReq extends BaseReq
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var VoidDocumentInfo $VoidDocumentInfo
     */
    protected $VoidDocumentInfo = null;

    /**
     * @var boolean $ShowETR
     */
    protected $ShowETR = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var boolean $ValidateSpanishResidency
     */
    protected $ValidateSpanishResidency = null;

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
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param VoidDocumentInfo $VoidDocumentInfo
     * @param boolean $ShowETR
     * @param typeProviderCode $ProviderCode
     * @param string $ProviderLocatorCode
     * @param boolean $ValidateSpanishResidency
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $VoidDocumentInfo = null, $ShowETR = null, $ProviderCode = null, $ProviderLocatorCode = null, $ValidateSpanishResidency = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->VoidDocumentInfo = $VoidDocumentInfo;
      $this->ShowETR = $ShowETR;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ValidateSpanishResidency = $ValidateSpanishResidency;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return VoidDocumentInfo
     */
    public function getVoidDocumentInfo()
    {
      return $this->VoidDocumentInfo;
    }

    /**
     * @param VoidDocumentInfo $VoidDocumentInfo
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setVoidDocumentInfo($VoidDocumentInfo)
    {
      $this->VoidDocumentInfo = $VoidDocumentInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowETR()
    {
      return $this->ShowETR;
    }

    /**
     * @param boolean $ShowETR
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setShowETR($ShowETR)
    {
      $this->ShowETR = $ShowETR;
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
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param string $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidateSpanishResidency()
    {
      return $this->ValidateSpanishResidency;
    }

    /**
     * @param boolean $ValidateSpanishResidency
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentReq
     */
    public function setValidateSpanishResidency($ValidateSpanishResidency)
    {
      $this->ValidateSpanishResidency = $ValidateSpanishResidency;
      return $this;
    }

}
