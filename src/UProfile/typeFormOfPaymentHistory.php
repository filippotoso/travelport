<?php

namespace FilippoToso\Travelport\UProfile;

class typeFormOfPaymentHistory extends typeKeyElement
{

    /**
     * @var typeCreditCardTypeHistory $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var typePaymentCardHistory $DebitCard
     */
    protected $DebitCard = null;

    /**
     * @var CertificateHistory $CertificateHistory
     */
    protected $CertificateHistory = null;

    /**
     * @var StringLength0to13 $TicketNumberHistory
     */
    protected $TicketNumberHistory = null;

    /**
     * @var Check $Check
     */
    protected $Check = null;

    /**
     * @var Requisition $Requisition
     */
    protected $Requisition = null;

    /**
     * @var MiscFormOfPaymentHistory $MiscFormOfPaymentHistory
     */
    protected $MiscFormOfPaymentHistory = null;

    /**
     * @var typeAgencyPaymentHistory $AgencyPaymentHistory
     */
    protected $AgencyPaymentHistory = null;

    /**
     * @var UnitedNationsHistory $UnitedNationsHistory
     */
    protected $UnitedNationsHistory = null;

    /**
     * @var DirectPayment $DirectPayment
     */
    protected $DirectPayment = null;

    /**
     * @var AgentVoucherHistory $AgentVoucherHistory
     */
    protected $AgentVoucherHistory = null;

    /**
     * @var typeGuaranteeInformationHistory $Guarantee
     */
    protected $Guarantee = null;

    /**
     * @var typeVoucherInformationHistory $Voucher
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
     * @param CertificateHistory $CertificateHistory
     * @param StringLength0to13 $TicketNumberHistory
     * @param Check $Check
     * @param Requisition $Requisition
     * @param MiscFormOfPaymentHistory $MiscFormOfPaymentHistory
     * @param typeAgencyPaymentHistory $AgencyPaymentHistory
     * @param UnitedNationsHistory $UnitedNationsHistory
     * @param DirectPayment $DirectPayment
     * @param AgentVoucherHistory $AgentVoucherHistory
     * @param UNKNOWN $Type
     * @param StringLength1to255 $Description
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $CertificateHistory = null, $TicketNumberHistory = null, $Check = null, $Requisition = null, $MiscFormOfPaymentHistory = null, $AgencyPaymentHistory = null, $UnitedNationsHistory = null, $DirectPayment = null, $AgentVoucherHistory = null, $Type = null, $Description = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key);
      $this->CertificateHistory = $CertificateHistory;
      $this->TicketNumberHistory = $TicketNumberHistory;
      $this->Check = $Check;
      $this->Requisition = $Requisition;
      $this->MiscFormOfPaymentHistory = $MiscFormOfPaymentHistory;
      $this->AgencyPaymentHistory = $AgencyPaymentHistory;
      $this->UnitedNationsHistory = $UnitedNationsHistory;
      $this->DirectPayment = $DirectPayment;
      $this->AgentVoucherHistory = $AgentVoucherHistory;
      $this->Type = $Type;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return typeCreditCardTypeHistory
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param typeCreditCardTypeHistory $CreditCard
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return typePaymentCardHistory
     */
    public function getDebitCard()
    {
      return $this->DebitCard;
    }

    /**
     * @param typePaymentCardHistory $DebitCard
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setDebitCard($DebitCard)
    {
      $this->DebitCard = $DebitCard;
      return $this;
    }

    /**
     * @return CertificateHistory
     */
    public function getCertificateHistory()
    {
      return $this->CertificateHistory;
    }

    /**
     * @param CertificateHistory $CertificateHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setCertificateHistory($CertificateHistory)
    {
      $this->CertificateHistory = $CertificateHistory;
      return $this;
    }

    /**
     * @return StringLength0to13
     */
    public function getTicketNumberHistory()
    {
      return $this->TicketNumberHistory;
    }

    /**
     * @param StringLength0to13 $TicketNumberHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setTicketNumberHistory($TicketNumberHistory)
    {
      $this->TicketNumberHistory = $TicketNumberHistory;
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setRequisition($Requisition)
    {
      $this->Requisition = $Requisition;
      return $this;
    }

    /**
     * @return MiscFormOfPaymentHistory
     */
    public function getMiscFormOfPaymentHistory()
    {
      return $this->MiscFormOfPaymentHistory;
    }

    /**
     * @param MiscFormOfPaymentHistory $MiscFormOfPaymentHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setMiscFormOfPaymentHistory($MiscFormOfPaymentHistory)
    {
      $this->MiscFormOfPaymentHistory = $MiscFormOfPaymentHistory;
      return $this;
    }

    /**
     * @return typeAgencyPaymentHistory
     */
    public function getAgencyPaymentHistory()
    {
      return $this->AgencyPaymentHistory;
    }

    /**
     * @param typeAgencyPaymentHistory $AgencyPaymentHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setAgencyPaymentHistory($AgencyPaymentHistory)
    {
      $this->AgencyPaymentHistory = $AgencyPaymentHistory;
      return $this;
    }

    /**
     * @return UnitedNationsHistory
     */
    public function getUnitedNationsHistory()
    {
      return $this->UnitedNationsHistory;
    }

    /**
     * @param UnitedNationsHistory $UnitedNationsHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setUnitedNationsHistory($UnitedNationsHistory)
    {
      $this->UnitedNationsHistory = $UnitedNationsHistory;
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setDirectPayment($DirectPayment)
    {
      $this->DirectPayment = $DirectPayment;
      return $this;
    }

    /**
     * @return AgentVoucherHistory
     */
    public function getAgentVoucherHistory()
    {
      return $this->AgentVoucherHistory;
    }

    /**
     * @param AgentVoucherHistory $AgentVoucherHistory
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setAgentVoucherHistory($AgentVoucherHistory)
    {
      $this->AgentVoucherHistory = $AgentVoucherHistory;
      return $this;
    }

    /**
     * @return typeGuaranteeInformationHistory
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param typeGuaranteeInformationHistory $Guarantee
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return typeVoucherInformationHistory
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param typeVoucherInformationHistory $Voucher
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeFormOfPaymentHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
