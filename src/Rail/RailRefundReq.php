<?php

namespace FilippoToso\Travelport\Rail;

class RailRefundReq extends BaseReq
{

    /**
     * @var ContinuityCheckOverride $ContinuityCheckOverride
     */
    protected $ContinuityCheckOverride = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var anonymous1472 $RefundOption
     */
    protected $RefundOption = null;

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
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @param FormOfPayment $FormOfPayment
     * @param typeLocatorCode $LocatorCode
     * @param anonymous1472 $RefundOption
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $ContinuityCheckOverride, $FormOfPayment, $LocatorCode, $RefundOption)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      $this->FormOfPayment = $FormOfPayment;
      $this->LocatorCode = $LocatorCode;
      $this->RefundOption = $RefundOption;
    }

    /**
     * @return ContinuityCheckOverride
     */
    public function getContinuityCheckOverride()
    {
      return $this->ContinuityCheckOverride;
    }

    /**
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @return \FilippoToso\Travelport\Rail\RailRefundReq
     */
    public function setContinuityCheckOverride($ContinuityCheckOverride)
    {
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
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
     * @return \FilippoToso\Travelport\Rail\RailRefundReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\RailRefundReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return anonymous1472
     */
    public function getRefundOption()
    {
      return $this->RefundOption;
    }

    /**
     * @param anonymous1472 $RefundOption
     * @return \FilippoToso\Travelport\Rail\RailRefundReq
     */
    public function setRefundOption($RefundOption)
    {
      $this->RefundOption = $RefundOption;
      return $this;
    }

}
