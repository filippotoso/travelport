<?php

namespace FilippoToso\Travelport\Air;

class AirFareDisplayReq extends BaseReq
{

    /**
     * @var FareType $FareType
     */
    protected $FareType = null;

    /**
     * @var typePassengerType[] $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var IncludeAddlBookingCodeInfo $IncludeAddlBookingCodeInfo
     */
    protected $IncludeAddlBookingCodeInfo = null;

    /**
     * @var FareBasis $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var Carrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var ContractCode $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var AirFareDisplayModifiers $AirFareDisplayModifiers
     */
    protected $AirFareDisplayModifiers = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var AirFareDisplayRuleKey $AirFareDisplayRuleKey
     */
    protected $AirFareDisplayRuleKey = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeMileOrRouteBasedFare $IncludeMileRouteInformation
     */
    protected $IncludeMileRouteInformation = null;

    /**
     * @var boolean $UnSaleableFaresOnly
     */
    protected $UnSaleableFaresOnly = null;

    /**
     * @var anonymous1170 $ChannelId
     */
    protected $ChannelId = null;

    /**
     * @var anonymous1171 $NSCC
     */
    protected $NSCC = null;

    /**
     * @var boolean $ReturnMM
     */
    protected $ReturnMM = null;

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
     * @param FareType $FareType
     * @param BookingCode $BookingCode
     * @param IncludeAddlBookingCodeInfo $IncludeAddlBookingCodeInfo
     * @param FareBasis $FareBasis
     * @param Carrier $Carrier
     * @param AccountCode $AccountCode
     * @param ContractCode $ContractCode
     * @param AirFareDisplayModifiers $AirFareDisplayModifiers
     * @param PointOfSale $PointOfSale
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeProviderCode $ProviderCode
     * @param typeMileOrRouteBasedFare $IncludeMileRouteInformation
     * @param boolean $UnSaleableFaresOnly
     * @param anonymous1170 $ChannelId
     * @param anonymous1171 $NSCC
     * @param boolean $ReturnMM
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FareType = null, $BookingCode = null, $IncludeAddlBookingCodeInfo = null, $FareBasis = null, $Carrier = null, $AccountCode = null, $ContractCode = null, $AirFareDisplayModifiers = null, $PointOfSale = null, $AirFareDisplayRuleKey = null, $Origin = null, $Destination = null, $ProviderCode = null, $IncludeMileRouteInformation = null, $UnSaleableFaresOnly = null, $ChannelId = null, $NSCC = null, $ReturnMM = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FareType = $FareType;
      $this->BookingCode = $BookingCode;
      $this->IncludeAddlBookingCodeInfo = $IncludeAddlBookingCodeInfo;
      $this->FareBasis = $FareBasis;
      $this->Carrier = $Carrier;
      $this->AccountCode = $AccountCode;
      $this->ContractCode = $ContractCode;
      $this->AirFareDisplayModifiers = $AirFareDisplayModifiers;
      $this->PointOfSale = $PointOfSale;
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->ProviderCode = $ProviderCode;
      $this->IncludeMileRouteInformation = $IncludeMileRouteInformation;
      $this->UnSaleableFaresOnly = $UnSaleableFaresOnly;
      $this->ChannelId = $ChannelId;
      $this->NSCC = $NSCC;
      $this->ReturnMM = $ReturnMM;
    }

    /**
     * @return FareType
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param FareType $FareType
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return typePassengerType[]
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param typePassengerType[] $PassengerType
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setPassengerType(array $PassengerType = null)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param BookingCode $BookingCode
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return IncludeAddlBookingCodeInfo
     */
    public function getIncludeAddlBookingCodeInfo()
    {
      return $this->IncludeAddlBookingCodeInfo;
    }

    /**
     * @param IncludeAddlBookingCodeInfo $IncludeAddlBookingCodeInfo
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setIncludeAddlBookingCodeInfo($IncludeAddlBookingCodeInfo)
    {
      $this->IncludeAddlBookingCodeInfo = $IncludeAddlBookingCodeInfo;
      return $this;
    }

    /**
     * @return FareBasis
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param FareBasis $FareBasis
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier $Carrier
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return ContractCode
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param ContractCode $ContractCode
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

    /**
     * @return AirFareDisplayModifiers
     */
    public function getAirFareDisplayModifiers()
    {
      return $this->AirFareDisplayModifiers;
    }

    /**
     * @param AirFareDisplayModifiers $AirFareDisplayModifiers
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setAirFareDisplayModifiers($AirFareDisplayModifiers)
    {
      $this->AirFareDisplayModifiers = $AirFareDisplayModifiers;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return AirFareDisplayRuleKey
     */
    public function getAirFareDisplayRuleKey()
    {
      return $this->AirFareDisplayRuleKey;
    }

    /**
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setAirFareDisplayRuleKey($AirFareDisplayRuleKey)
    {
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeMileOrRouteBasedFare
     */
    public function getIncludeMileRouteInformation()
    {
      return $this->IncludeMileRouteInformation;
    }

    /**
     * @param typeMileOrRouteBasedFare $IncludeMileRouteInformation
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setIncludeMileRouteInformation($IncludeMileRouteInformation)
    {
      $this->IncludeMileRouteInformation = $IncludeMileRouteInformation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnSaleableFaresOnly()
    {
      return $this->UnSaleableFaresOnly;
    }

    /**
     * @param boolean $UnSaleableFaresOnly
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setUnSaleableFaresOnly($UnSaleableFaresOnly)
    {
      $this->UnSaleableFaresOnly = $UnSaleableFaresOnly;
      return $this;
    }

    /**
     * @return anonymous1170
     */
    public function getChannelId()
    {
      return $this->ChannelId;
    }

    /**
     * @param anonymous1170 $ChannelId
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setChannelId($ChannelId)
    {
      $this->ChannelId = $ChannelId;
      return $this;
    }

    /**
     * @return anonymous1171
     */
    public function getNSCC()
    {
      return $this->NSCC;
    }

    /**
     * @param anonymous1171 $NSCC
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setNSCC($NSCC)
    {
      $this->NSCC = $NSCC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnMM()
    {
      return $this->ReturnMM;
    }

    /**
     * @param boolean $ReturnMM
     * @return \FilippoToso\Travelport\Air\AirFareDisplayReq
     */
    public function setReturnMM($ReturnMM)
    {
      $this->ReturnMM = $ReturnMM;
      return $this;
    }

}
