<?php

namespace FilippoToso\Travelport\GDSQueue;

class FormOfPayment
{

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var DebitCard $DebitCard
     */
    protected $DebitCard = null;

    /**
     * @var EnettVan $EnettVan
     */
    protected $EnettVan = null;

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
     * @var typeFormOfPaymentPNRReference[] $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeGeneralReference[] $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var BSPPayment $BSPPayment
     */
    protected $BSPPayment = null;

    /**
     * @var ARCPayment $ARCPayment
     */
    protected $ARCPayment = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous45 $Type
     */
    protected $Type = null;

    /**
     * @var string $FulfillmentType
     */
    protected $FulfillmentType = null;

    /**
     * @var string $FulfillmentLocation
     */
    protected $FulfillmentLocation = null;

    /**
     * @var typeFulfillmentIDType $FulfillmentIDType
     */
    protected $FulfillmentIDType = null;

    /**
     * @var string $FulfillmentIDNumber
     */
    protected $FulfillmentIDNumber = null;

    /**
     * @var boolean $IsAgentType
     */
    protected $IsAgentType = null;

    /**
     * @var string $AgentText
     */
    protected $AgentText = null;

    /**
     * @var typeRef $ReuseFOP
     */
    protected $ReuseFOP = null;

    /**
     * @var typeExternalReference $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $ProfileKey
     */
    protected $ProfileKey = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param CreditCard $CreditCard
     * @param DebitCard $DebitCard
     * @param EnettVan $EnettVan
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
     * @param BSPPayment $BSPPayment
     * @param ARCPayment $ARCPayment
     * @param typeRef $Key
     * @param anonymous45 $Type
     * @param string $FulfillmentType
     * @param string $FulfillmentLocation
     * @param typeFulfillmentIDType $FulfillmentIDType
     * @param string $FulfillmentIDNumber
     * @param boolean $IsAgentType
     * @param string $AgentText
     * @param typeRef $ReuseFOP
     * @param typeExternalReference $ExternalReference
     * @param boolean $Reusable
     * @param string $ProfileID
     * @param typeRef $ProfileKey
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CreditCard = null, $DebitCard = null, $EnettVan = null, $Certificate = null, $TicketNumber = null, $Check = null, $Requisition = null, $MiscFormOfPayment = null, $AgencyPayment = null, $UnitedNations = null, $DirectPayment = null, $AgentVoucher = null, $PaymentAdvice = null, $BSPPayment = null, $ARCPayment = null, $Key = null, $Type = null, $FulfillmentType = null, $FulfillmentLocation = null, $FulfillmentIDType = null, $FulfillmentIDNumber = null, $IsAgentType = null, $AgentText = null, $ReuseFOP = null, $ExternalReference = null, $Reusable = null, $ProfileID = null, $ProfileKey = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CreditCard = $CreditCard;
      $this->DebitCard = $DebitCard;
      $this->EnettVan = $EnettVan;
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
      $this->BSPPayment = $BSPPayment;
      $this->ARCPayment = $ARCPayment;
      $this->Key = $Key;
      $this->Type = $Type;
      $this->FulfillmentType = $FulfillmentType;
      $this->FulfillmentLocation = $FulfillmentLocation;
      $this->FulfillmentIDType = $FulfillmentIDType;
      $this->FulfillmentIDNumber = $FulfillmentIDNumber;
      $this->IsAgentType = $IsAgentType;
      $this->AgentText = $AgentText;
      $this->ReuseFOP = $ReuseFOP;
      $this->ExternalReference = $ExternalReference;
      $this->Reusable = $Reusable;
      $this->ProfileID = $ProfileID;
      $this->ProfileKey = $ProfileKey;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return DebitCard
     */
    public function getDebitCard()
    {
      return $this->DebitCard;
    }

    /**
     * @param DebitCard $DebitCard
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setDebitCard($DebitCard)
    {
      $this->DebitCard = $DebitCard;
      return $this;
    }

    /**
     * @return EnettVan
     */
    public function getEnettVan()
    {
      return $this->EnettVan;
    }

    /**
     * @param EnettVan $EnettVan
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setEnettVan($EnettVan)
    {
      $this->EnettVan = $EnettVan;
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setPaymentAdvice($PaymentAdvice)
    {
      $this->PaymentAdvice = $PaymentAdvice;
      return $this;
    }

    /**
     * @return typeFormOfPaymentPNRReference[]
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeFormOfPaymentPNRReference[] $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setProviderReservationInfoRef(array $ProviderReservationInfoRef = null)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeGeneralReference[]
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeGeneralReference[] $SegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setSegmentRef(array $SegmentRef = null)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return BSPPayment
     */
    public function getBSPPayment()
    {
      return $this->BSPPayment;
    }

    /**
     * @param BSPPayment $BSPPayment
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setBSPPayment($BSPPayment)
    {
      $this->BSPPayment = $BSPPayment;
      return $this;
    }

    /**
     * @return ARCPayment
     */
    public function getARCPayment()
    {
      return $this->ARCPayment;
    }

    /**
     * @param ARCPayment $ARCPayment
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setARCPayment($ARCPayment)
    {
      $this->ARCPayment = $ARCPayment;
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous45
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous45 $Type
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentType()
    {
      return $this->FulfillmentType;
    }

    /**
     * @param string $FulfillmentType
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setFulfillmentType($FulfillmentType)
    {
      $this->FulfillmentType = $FulfillmentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentLocation()
    {
      return $this->FulfillmentLocation;
    }

    /**
     * @param string $FulfillmentLocation
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setFulfillmentLocation($FulfillmentLocation)
    {
      $this->FulfillmentLocation = $FulfillmentLocation;
      return $this;
    }

    /**
     * @return typeFulfillmentIDType
     */
    public function getFulfillmentIDType()
    {
      return $this->FulfillmentIDType;
    }

    /**
     * @param typeFulfillmentIDType $FulfillmentIDType
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setFulfillmentIDType($FulfillmentIDType)
    {
      $this->FulfillmentIDType = $FulfillmentIDType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillmentIDNumber()
    {
      return $this->FulfillmentIDNumber;
    }

    /**
     * @param string $FulfillmentIDNumber
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setFulfillmentIDNumber($FulfillmentIDNumber)
    {
      $this->FulfillmentIDNumber = $FulfillmentIDNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAgentType()
    {
      return $this->IsAgentType;
    }

    /**
     * @param boolean $IsAgentType
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setIsAgentType($IsAgentType)
    {
      $this->IsAgentType = $IsAgentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentText()
    {
      return $this->AgentText;
    }

    /**
     * @param string $AgentText
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setAgentText($AgentText)
    {
      $this->AgentText = $AgentText;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getReuseFOP()
    {
      return $this->ReuseFOP;
    }

    /**
     * @param typeRef $ReuseFOP
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setReuseFOP($ReuseFOP)
    {
      $this->ReuseFOP = $ReuseFOP;
      return $this;
    }

    /**
     * @return typeExternalReference
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param typeExternalReference $ExternalReference
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReusable()
    {
      return $this->Reusable;
    }

    /**
     * @param boolean $Reusable
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProfileKey()
    {
      return $this->ProfileKey;
    }

    /**
     * @param typeRef $ProfileKey
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setProfileKey($ProfileKey)
    {
      $this->ProfileKey = $ProfileKey;
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
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
     * @return \FilippoToso\Travelport\GDSQueue\FormOfPayment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
