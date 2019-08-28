<?php

namespace FilippoToso\Travelport\Util;

class CreditCardAuthReq extends BaseReq
{

    /**
     * @var LocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var CreditCardPaymentAuth $CreditCardPaymentAuth
     */
    protected $CreditCardPaymentAuth = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    protected $PlatingCarrier = null;

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
     * @param LocatorCode $LocatorCode
     * @param CreditCardPaymentAuth $CreditCardPaymentAuth
     * @param typeCarrier $PlatingCarrier
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $LocatorCode = null, $CreditCardPaymentAuth = null, $PlatingCarrier = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->LocatorCode = $LocatorCode;
      $this->CreditCardPaymentAuth = $CreditCardPaymentAuth;
      $this->PlatingCarrier = $PlatingCarrier;
    }

    /**
     * @return LocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param LocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Util\CreditCardAuthReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return CreditCardPaymentAuth
     */
    public function getCreditCardPaymentAuth()
    {
      return $this->CreditCardPaymentAuth;
    }

    /**
     * @param CreditCardPaymentAuth $CreditCardPaymentAuth
     * @return \FilippoToso\Travelport\Util\CreditCardAuthReq
     */
    public function setCreditCardPaymentAuth($CreditCardPaymentAuth)
    {
      $this->CreditCardPaymentAuth = $CreditCardPaymentAuth;
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
     * @return \FilippoToso\Travelport\Util\CreditCardAuthReq
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

}
