<?php

namespace FilippoToso\Travelport\UProfile;

class typeFormOfPaymentType extends typeKeyTaggedElement
{

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var typePaymentCard $DebitCard
     */
    protected $DebitCard = null;

    /**
     * @var Certificate $Certificate
     */
    protected $Certificate = null;

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var Check $Check
     */
    protected $Check = null;

    /**
     * @var Requisition $Requisition
     */
    protected $Requisition = null;

    /**
     * @var MiscFormOfPayment $MiscFormOfPayment
     */
    protected $MiscFormOfPayment = null;

    /**
     * @var typeAgencyPayment $AgencyPayment
     */
    protected $AgencyPayment = null;

    /**
     * @var UnitedNations $UnitedNations
     */
    protected $UnitedNations = null;

    /**
     * @var DirectPayment $DirectPayment
     */
    protected $DirectPayment = null;

    /**
     * @var AgentVoucher $AgentVoucher
     */
    protected $AgentVoucher = null;

    /**
     * @var PaymentAdvice $PaymentAdvice
     */
    protected $PaymentAdvice = null;

    /**
     * @var typeGuaranteeInformation $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var typeVoucherInformation $Voucher
     */
    protected $Voucher = null;

    /**
     * @var typeMoney $Cash
     */
    protected $Cash = null;

    /**
     * @var UNKNOWN $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param CreditCard $CreditCard
     * @param Certificate $Certificate
     * @param StringLength1to13 $TicketNumber
     * @param Check $Check
     * @param Requisition $Requisition
     * @param MiscFormOfPayment $MiscFormOfPayment
     * @param typeAgencyPayment $AgencyPayment
     * @param UnitedNations $UnitedNations
     * @param DirectPayment $DirectPayment
     * @param AgentVoucher $AgentVoucher
     * @param PaymentAdvice $PaymentAdvice
     * @param UNKNOWN $Type
     * @param StringLength1to255 $Description
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $CreditCard = null, $Certificate = null, $TicketNumber = null, $Check = null, $Requisition = null, $MiscFormOfPayment = null, $AgencyPayment = null, $UnitedNations = null, $DirectPayment = null, $AgentVoucher = null, $PaymentAdvice = null, $Type = null, $Description = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->CreditCard = $CreditCard;
      $this->Certificate = $Certificate;
      $this->TicketNumber = $TicketNumber;
      $this->Check = $Check;
      $this->Requisition = $Requisition;
      $this->MiscFormOfPayment = $MiscFormOfPayment;
      $this->AgencyPayment = $AgencyPayment;
      $this->UnitedNations = $UnitedNations;
      $this->DirectPayment = $DirectPayment;
      $this->AgentVoucher = $AgentVoucher;
      $this->PaymentAdvice = $PaymentAdvice;
      $this->Type = $Type;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return typePaymentCard
     */
    public function getDebitCard()
    {
      return $this->DebitCard;
    }

    /**
     * @param typePaymentCard $DebitCard
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setDebitCard($DebitCard)
    {
      $this->DebitCard = $DebitCard;
      return $this;
    }

    /**
     * @return Certificate
     */
    public function getCertificate()
    {
      return $this->Certificate;
    }

    /**
     * @param Certificate $Certificate
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setCertificate($Certificate)
    {
      $this->Certificate = $Certificate;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return Check
     */
    public function getCheck()
    {
      return $this->Check;
    }

    /**
     * @param Check $Check
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setCheck($Check)
    {
      $this->Check = $Check;
      return $this;
    }

    /**
     * @return Requisition
     */
    public function getRequisition()
    {
      return $this->Requisition;
    }

    /**
     * @param Requisition $Requisition
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setRequisition($Requisition)
    {
      $this->Requisition = $Requisition;
      return $this;
    }

    /**
     * @return MiscFormOfPayment
     */
    public function getMiscFormOfPayment()
    {
      return $this->MiscFormOfPayment;
    }

    /**
     * @param MiscFormOfPayment $MiscFormOfPayment
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setMiscFormOfPayment($MiscFormOfPayment)
    {
      $this->MiscFormOfPayment = $MiscFormOfPayment;
      return $this;
    }

    /**
     * @return typeAgencyPayment
     */
    public function getAgencyPayment()
    {
      return $this->AgencyPayment;
    }

    /**
     * @param typeAgencyPayment $AgencyPayment
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setAgencyPayment($AgencyPayment)
    {
      $this->AgencyPayment = $AgencyPayment;
      return $this;
    }

    /**
     * @return UnitedNations
     */
    public function getUnitedNations()
    {
      return $this->UnitedNations;
    }

    /**
     * @param UnitedNations $UnitedNations
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setUnitedNations($UnitedNations)
    {
      $this->UnitedNations = $UnitedNations;
      return $this;
    }

    /**
     * @return DirectPayment
     */
    public function getDirectPayment()
    {
      return $this->DirectPayment;
    }

    /**
     * @param DirectPayment $DirectPayment
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setDirectPayment($DirectPayment)
    {
      $this->DirectPayment = $DirectPayment;
      return $this;
    }

    /**
     * @return AgentVoucher
     */
    public function getAgentVoucher()
    {
      return $this->AgentVoucher;
    }

    /**
     * @param AgentVoucher $AgentVoucher
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setAgentVoucher($AgentVoucher)
    {
      $this->AgentVoucher = $AgentVoucher;
      return $this;
    }

    /**
     * @return PaymentAdvice
     */
    public function getPaymentAdvice()
    {
      return $this->PaymentAdvice;
    }

    /**
     * @param PaymentAdvice $PaymentAdvice
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setPaymentAdvice($PaymentAdvice)
    {
      $this->PaymentAdvice = $PaymentAdvice;
      return $this;
    }

    /**
     * @return typeGuaranteeInformation
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param typeGuaranteeInformation $Guarantee
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return typeVoucherInformation
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param typeVoucherInformation $Voucher
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setVoucher($Voucher)
    {
      $this->Voucher = $Voucher;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCash()
    {
      return $this->Cash;
    }

    /**
     * @param typeMoney $Cash
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setCash($Cash)
    {
      $this->Cash = $Cash;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param UNKNOWN $Type
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentType
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
