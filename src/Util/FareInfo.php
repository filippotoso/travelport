<?php

namespace FilippoToso\Travelport\Util;

class FareInfo
{

    /**
     * @var FareTicketDesignator $FareTicketDesignator
     */
    protected $FareTicketDesignator = null;

    /**
     * @var FareSurcharge $FareSurcharge
     */
    protected $FareSurcharge = null;

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var ContractCode $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @var Endorsement $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var BaggageAllowance $BaggageAllowance
     */
    protected $BaggageAllowance = null;

    /**
     * @var FareRuleKey $FareRuleKey
     */
    protected $FareRuleKey = null;

    /**
     * @var FareRuleFailureInfo $FareRuleFailureInfo
     */
    protected $FareRuleFailureInfo = null;

    /**
     * @var FareRemarkRef $FareRemarkRef
     */
    protected $FareRemarkRef = null;

    /**
     * @var Brand $Brand
     */
    protected $Brand = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var string $FareAttributes
     */
    protected $FareAttributes = null;

    /**
     * @var typeFarePenalty $ChangePenalty
     */
    protected $ChangePenalty = null;

    /**
     * @var typeFarePenalty $CancelPenalty
     */
    protected $CancelPenalty = null;

    /**
     * @var FareRulesFilter $FareRulesFilter
     */
    protected $FareRulesFilter = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var date $TravelDate
     */
    protected $TravelDate = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePrivateFare $PrivateFare
     */
    protected $PrivateFare = null;

    /**
     * @var boolean $NegotiatedFare
     */
    protected $NegotiatedFare = null;

    /**
     * @var typeTourCode $TourCode
     */
    protected $TourCode = null;

    /**
     * @var string $WaiverCode
     */
    protected $WaiverCode = null;

    /**
     * @var date $NotValidBefore
     */
    protected $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    protected $NotValidAfter = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var typeFareFamily $FareFamily
     */
    protected $FareFamily = null;

    /**
     * @var boolean $PromotionalFare
     */
    protected $PromotionalFare = null;

    /**
     * @var typeCarCode $CarCode
     */
    protected $CarCode = null;

    /**
     * @var typeValueCode $ValueCode
     */
    protected $ValueCode = null;

    /**
     * @var boolean $BulkTicket
     */
    protected $BulkTicket = null;

    /**
     * @var boolean $InclusiveTour
     */
    protected $InclusiveTour = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeMoney $TaxAmount
     */
    protected $TaxAmount = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @param FareSurcharge $FareSurcharge
     * @param AccountCode $AccountCode
     * @param ContractCode $ContractCode
     * @param Endorsement $Endorsement
     * @param BaggageAllowance $BaggageAllowance
     * @param FareRuleKey $FareRuleKey
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @param FareRemarkRef $FareRemarkRef
     * @param Brand $Brand
     * @param Commission $Commission
     * @param FareRulesFilter $FareRulesFilter
     * @param typeRef $Key
     * @param string $FareBasis
     * @param typePTC $PassengerTypeCode
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $EffectiveDate
     * @param date $TravelDate
     * @param date $DepartureDate
     * @param typeMoney $Amount
     * @param typePrivateFare $PrivateFare
     * @param boolean $NegotiatedFare
     * @param typeTourCode $TourCode
     * @param string $WaiverCode
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     * @param typePCC $PseudoCityCode
     * @param typeFareFamily $FareFamily
     * @param boolean $PromotionalFare
     * @param typeCarCode $CarCode
     * @param typeValueCode $ValueCode
     * @param boolean $BulkTicket
     * @param boolean $InclusiveTour
     * @param string $Value
     * @param typeSupplierCode $SupplierCode
     * @param typeMoney $TaxAmount
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($FareTicketDesignator = null, $FareSurcharge = null, $AccountCode = null, $ContractCode = null, $Endorsement = null, $BaggageAllowance = null, $FareRuleKey = null, $FareRuleFailureInfo = null, $FareRemarkRef = null, $Brand = null, $Commission = null, $FareRulesFilter = null, $Key = null, $FareBasis = null, $PassengerTypeCode = null, $Origin = null, $Destination = null, $EffectiveDate = null, $TravelDate = null, $DepartureDate = null, $Amount = null, $PrivateFare = null, $NegotiatedFare = null, $TourCode = null, $WaiverCode = null, $NotValidBefore = null, $NotValidAfter = null, $PseudoCityCode = null, $FareFamily = null, $PromotionalFare = null, $CarCode = null, $ValueCode = null, $BulkTicket = null, $InclusiveTour = null, $Value = null, $SupplierCode = null, $TaxAmount = null, $ElStat = null, $KeyOverride = null)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      $this->FareSurcharge = $FareSurcharge;
      $this->AccountCode = $AccountCode;
      $this->ContractCode = $ContractCode;
      $this->Endorsement = $Endorsement;
      $this->BaggageAllowance = $BaggageAllowance;
      $this->FareRuleKey = $FareRuleKey;
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      $this->FareRemarkRef = $FareRemarkRef;
      $this->Brand = $Brand;
      $this->Commission = $Commission;
      $this->FareRulesFilter = $FareRulesFilter;
      $this->Key = $Key;
      $this->FareBasis = $FareBasis;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->EffectiveDate = $EffectiveDate;
      $this->TravelDate = $TravelDate;
      $this->DepartureDate = $DepartureDate;
      $this->Amount = $Amount;
      $this->PrivateFare = $PrivateFare;
      $this->NegotiatedFare = $NegotiatedFare;
      $this->TourCode = $TourCode;
      $this->WaiverCode = $WaiverCode;
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->FareFamily = $FareFamily;
      $this->PromotionalFare = $PromotionalFare;
      $this->CarCode = $CarCode;
      $this->ValueCode = $ValueCode;
      $this->BulkTicket = $BulkTicket;
      $this->InclusiveTour = $InclusiveTour;
      $this->Value = $Value;
      $this->SupplierCode = $SupplierCode;
      $this->TaxAmount = $TaxAmount;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return FareTicketDesignator
     */
    public function getFareTicketDesignator()
    {
      return $this->FareTicketDesignator;
    }

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareTicketDesignator($FareTicketDesignator)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      return $this;
    }

    /**
     * @return FareSurcharge
     */
    public function getFareSurcharge()
    {
      return $this->FareSurcharge;
    }

    /**
     * @param FareSurcharge $FareSurcharge
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareSurcharge($FareSurcharge)
    {
      $this->FareSurcharge = $FareSurcharge;
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
     * @return \FilippoToso\Travelport\Util\FareInfo
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
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

    /**
     * @return Endorsement
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param Endorsement $Endorsement
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return BaggageAllowance
     */
    public function getBaggageAllowance()
    {
      return $this->BaggageAllowance;
    }

    /**
     * @param BaggageAllowance $BaggageAllowance
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setBaggageAllowance($BaggageAllowance)
    {
      $this->BaggageAllowance = $BaggageAllowance;
      return $this;
    }

    /**
     * @return FareRuleKey
     */
    public function getFareRuleKey()
    {
      return $this->FareRuleKey;
    }

    /**
     * @param FareRuleKey $FareRuleKey
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareRuleKey($FareRuleKey)
    {
      $this->FareRuleKey = $FareRuleKey;
      return $this;
    }

    /**
     * @return FareRuleFailureInfo
     */
    public function getFareRuleFailureInfo()
    {
      return $this->FareRuleFailureInfo;
    }

    /**
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareRuleFailureInfo($FareRuleFailureInfo)
    {
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      return $this;
    }

    /**
     * @return FareRemarkRef
     */
    public function getFareRemarkRef()
    {
      return $this->FareRemarkRef;
    }

    /**
     * @param FareRemarkRef $FareRemarkRef
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareRemarkRef($FareRemarkRef)
    {
      $this->FareRemarkRef = $FareRemarkRef;
      return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param Brand $Brand
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareAttributes()
    {
      return $this->FareAttributes;
    }

    /**
     * @param string $FareAttributes
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareAttributes($FareAttributes)
    {
      $this->FareAttributes = $FareAttributes;
      return $this;
    }

    /**
     * @return typeFarePenalty
     */
    public function getChangePenalty()
    {
      return $this->ChangePenalty;
    }

    /**
     * @param typeFarePenalty $ChangePenalty
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setChangePenalty($ChangePenalty)
    {
      $this->ChangePenalty = $ChangePenalty;
      return $this;
    }

    /**
     * @return typeFarePenalty
     */
    public function getCancelPenalty()
    {
      return $this->CancelPenalty;
    }

    /**
     * @param typeFarePenalty $CancelPenalty
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setCancelPenalty($CancelPenalty)
    {
      $this->CancelPenalty = $CancelPenalty;
      return $this;
    }

    /**
     * @return FareRulesFilter
     */
    public function getFareRulesFilter()
    {
      return $this->FareRulesFilter;
    }

    /**
     * @param FareRulesFilter $FareRulesFilter
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareRulesFilter($FareRulesFilter)
    {
      $this->FareRulesFilter = $FareRulesFilter;
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
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC $PassengerTypeCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
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
     * @return \FilippoToso\Travelport\Util\FareInfo
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
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param date $TravelDate
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePrivateFare
     */
    public function getPrivateFare()
    {
      return $this->PrivateFare;
    }

    /**
     * @param typePrivateFare $PrivateFare
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setPrivateFare($PrivateFare)
    {
      $this->PrivateFare = $PrivateFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNegotiatedFare()
    {
      return $this->NegotiatedFare;
    }

    /**
     * @param boolean $NegotiatedFare
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setNegotiatedFare($NegotiatedFare)
    {
      $this->NegotiatedFare = $NegotiatedFare;
      return $this;
    }

    /**
     * @return typeTourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param typeTourCode $TourCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param string $WaiverCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return typeFareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param typeFareFamily $FareFamily
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPromotionalFare()
    {
      return $this->PromotionalFare;
    }

    /**
     * @param boolean $PromotionalFare
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setPromotionalFare($PromotionalFare)
    {
      $this->PromotionalFare = $PromotionalFare;
      return $this;
    }

    /**
     * @return typeCarCode
     */
    public function getCarCode()
    {
      return $this->CarCode;
    }

    /**
     * @param typeCarCode $CarCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setCarCode($CarCode)
    {
      $this->CarCode = $CarCode;
      return $this;
    }

    /**
     * @return typeValueCode
     */
    public function getValueCode()
    {
      return $this->ValueCode;
    }

    /**
     * @param typeValueCode $ValueCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setValueCode($ValueCode)
    {
      $this->ValueCode = $ValueCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param boolean $BulkTicket
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusiveTour()
    {
      return $this->InclusiveTour;
    }

    /**
     * @param boolean $InclusiveTour
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setInclusiveTour($InclusiveTour)
    {
      $this->InclusiveTour = $InclusiveTour;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param typeMoney $TaxAmount
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
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
     * @return \FilippoToso\Travelport\Util\FareInfo
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
     * @return \FilippoToso\Travelport\Util\FareInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
