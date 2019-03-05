<?php

namespace FilippoToso\Travelport\Air;

class AirRetrieveDocumentReq extends BaseReq
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeTCRNumber[] $TCRNumber
     */
    protected $TCRNumber = null;

    /**
     * @var boolean $ReturnRestrictions
     */
    protected $ReturnRestrictions = null;

    /**
     * @var boolean $ReturnPricing
     */
    protected $ReturnPricing = null;

    /**
     * @var boolean $RetrieveMCO
     */
    protected $RetrieveMCO = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

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
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param StringLength1to13 $TicketNumber
     * @param boolean $ReturnRestrictions
     * @param boolean $ReturnPricing
     * @param boolean $RetrieveMCO
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $TicketNumber = null, $ReturnRestrictions = null, $ReturnPricing = null, $RetrieveMCO = null, $UniversalRecordLocatorCode = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->TicketNumber = $TicketNumber;
      $this->ReturnRestrictions = $ReturnRestrictions;
      $this->ReturnPricing = $ReturnPricing;
      $this->RetrieveMCO = $RetrieveMCO;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return typeTCRNumber[]
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber[] $TCRNumber
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setTCRNumber(array $TCRNumber = null)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnRestrictions()
    {
      return $this->ReturnRestrictions;
    }

    /**
     * @param boolean $ReturnRestrictions
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setReturnRestrictions($ReturnRestrictions)
    {
      $this->ReturnRestrictions = $ReturnRestrictions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPricing()
    {
      return $this->ReturnPricing;
    }

    /**
     * @param boolean $ReturnPricing
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setReturnPricing($ReturnPricing)
    {
      $this->ReturnPricing = $ReturnPricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetrieveMCO()
    {
      return $this->RetrieveMCO;
    }

    /**
     * @param boolean $RetrieveMCO
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setRetrieveMCO($RetrieveMCO)
    {
      $this->RetrieveMCO = $RetrieveMCO;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
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
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
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
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
