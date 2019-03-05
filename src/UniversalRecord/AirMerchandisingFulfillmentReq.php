<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirMerchandisingFulfillmentReq extends BaseReq
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var HostReservation $HostReservation
     */
    protected $HostReservation = null;

    /**
     * @var AgencySellInfo $AgencySellInfo
     */
    protected $AgencySellInfo = null;

    /**
     * @var AirSolution $AirSolution
     */
    protected $AirSolution = null;

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var SpecificSeatAssignment $SpecificSeatAssignment
     */
    protected $SpecificSeatAssignment = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var string $ConfirmationEmail
     */
    protected $ConfirmationEmail = null;

    /**
     * @var MerchandisingPricingModifiers $MerchandisingPricingModifiers
     */
    protected $MerchandisingPricingModifiers = null;

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
     * @param HostToken $HostToken
     * @param HostReservation $HostReservation
     * @param AgencySellInfo $AgencySellInfo
     * @param AirSolution $AirSolution
     * @param CreditCard $CreditCard
     * @param OptionalServices $OptionalServices
     * @param SpecificSeatAssignment $SpecificSeatAssignment
     * @param GeneralRemark $GeneralRemark
     * @param MerchandisingPricingModifiers $MerchandisingPricingModifiers
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HostToken = null, $HostReservation = null, $AgencySellInfo = null, $AirSolution = null, $CreditCard = null, $OptionalServices = null, $SpecificSeatAssignment = null, $GeneralRemark = null, $MerchandisingPricingModifiers = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HostToken = $HostToken;
      $this->HostReservation = $HostReservation;
      $this->AgencySellInfo = $AgencySellInfo;
      $this->AirSolution = $AirSolution;
      $this->CreditCard = $CreditCard;
      $this->OptionalServices = $OptionalServices;
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      $this->GeneralRemark = $GeneralRemark;
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return HostReservation
     */
    public function getHostReservation()
    {
      return $this->HostReservation;
    }

    /**
     * @param HostReservation $HostReservation
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setHostReservation($HostReservation)
    {
      $this->HostReservation = $HostReservation;
      return $this;
    }

    /**
     * @return AgencySellInfo
     */
    public function getAgencySellInfo()
    {
      return $this->AgencySellInfo;
    }

    /**
     * @param AgencySellInfo $AgencySellInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setAgencySellInfo($AgencySellInfo)
    {
      $this->AgencySellInfo = $AgencySellInfo;
      return $this;
    }

    /**
     * @return AirSolution
     */
    public function getAirSolution()
    {
      return $this->AirSolution;
    }

    /**
     * @param AirSolution $AirSolution
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setAirSolution($AirSolution)
    {
      $this->AirSolution = $AirSolution;
      return $this;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setSpecificSeatAssignment($SpecificSeatAssignment)
    {
      $this->SpecificSeatAssignment = $SpecificSeatAssignment;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationEmail()
    {
      return $this->ConfirmationEmail;
    }

    /**
     * @param string $ConfirmationEmail
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setConfirmationEmail($ConfirmationEmail)
    {
      $this->ConfirmationEmail = $ConfirmationEmail;
      return $this;
    }

    /**
     * @return MerchandisingPricingModifiers
     */
    public function getMerchandisingPricingModifiers()
    {
      return $this->MerchandisingPricingModifiers;
    }

    /**
     * @param MerchandisingPricingModifiers $MerchandisingPricingModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\AirMerchandisingFulfillmentReq
     */
    public function setMerchandisingPricingModifiers($MerchandisingPricingModifiers)
    {
      $this->MerchandisingPricingModifiers = $MerchandisingPricingModifiers;
      return $this;
    }

}
