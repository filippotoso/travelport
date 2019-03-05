<?php

namespace FilippoToso\Travelport\Util;

class CreateAirlineFeeMcoReq extends BaseReq
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var Endorsement $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeAirport $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous1088 $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

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
     * @param Name $Name
     * @param FormOfPayment $FormOfPayment
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param GeneralRemark $GeneralRemark
     * @param AccountingRemark $AccountingRemark
     * @param Endorsement $Endorsement
     * @param typeMoney $Amount
     * @param typeAirport $LocationCode
     * @param anonymous1088 $LocatorCode
     * @param string $TicketNumber
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Name = null, $FormOfPayment = null, $FormOfPaymentRef = null, $GeneralRemark = null, $AccountingRemark = null, $Endorsement = null, $Amount = null, $LocationCode = null, $LocatorCode = null, $TicketNumber = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Name = $Name;
      $this->FormOfPayment = $FormOfPayment;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->GeneralRemark = $GeneralRemark;
      $this->AccountingRemark = $AccountingRemark;
      $this->Endorsement = $Endorsement;
      $this->Amount = $Amount;
      $this->LocationCode = $LocationCode;
      $this->LocatorCode = $LocatorCode;
      $this->TicketNumber = $TicketNumber;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return FormOfPaymentRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
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
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
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
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
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
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param typeAirport $LocationCode
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous1088
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param anonymous1088 $LocatorCode
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \FilippoToso\Travelport\Util\CreateAirlineFeeMcoReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

}
