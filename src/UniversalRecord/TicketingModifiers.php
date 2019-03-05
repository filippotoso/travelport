<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TicketingModifiers extends typeBulkTicketModifierType
{

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeTicketModifierAmountType $NetRemit
     */
    protected $NetRemit = null;

    /**
     * @var typeTicketModifierAmountType $NetFare
     */
    protected $NetFare = null;

    /**
     * @var typeTicketModifierAmountType $ActualSellingFare
     */
    protected $ActualSellingFare = null;

    /**
     * @var typeTicketModifierAccountingType $InvoiceFare
     */
    protected $InvoiceFare = null;

    /**
     * @var typeTicketModifierAccountingType $CorporateDiscount
     */
    protected $CorporateDiscount = null;

    /**
     * @var typeTicketModifierAccountingType $AccountingInfo
     */
    protected $AccountingInfo = null;

    /**
     * @var BulkTicket $BulkTicket
     */
    protected $BulkTicket = null;

    /**
     * @var typeBulkTicketModifierType $GroupTour
     */
    protected $GroupTour = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var TourCode $TourCode
     */
    protected $TourCode = null;

    /**
     * @var TicketEndorsement $TicketEndorsement
     */
    protected $TicketEndorsement = null;

    /**
     * @var typeTicketModifierValueType $ValueModifier
     */
    protected $ValueModifier = null;

    /**
     * @var DocumentSelect $DocumentSelect
     */
    protected $DocumentSelect = null;

    /**
     * @var DocumentOptions $DocumentOptions
     */
    protected $DocumentOptions = null;

    /**
     * @var SegmentSelect $SegmentSelect
     */
    protected $SegmentSelect = null;

    /**
     * @var SegmentModifiers $SegmentModifiers
     */
    protected $SegmentModifiers = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var DestinationPurposeCode $DestinationPurposeCode
     */
    protected $DestinationPurposeCode = null;

    /**
     * @var LanguageOption $LanguageOption
     */
    protected $LanguageOption = null;

    /**
     * @var LandCharges $LandCharges
     */
    protected $LandCharges = null;

    /**
     * @var PrintBlankFormItinerary $PrintBlankFormItinerary
     */
    protected $PrintBlankFormItinerary = null;

    /**
     * @var ExcludeTicketing $ExcludeTicketing
     */
    protected $ExcludeTicketing = null;

    /**
     * @var ExemptOBFee $ExemptOBFee
     */
    protected $ExemptOBFee = null;

    /**
     * @var boolean $IsPrimaryDI
     */
    protected $IsPrimaryDI = null;

    /**
     * @var int $DocumentInstructionNumber
     */
    protected $DocumentInstructionNumber = null;

    /**
     * @var StringLength1to30 $Reference
     */
    protected $Reference = null;

    /**
     * @var anonymous863 $Status
     */
    protected $Status = null;

    /**
     * @var anonymous864 $FreeText
     */
    protected $FreeText = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var boolean $ExemptVAT
     */
    protected $ExemptVAT = null;

    /**
     * @var boolean $NetRemitApplied
     */
    protected $NetRemitApplied = null;

    /**
     * @var boolean $FreeTicket
     */
    protected $FreeTicket = null;

    /**
     * @var anonymous865 $CurrencyOverrideCode
     */
    protected $CurrencyOverrideCode = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param boolean $SuppressOnFareCalc
     * @param Commission $Commission
     * @param TourCode $TourCode
     * @param TicketEndorsement $TicketEndorsement
     * @param DocumentSelect $DocumentSelect
     * @param DocumentOptions $DocumentOptions
     * @param SegmentSelect $SegmentSelect
     * @param SegmentModifiers $SegmentModifiers
     * @param SupplierLocator $SupplierLocator
     * @param DestinationPurposeCode $DestinationPurposeCode
     * @param LanguageOption $LanguageOption
     * @param LandCharges $LandCharges
     * @param PrintBlankFormItinerary $PrintBlankFormItinerary
     * @param ExcludeTicketing $ExcludeTicketing
     * @param ExemptOBFee $ExemptOBFee
     * @param boolean $IsPrimaryDI
     * @param int $DocumentInstructionNumber
     * @param StringLength1to30 $Reference
     * @param anonymous863 $Status
     * @param anonymous864 $FreeText
     * @param typeCarrier $PlatingCarrier
     * @param boolean $ExemptVAT
     * @param boolean $NetRemitApplied
     * @param boolean $FreeTicket
     * @param anonymous865 $CurrencyOverrideCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($SuppressOnFareCalc = null, $Commission = null, $TourCode = null, $TicketEndorsement = null, $DocumentSelect = null, $DocumentOptions = null, $SegmentSelect = null, $SegmentModifiers = null, $SupplierLocator = null, $DestinationPurposeCode = null, $LanguageOption = null, $LandCharges = null, $PrintBlankFormItinerary = null, $ExcludeTicketing = null, $ExemptOBFee = null, $IsPrimaryDI = null, $DocumentInstructionNumber = null, $Reference = null, $Status = null, $FreeText = null, $PlatingCarrier = null, $ExemptVAT = null, $NetRemitApplied = null, $FreeTicket = null, $CurrencyOverrideCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($SuppressOnFareCalc);
      $this->Commission = $Commission;
      $this->TourCode = $TourCode;
      $this->TicketEndorsement = $TicketEndorsement;
      $this->DocumentSelect = $DocumentSelect;
      $this->DocumentOptions = $DocumentOptions;
      $this->SegmentSelect = $SegmentSelect;
      $this->SegmentModifiers = $SegmentModifiers;
      $this->SupplierLocator = $SupplierLocator;
      $this->DestinationPurposeCode = $DestinationPurposeCode;
      $this->LanguageOption = $LanguageOption;
      $this->LandCharges = $LandCharges;
      $this->PrintBlankFormItinerary = $PrintBlankFormItinerary;
      $this->ExcludeTicketing = $ExcludeTicketing;
      $this->ExemptOBFee = $ExemptOBFee;
      $this->IsPrimaryDI = $IsPrimaryDI;
      $this->DocumentInstructionNumber = $DocumentInstructionNumber;
      $this->Reference = $Reference;
      $this->Status = $Status;
      $this->FreeText = $FreeText;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->ExemptVAT = $ExemptVAT;
      $this->NetRemitApplied = $NetRemitApplied;
      $this->FreeTicket = $FreeTicket;
      $this->CurrencyOverrideCode = $CurrencyOverrideCode;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getNetRemit()
    {
      return $this->NetRemit;
    }

    /**
     * @param typeTicketModifierAmountType $NetRemit
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setNetRemit($NetRemit)
    {
      $this->NetRemit = $NetRemit;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getNetFare()
    {
      return $this->NetFare;
    }

    /**
     * @param typeTicketModifierAmountType $NetFare
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setNetFare($NetFare)
    {
      $this->NetFare = $NetFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getActualSellingFare()
    {
      return $this->ActualSellingFare;
    }

    /**
     * @param typeTicketModifierAmountType $ActualSellingFare
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setActualSellingFare($ActualSellingFare)
    {
      $this->ActualSellingFare = $ActualSellingFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getInvoiceFare()
    {
      return $this->InvoiceFare;
    }

    /**
     * @param typeTicketModifierAccountingType $InvoiceFare
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setInvoiceFare($InvoiceFare)
    {
      $this->InvoiceFare = $InvoiceFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getCorporateDiscount()
    {
      return $this->CorporateDiscount;
    }

    /**
     * @param typeTicketModifierAccountingType $CorporateDiscount
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setCorporateDiscount($CorporateDiscount)
    {
      $this->CorporateDiscount = $CorporateDiscount;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getAccountingInfo()
    {
      return $this->AccountingInfo;
    }

    /**
     * @param typeTicketModifierAccountingType $AccountingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setAccountingInfo($AccountingInfo)
    {
      $this->AccountingInfo = $AccountingInfo;
      return $this;
    }

    /**
     * @return BulkTicket
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param BulkTicket $BulkTicket
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return typeBulkTicketModifierType
     */
    public function getGroupTour()
    {
      return $this->GroupTour;
    }

    /**
     * @param typeBulkTicketModifierType $GroupTour
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setGroupTour($GroupTour)
    {
      $this->GroupTour = $GroupTour;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return TourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param TourCode $TourCode
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return TicketEndorsement
     */
    public function getTicketEndorsement()
    {
      return $this->TicketEndorsement;
    }

    /**
     * @param TicketEndorsement $TicketEndorsement
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setTicketEndorsement($TicketEndorsement)
    {
      $this->TicketEndorsement = $TicketEndorsement;
      return $this;
    }

    /**
     * @return typeTicketModifierValueType
     */
    public function getValueModifier()
    {
      return $this->ValueModifier;
    }

    /**
     * @param typeTicketModifierValueType $ValueModifier
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setValueModifier($ValueModifier)
    {
      $this->ValueModifier = $ValueModifier;
      return $this;
    }

    /**
     * @return DocumentSelect
     */
    public function getDocumentSelect()
    {
      return $this->DocumentSelect;
    }

    /**
     * @param DocumentSelect $DocumentSelect
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setDocumentSelect($DocumentSelect)
    {
      $this->DocumentSelect = $DocumentSelect;
      return $this;
    }

    /**
     * @return DocumentOptions
     */
    public function getDocumentOptions()
    {
      return $this->DocumentOptions;
    }

    /**
     * @param DocumentOptions $DocumentOptions
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setDocumentOptions($DocumentOptions)
    {
      $this->DocumentOptions = $DocumentOptions;
      return $this;
    }

    /**
     * @return SegmentSelect
     */
    public function getSegmentSelect()
    {
      return $this->SegmentSelect;
    }

    /**
     * @param SegmentSelect $SegmentSelect
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setSegmentSelect($SegmentSelect)
    {
      $this->SegmentSelect = $SegmentSelect;
      return $this;
    }

    /**
     * @return SegmentModifiers
     */
    public function getSegmentModifiers()
    {
      return $this->SegmentModifiers;
    }

    /**
     * @param SegmentModifiers $SegmentModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setSegmentModifiers($SegmentModifiers)
    {
      $this->SegmentModifiers = $SegmentModifiers;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return DestinationPurposeCode
     */
    public function getDestinationPurposeCode()
    {
      return $this->DestinationPurposeCode;
    }

    /**
     * @param DestinationPurposeCode $DestinationPurposeCode
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setDestinationPurposeCode($DestinationPurposeCode)
    {
      $this->DestinationPurposeCode = $DestinationPurposeCode;
      return $this;
    }

    /**
     * @return LanguageOption
     */
    public function getLanguageOption()
    {
      return $this->LanguageOption;
    }

    /**
     * @param LanguageOption $LanguageOption
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setLanguageOption($LanguageOption)
    {
      $this->LanguageOption = $LanguageOption;
      return $this;
    }

    /**
     * @return LandCharges
     */
    public function getLandCharges()
    {
      return $this->LandCharges;
    }

    /**
     * @param LandCharges $LandCharges
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setLandCharges($LandCharges)
    {
      $this->LandCharges = $LandCharges;
      return $this;
    }

    /**
     * @return PrintBlankFormItinerary
     */
    public function getPrintBlankFormItinerary()
    {
      return $this->PrintBlankFormItinerary;
    }

    /**
     * @param PrintBlankFormItinerary $PrintBlankFormItinerary
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setPrintBlankFormItinerary($PrintBlankFormItinerary)
    {
      $this->PrintBlankFormItinerary = $PrintBlankFormItinerary;
      return $this;
    }

    /**
     * @return ExcludeTicketing
     */
    public function getExcludeTicketing()
    {
      return $this->ExcludeTicketing;
    }

    /**
     * @param ExcludeTicketing $ExcludeTicketing
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setExcludeTicketing($ExcludeTicketing)
    {
      $this->ExcludeTicketing = $ExcludeTicketing;
      return $this;
    }

    /**
     * @return ExemptOBFee
     */
    public function getExemptOBFee()
    {
      return $this->ExemptOBFee;
    }

    /**
     * @param ExemptOBFee $ExemptOBFee
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setExemptOBFee($ExemptOBFee)
    {
      $this->ExemptOBFee = $ExemptOBFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryDI()
    {
      return $this->IsPrimaryDI;
    }

    /**
     * @param boolean $IsPrimaryDI
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setIsPrimaryDI($IsPrimaryDI)
    {
      $this->IsPrimaryDI = $IsPrimaryDI;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocumentInstructionNumber()
    {
      return $this->DocumentInstructionNumber;
    }

    /**
     * @param int $DocumentInstructionNumber
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setDocumentInstructionNumber($DocumentInstructionNumber)
    {
      $this->DocumentInstructionNumber = $DocumentInstructionNumber;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param StringLength1to30 $Reference
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return anonymous863
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous863 $Status
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return anonymous864
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param anonymous864 $FreeText
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExemptVAT()
    {
      return $this->ExemptVAT;
    }

    /**
     * @param boolean $ExemptVAT
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setExemptVAT($ExemptVAT)
    {
      $this->ExemptVAT = $ExemptVAT;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetRemitApplied()
    {
      return $this->NetRemitApplied;
    }

    /**
     * @param boolean $NetRemitApplied
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setNetRemitApplied($NetRemitApplied)
    {
      $this->NetRemitApplied = $NetRemitApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFreeTicket()
    {
      return $this->FreeTicket;
    }

    /**
     * @param boolean $FreeTicket
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setFreeTicket($FreeTicket)
    {
      $this->FreeTicket = $FreeTicket;
      return $this;
    }

    /**
     * @return anonymous865
     */
    public function getCurrencyOverrideCode()
    {
      return $this->CurrencyOverrideCode;
    }

    /**
     * @param anonymous865 $CurrencyOverrideCode
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setCurrencyOverrideCode($CurrencyOverrideCode)
    {
      $this->CurrencyOverrideCode = $CurrencyOverrideCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
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
     * @return \FilippoToso\Travelport\UniversalRecord\TicketingModifiers
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
