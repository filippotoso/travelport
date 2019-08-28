<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PricingDetails
{

    /**
     * @var string[] $AdvisoryMessage
     */
    protected $AdvisoryMessage = null;

    /**
     * @var string[] $EndorsementText
     */
    protected $EndorsementText = null;

    /**
     * @var string $WaiverText
     */
    protected $WaiverText = null;

    /**
     * @var boolean $LowFarePricing
     */
    protected $LowFarePricing = null;

    /**
     * @var boolean $LowFareFound
     */
    protected $LowFareFound = null;

    /**
     * @var boolean $PenaltyApplies
     */
    protected $PenaltyApplies = null;

    /**
     * @var boolean $DiscountApplies
     */
    protected $DiscountApplies = null;

    /**
     * @var typeItineraryCode $ItineraryType
     */
    protected $ItineraryType = null;

    /**
     * @var typeCarrier $ValidatingVendorCode
     */
    protected $ValidatingVendorCode = null;

    /**
     * @var date $ForTicketingOnDate
     */
    protected $ForTicketingOnDate = null;

    /**
     * @var date $LastDateToTicket
     */
    protected $LastDateToTicket = null;

    /**
     * @var typeFormOfRefund $FormOfRefund
     */
    protected $FormOfRefund = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var float $BankersSellingRate
     */
    protected $BankersSellingRate = null;

    /**
     * @var typePricingType $PricingType
     */
    protected $PricingType = null;

    /**
     * @var float $ConversionRate
     */
    protected $ConversionRate = null;

    /**
     * @var float $RateOfExchange
     */
    protected $RateOfExchange = null;

    /**
     * @var typeCurrency $OriginalTicketCurrency
     */
    protected $OriginalTicketCurrency = null;

    /**
     * @param boolean $LowFarePricing
     * @param boolean $LowFareFound
     * @param boolean $PenaltyApplies
     * @param boolean $DiscountApplies
     * @param typeItineraryCode $ItineraryType
     * @param typeCarrier $ValidatingVendorCode
     * @param date $ForTicketingOnDate
     * @param date $LastDateToTicket
     * @param typeFormOfRefund $FormOfRefund
     * @param string $AccountCode
     * @param float $BankersSellingRate
     * @param typePricingType $PricingType
     * @param float $ConversionRate
     * @param float $RateOfExchange
     * @param typeCurrency $OriginalTicketCurrency
     */
    public function __construct($LowFarePricing = null, $LowFareFound = null, $PenaltyApplies = null, $DiscountApplies = null, $ItineraryType = null, $ValidatingVendorCode = null, $ForTicketingOnDate = null, $LastDateToTicket = null, $FormOfRefund = null, $AccountCode = null, $BankersSellingRate = null, $PricingType = null, $ConversionRate = null, $RateOfExchange = null, $OriginalTicketCurrency = null)
    {
      $this->LowFarePricing = $LowFarePricing;
      $this->LowFareFound = $LowFareFound;
      $this->PenaltyApplies = $PenaltyApplies;
      $this->DiscountApplies = $DiscountApplies;
      $this->ItineraryType = $ItineraryType;
      $this->ValidatingVendorCode = $ValidatingVendorCode;
      $this->ForTicketingOnDate = $ForTicketingOnDate;
      $this->LastDateToTicket = $LastDateToTicket;
      $this->FormOfRefund = $FormOfRefund;
      $this->AccountCode = $AccountCode;
      $this->BankersSellingRate = $BankersSellingRate;
      $this->PricingType = $PricingType;
      $this->ConversionRate = $ConversionRate;
      $this->RateOfExchange = $RateOfExchange;
      $this->OriginalTicketCurrency = $OriginalTicketCurrency;
    }

    /**
     * @return string[]
     */
    public function getAdvisoryMessage()
    {
      return $this->AdvisoryMessage;
    }

    /**
     * @param string[] $AdvisoryMessage
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setAdvisoryMessage(array $AdvisoryMessage = null)
    {
      $this->AdvisoryMessage = $AdvisoryMessage;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEndorsementText()
    {
      return $this->EndorsementText;
    }

    /**
     * @param string[] $EndorsementText
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setEndorsementText(array $EndorsementText = null)
    {
      $this->EndorsementText = $EndorsementText;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverText()
    {
      return $this->WaiverText;
    }

    /**
     * @param string $WaiverText
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setWaiverText($WaiverText)
    {
      $this->WaiverText = $WaiverText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowFarePricing()
    {
      return $this->LowFarePricing;
    }

    /**
     * @param boolean $LowFarePricing
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setLowFarePricing($LowFarePricing)
    {
      $this->LowFarePricing = $LowFarePricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowFareFound()
    {
      return $this->LowFareFound;
    }

    /**
     * @param boolean $LowFareFound
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setLowFareFound($LowFareFound)
    {
      $this->LowFareFound = $LowFareFound;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPenaltyApplies()
    {
      return $this->PenaltyApplies;
    }

    /**
     * @param boolean $PenaltyApplies
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setPenaltyApplies($PenaltyApplies)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscountApplies()
    {
      return $this->DiscountApplies;
    }

    /**
     * @param boolean $DiscountApplies
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setDiscountApplies($DiscountApplies)
    {
      $this->DiscountApplies = $DiscountApplies;
      return $this;
    }

    /**
     * @return typeItineraryCode
     */
    public function getItineraryType()
    {
      return $this->ItineraryType;
    }

    /**
     * @param typeItineraryCode $ItineraryType
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setItineraryType($ItineraryType)
    {
      $this->ItineraryType = $ItineraryType;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getValidatingVendorCode()
    {
      return $this->ValidatingVendorCode;
    }

    /**
     * @param typeCarrier $ValidatingVendorCode
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setValidatingVendorCode($ValidatingVendorCode)
    {
      $this->ValidatingVendorCode = $ValidatingVendorCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getForTicketingOnDate()
    {
      return $this->ForTicketingOnDate;
    }

    /**
     * @param date $ForTicketingOnDate
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setForTicketingOnDate($ForTicketingOnDate)
    {
      $this->ForTicketingOnDate = $ForTicketingOnDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getLastDateToTicket()
    {
      return $this->LastDateToTicket;
    }

    /**
     * @param date $LastDateToTicket
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setLastDateToTicket($LastDateToTicket)
    {
      $this->LastDateToTicket = $LastDateToTicket;
      return $this;
    }

    /**
     * @return typeFormOfRefund
     */
    public function getFormOfRefund()
    {
      return $this->FormOfRefund;
    }

    /**
     * @param typeFormOfRefund $FormOfRefund
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setFormOfRefund($FormOfRefund)
    {
      $this->FormOfRefund = $FormOfRefund;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getBankersSellingRate()
    {
      return $this->BankersSellingRate;
    }

    /**
     * @param float $BankersSellingRate
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setBankersSellingRate($BankersSellingRate)
    {
      $this->BankersSellingRate = $BankersSellingRate;
      return $this;
    }

    /**
     * @return typePricingType
     */
    public function getPricingType()
    {
      return $this->PricingType;
    }

    /**
     * @param typePricingType $PricingType
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setPricingType($PricingType)
    {
      $this->PricingType = $PricingType;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->ConversionRate;
    }

    /**
     * @param float $ConversionRate
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setConversionRate($ConversionRate)
    {
      $this->ConversionRate = $ConversionRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getRateOfExchange()
    {
      return $this->RateOfExchange;
    }

    /**
     * @param float $RateOfExchange
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setRateOfExchange($RateOfExchange)
    {
      $this->RateOfExchange = $RateOfExchange;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getOriginalTicketCurrency()
    {
      return $this->OriginalTicketCurrency;
    }

    /**
     * @param typeCurrency $OriginalTicketCurrency
     * @return \FilippoToso\Travelport\UniversalRecord\PricingDetails
     */
    public function setOriginalTicketCurrency($OriginalTicketCurrency)
    {
      $this->OriginalTicketCurrency = $OriginalTicketCurrency;
      return $this;
    }

}
