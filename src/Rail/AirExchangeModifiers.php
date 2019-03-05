<?php

namespace FilippoToso\Travelport\Rail;

class AirExchangeModifiers
{

    /**
     * @var ContractCodes $ContractCodes
     */
    protected $ContractCodes = null;

    /**
     * @var string $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var string $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @var boolean $AllowPenaltyFares
     */
    protected $AllowPenaltyFares = null;

    /**
     * @var boolean $PrivateFaresOnly
     */
    protected $PrivateFaresOnly = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var typeLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var string $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param string $BookingDate
     * @param string $TicketingDate
     * @param string $AccountCode
     * @param typeTicketDesignator $TicketDesignator
     * @param boolean $AllowPenaltyFares
     * @param boolean $PrivateFaresOnly
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeLocatorCode $ProviderLocatorCode
     * @param string $ProviderCode
     */
    public function __construct($BookingDate = null, $TicketingDate = null, $AccountCode = null, $TicketDesignator = null, $AllowPenaltyFares = null, $PrivateFaresOnly = null, $UniversalRecordLocatorCode = null, $ProviderLocatorCode = null, $ProviderCode = null)
    {
      $this->BookingDate = $BookingDate;
      $this->TicketingDate = $TicketingDate;
      $this->AccountCode = $AccountCode;
      $this->TicketDesignator = $TicketDesignator;
      $this->AllowPenaltyFares = $AllowPenaltyFares;
      $this->PrivateFaresOnly = $PrivateFaresOnly;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return ContractCodes
     */
    public function getContractCodes()
    {
      return $this->ContractCodes;
    }

    /**
     * @param ContractCodes $ContractCodes
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setContractCodes($ContractCodes)
    {
      $this->ContractCodes = $ContractCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param string $BookingDate
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketingDate()
    {
      return $this->TicketingDate;
    }

    /**
     * @param string $TicketingDate
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setTicketingDate($TicketingDate)
    {
      $this->TicketingDate = $TicketingDate;
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
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPenaltyFares()
    {
      return $this->AllowPenaltyFares;
    }

    /**
     * @param boolean $AllowPenaltyFares
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setAllowPenaltyFares($AllowPenaltyFares)
    {
      $this->AllowPenaltyFares = $AllowPenaltyFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateFaresOnly()
    {
      return $this->PrivateFaresOnly;
    }

    /**
     * @param boolean $PrivateFaresOnly
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setPrivateFaresOnly($PrivateFaresOnly)
    {
      $this->PrivateFaresOnly = $PrivateFaresOnly;
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
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\Rail\AirExchangeModifiers
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
