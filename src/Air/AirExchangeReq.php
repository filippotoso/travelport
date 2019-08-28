<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeReq extends BaseReq
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
     * @var SpecificSeatAssignment $SpecificSeatAssignment
     */
    protected $SpecificSeatAssignment = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var AirExchangeModifiers $AirExchangeModifiers
     */
    protected $AirExchangeModifiers = null;

    /**
     * @var AirExchangeBundleTotal $AirExchangeBundleTotal
     */
    protected $AirExchangeBundleTotal = null;

    /**
     * @var AirExchangeBundle $AirExchangeBundle
     */
    protected $AirExchangeBundle = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @var SSRInfo $SSRInfo
     */
    protected $SSRInfo = null;

    /**
     * @var AddSvc $AddSvc
     */
    protected $AddSvc = null;

    /**
     * @var boolean $ReturnReservation
     */
    protected $ReturnReservation = null;

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
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @param AirPricingSolution $AirPricingSolution
     * @param AirExchangeModifiers $AirExchangeModifiers
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @param AirExchangeBundle $AirExchangeBundle
     * @param HostToken $HostToken
     * @param OptionalServices $OptionalServices
     * @param FormOfPayment $FormOfPayment
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param SSRInfo $SSRInfo
     * @param AddSvc $AddSvc
     * @param boolean $ReturnReservation
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationLocatorCode = null, $TicketNumber = null, $SpecificSeatAssignment = null, $AirPricingSolution = null, $AirExchangeModifiers = null, $AirExchangeBundleTotal = null, $AirExchangeBundle = null, $HostToken = null, $OptionalServices = null, $FormOfPayment = null, $FormOfPaymentRef = null, $SSRInfo = null, $AddSvc = null, $ReturnReservation = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->TicketNumber = $TicketNumber;
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      $this->AirExchangeBundle = $AirExchangeBundle;
      $this->HostToken = $HostToken;
      $this->OptionalServices = $OptionalServices;
      $this->FormOfPayment = $FormOfPayment;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->SSRInfo = $SSRInfo;
      $this->AddSvc = $AddSvc;
      $this->ReturnReservation = $ReturnReservation;
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
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
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
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return SpecificSeatAssignment
     */
    public function getSpecificSeatAssignment()
    {
      return $this->SpecificSeatAssignment;
    }

    /**
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setSpecificSeatAssignment($SpecificSeatAssignment)
    {
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      return $this;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return AirExchangeModifiers
     */
    public function getAirExchangeModifiers()
    {
      return $this->AirExchangeModifiers;
    }

    /**
     * @param AirExchangeModifiers $AirExchangeModifiers
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setAirExchangeModifiers($AirExchangeModifiers)
    {
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      return $this;
    }

    /**
     * @return AirExchangeBundleTotal
     */
    public function getAirExchangeBundleTotal()
    {
      return $this->AirExchangeBundleTotal;
    }

    /**
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setAirExchangeBundleTotal($AirExchangeBundleTotal)
    {
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      return $this;
    }

    /**
     * @return AirExchangeBundle
     */
    public function getAirExchangeBundle()
    {
      return $this->AirExchangeBundle;
    }

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setAirExchangeBundle($AirExchangeBundle)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return FormOfPaymentRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

    /**
     * @return SSRInfo
     */
    public function getSSRInfo()
    {
      return $this->SSRInfo;
    }

    /**
     * @param SSRInfo $SSRInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setSSRInfo($SSRInfo)
    {
      $this->SSRInfo = $SSRInfo;
      return $this;
    }

    /**
     * @return AddSvc
     */
    public function getAddSvc()
    {
      return $this->AddSvc;
    }

    /**
     * @param AddSvc $AddSvc
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setAddSvc($AddSvc)
    {
      $this->AddSvc = $AddSvc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnReservation()
    {
      return $this->ReturnReservation;
    }

    /**
     * @param boolean $ReturnReservation
     * @return \FilippoToso\Travelport\Air\AirExchangeReq
     */
    public function setReturnReservation($ReturnReservation)
    {
      $this->ReturnReservation = $ReturnReservation;
      return $this;
    }

}
