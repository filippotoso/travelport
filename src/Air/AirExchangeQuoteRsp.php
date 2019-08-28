<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeQuoteRsp extends BaseRsp
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

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
     * @var FareRule $FareRule
     */
    protected $FareRule = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param StringLength1to13 $TicketNumber
     * @param AirPricingSolution $AirPricingSolution
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @param AirExchangeBundle $AirExchangeBundle
     * @param HostToken $HostToken
     * @param OptionalServices $OptionalServices
     * @param FareRule $FareRule
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $TicketNumber = null, $AirPricingSolution = null, $AirExchangeBundleTotal = null, $AirExchangeBundle = null, $HostToken = null, $OptionalServices = null, $FareRule = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->TicketNumber = $TicketNumber;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      $this->AirExchangeBundle = $AirExchangeBundle;
      $this->HostToken = $HostToken;
      $this->OptionalServices = $OptionalServices;
      $this->FareRule = $FareRule;
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
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
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return FareRule
     */
    public function getFareRule()
    {
      return $this->FareRule;
    }

    /**
     * @param FareRule $FareRule
     * @return \FilippoToso\Travelport\Air\AirExchangeQuoteRsp
     */
    public function setFareRule($FareRule)
    {
      $this->FareRule = $FareRule;
      return $this;
    }

}
