<?php

namespace FilippoToso\Travelport\Air;

class AirRefundReq extends BaseReq
{

    /**
     * @var AirRefundBundle $AirRefundBundle
     */
    protected $AirRefundBundle = null;

    /**
     * @var TCRRefundBundle $TCRRefundBundle
     */
    protected $TCRRefundBundle = null;

    /**
     * @var AirRefundModifiers $AirRefundModifiers
     */
    protected $AirRefundModifiers = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

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
     * @param AirRefundBundle $AirRefundBundle
     * @param TCRRefundBundle $TCRRefundBundle
     * @param AirRefundModifiers $AirRefundModifiers
     * @param Commission $Commission
     * @param FormOfPayment $FormOfPayment
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirRefundBundle = null, $TCRRefundBundle = null, $AirRefundModifiers = null, $Commission = null, $FormOfPayment = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirRefundBundle = $AirRefundBundle;
      $this->TCRRefundBundle = $TCRRefundBundle;
      $this->AirRefundModifiers = $AirRefundModifiers;
      $this->Commission = $Commission;
      $this->FormOfPayment = $FormOfPayment;
    }

    /**
     * @return AirRefundBundle
     */
    public function getAirRefundBundle()
    {
      return $this->AirRefundBundle;
    }

    /**
     * @param AirRefundBundle $AirRefundBundle
     * @return \FilippoToso\Travelport\Air\AirRefundReq
     */
    public function setAirRefundBundle($AirRefundBundle)
    {
      $this->AirRefundBundle = $AirRefundBundle;
      return $this;
    }

    /**
     * @return TCRRefundBundle
     */
    public function getTCRRefundBundle()
    {
      return $this->TCRRefundBundle;
    }

    /**
     * @param TCRRefundBundle $TCRRefundBundle
     * @return \FilippoToso\Travelport\Air\AirRefundReq
     */
    public function setTCRRefundBundle($TCRRefundBundle)
    {
      $this->TCRRefundBundle = $TCRRefundBundle;
      return $this;
    }

    /**
     * @return AirRefundModifiers
     */
    public function getAirRefundModifiers()
    {
      return $this->AirRefundModifiers;
    }

    /**
     * @param AirRefundModifiers $AirRefundModifiers
     * @return \FilippoToso\Travelport\Air\AirRefundReq
     */
    public function setAirRefundModifiers($AirRefundModifiers)
    {
      $this->AirRefundModifiers = $AirRefundModifiers;
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
     * @return \FilippoToso\Travelport\Air\AirRefundReq
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
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
     * @return \FilippoToso\Travelport\Air\AirRefundReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

}
