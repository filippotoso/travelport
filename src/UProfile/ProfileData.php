<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileData
{

    /**
     * @var AgencyGroupInfo $AgencyGroupInfo
     */
    protected $AgencyGroupInfo = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    protected $AgencyInfo = null;

    /**
     * @var BranchGroupInfo $BranchGroupInfo
     */
    protected $BranchGroupInfo = null;

    /**
     * @var BranchInfo $BranchInfo
     */
    protected $BranchInfo = null;

    /**
     * @var AccountInfo $AccountInfo
     */
    protected $AccountInfo = null;

    /**
     * @var AgentInfo $AgentInfo
     */
    protected $AgentInfo = null;

    /**
     * @var TravelerGroupInfo $TravelerGroupInfo
     */
    protected $TravelerGroupInfo = null;

    /**
     * @var TravelerInfo $TravelerInfo
     */
    protected $TravelerInfo = null;

    /**
     * @var TravelDocument $TravelDocument
     */
    protected $TravelDocument = null;

    /**
     * @var AccountingReference $AccountingReference
     */
    protected $AccountingReference = null;

    /**
     * @var PolicyReference $PolicyReference
     */
    protected $PolicyReference = null;

    /**
     * @var CommissionReference $CommissionReference
     */
    protected $CommissionReference = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var typeFormOfPaymentType $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var AirPreference $AirPreference
     */
    protected $AirPreference = null;

    /**
     * @var HotelPreference $HotelPreference
     */
    protected $HotelPreference = null;

    /**
     * @var RailPreference $RailPreference
     */
    protected $RailPreference = null;

    /**
     * @var OtherPreference $OtherPreference
     */
    protected $OtherPreference = null;

    /**
     * @var Contract $Contract
     */
    protected $Contract = null;

    /**
     * @var ServiceFee $ServiceFee
     */
    protected $ServiceFee = null;

    /**
     * @var AlternateContact $AlternateContact
     */
    protected $AlternateContact = null;

    /**
     * @var LoyaltyProgramEnrollment $LoyaltyProgramEnrollment
     */
    protected $LoyaltyProgramEnrollment = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var VehiclePreference $VehiclePreference
     */
    protected $VehiclePreference = null;

    /**
     * @var FieldData $FieldData
     */
    protected $FieldData = null;

    /**
     * @var FieldGroupData $FieldGroupData
     */
    protected $FieldGroupData = null;

    /**
     * @param AgencyGroupInfo $AgencyGroupInfo
     * @param AgencyInfo $AgencyInfo
     * @param BranchGroupInfo $BranchGroupInfo
     * @param BranchInfo $BranchInfo
     * @param AccountInfo $AccountInfo
     * @param AgentInfo $AgentInfo
     * @param TravelerGroupInfo $TravelerGroupInfo
     * @param TravelerInfo $TravelerInfo
     * @param TravelDocument $TravelDocument
     * @param AccountingReference $AccountingReference
     * @param PolicyReference $PolicyReference
     * @param CommissionReference $CommissionReference
     * @param Commission $Commission
     * @param typeFormOfPaymentType $FormOfPayment
     * @param AirPreference $AirPreference
     * @param HotelPreference $HotelPreference
     * @param RailPreference $RailPreference
     * @param OtherPreference $OtherPreference
     * @param Contract $Contract
     * @param ServiceFee $ServiceFee
     * @param AlternateContact $AlternateContact
     * @param LoyaltyProgramEnrollment $LoyaltyProgramEnrollment
     * @param Remark $Remark
     * @param VehiclePreference $VehiclePreference
     * @param FieldData $FieldData
     * @param FieldGroupData $FieldGroupData
     */
    public function __construct($AgencyGroupInfo = null, $AgencyInfo = null, $BranchGroupInfo = null, $BranchInfo = null, $AccountInfo = null, $AgentInfo = null, $TravelerGroupInfo = null, $TravelerInfo = null, $TravelDocument = null, $AccountingReference = null, $PolicyReference = null, $CommissionReference = null, $Commission = null, $FormOfPayment = null, $AirPreference = null, $HotelPreference = null, $RailPreference = null, $OtherPreference = null, $Contract = null, $ServiceFee = null, $AlternateContact = null, $LoyaltyProgramEnrollment = null, $Remark = null, $VehiclePreference = null, $FieldData = null, $FieldGroupData = null)
    {
      $this->AgencyGroupInfo = $AgencyGroupInfo;
      $this->AgencyInfo = $AgencyInfo;
      $this->BranchGroupInfo = $BranchGroupInfo;
      $this->BranchInfo = $BranchInfo;
      $this->AccountInfo = $AccountInfo;
      $this->AgentInfo = $AgentInfo;
      $this->TravelerGroupInfo = $TravelerGroupInfo;
      $this->TravelerInfo = $TravelerInfo;
      $this->TravelDocument = $TravelDocument;
      $this->AccountingReference = $AccountingReference;
      $this->PolicyReference = $PolicyReference;
      $this->CommissionReference = $CommissionReference;
      $this->Commission = $Commission;
      $this->FormOfPayment = $FormOfPayment;
      $this->AirPreference = $AirPreference;
      $this->HotelPreference = $HotelPreference;
      $this->RailPreference = $RailPreference;
      $this->OtherPreference = $OtherPreference;
      $this->Contract = $Contract;
      $this->ServiceFee = $ServiceFee;
      $this->AlternateContact = $AlternateContact;
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
      $this->Remark = $Remark;
      $this->VehiclePreference = $VehiclePreference;
      $this->FieldData = $FieldData;
      $this->FieldGroupData = $FieldGroupData;
    }

    /**
     * @return AgencyGroupInfo
     */
    public function getAgencyGroupInfo()
    {
      return $this->AgencyGroupInfo;
    }

    /**
     * @param AgencyGroupInfo $AgencyGroupInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAgencyGroupInfo($AgencyGroupInfo)
    {
      $this->AgencyGroupInfo = $AgencyGroupInfo;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return BranchGroupInfo
     */
    public function getBranchGroupInfo()
    {
      return $this->BranchGroupInfo;
    }

    /**
     * @param BranchGroupInfo $BranchGroupInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setBranchGroupInfo($BranchGroupInfo)
    {
      $this->BranchGroupInfo = $BranchGroupInfo;
      return $this;
    }

    /**
     * @return BranchInfo
     */
    public function getBranchInfo()
    {
      return $this->BranchInfo;
    }

    /**
     * @param BranchInfo $BranchInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setBranchInfo($BranchInfo)
    {
      $this->BranchInfo = $BranchInfo;
      return $this;
    }

    /**
     * @return AccountInfo
     */
    public function getAccountInfo()
    {
      return $this->AccountInfo;
    }

    /**
     * @param AccountInfo $AccountInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAccountInfo($AccountInfo)
    {
      $this->AccountInfo = $AccountInfo;
      return $this;
    }

    /**
     * @return AgentInfo
     */
    public function getAgentInfo()
    {
      return $this->AgentInfo;
    }

    /**
     * @param AgentInfo $AgentInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAgentInfo($AgentInfo)
    {
      $this->AgentInfo = $AgentInfo;
      return $this;
    }

    /**
     * @return TravelerGroupInfo
     */
    public function getTravelerGroupInfo()
    {
      return $this->TravelerGroupInfo;
    }

    /**
     * @param TravelerGroupInfo $TravelerGroupInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setTravelerGroupInfo($TravelerGroupInfo)
    {
      $this->TravelerGroupInfo = $TravelerGroupInfo;
      return $this;
    }

    /**
     * @return TravelerInfo
     */
    public function getTravelerInfo()
    {
      return $this->TravelerInfo;
    }

    /**
     * @param TravelerInfo $TravelerInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setTravelerInfo($TravelerInfo)
    {
      $this->TravelerInfo = $TravelerInfo;
      return $this;
    }

    /**
     * @return TravelDocument
     */
    public function getTravelDocument()
    {
      return $this->TravelDocument;
    }

    /**
     * @param TravelDocument $TravelDocument
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setTravelDocument($TravelDocument)
    {
      $this->TravelDocument = $TravelDocument;
      return $this;
    }

    /**
     * @return AccountingReference
     */
    public function getAccountingReference()
    {
      return $this->AccountingReference;
    }

    /**
     * @param AccountingReference $AccountingReference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAccountingReference($AccountingReference)
    {
      $this->AccountingReference = $AccountingReference;
      return $this;
    }

    /**
     * @return PolicyReference
     */
    public function getPolicyReference()
    {
      return $this->PolicyReference;
    }

    /**
     * @param PolicyReference $PolicyReference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

    /**
     * @return CommissionReference
     */
    public function getCommissionReference()
    {
      return $this->CommissionReference;
    }

    /**
     * @param CommissionReference $CommissionReference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setCommissionReference($CommissionReference)
    {
      $this->CommissionReference = $CommissionReference;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeFormOfPaymentType
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param typeFormOfPaymentType $FormOfPayment
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return AirPreference
     */
    public function getAirPreference()
    {
      return $this->AirPreference;
    }

    /**
     * @param AirPreference $AirPreference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAirPreference($AirPreference)
    {
      $this->AirPreference = $AirPreference;
      return $this;
    }

    /**
     * @return HotelPreference
     */
    public function getHotelPreference()
    {
      return $this->HotelPreference;
    }

    /**
     * @param HotelPreference $HotelPreference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setHotelPreference($HotelPreference)
    {
      $this->HotelPreference = $HotelPreference;
      return $this;
    }

    /**
     * @return RailPreference
     */
    public function getRailPreference()
    {
      return $this->RailPreference;
    }

    /**
     * @param RailPreference $RailPreference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setRailPreference($RailPreference)
    {
      $this->RailPreference = $RailPreference;
      return $this;
    }

    /**
     * @return OtherPreference
     */
    public function getOtherPreference()
    {
      return $this->OtherPreference;
    }

    /**
     * @param OtherPreference $OtherPreference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setOtherPreference($OtherPreference)
    {
      $this->OtherPreference = $OtherPreference;
      return $this;
    }

    /**
     * @return Contract
     */
    public function getContract()
    {
      return $this->Contract;
    }

    /**
     * @param Contract $Contract
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setContract($Contract)
    {
      $this->Contract = $Contract;
      return $this;
    }

    /**
     * @return ServiceFee
     */
    public function getServiceFee()
    {
      return $this->ServiceFee;
    }

    /**
     * @param ServiceFee $ServiceFee
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setServiceFee($ServiceFee)
    {
      $this->ServiceFee = $ServiceFee;
      return $this;
    }

    /**
     * @return AlternateContact
     */
    public function getAlternateContact()
    {
      return $this->AlternateContact;
    }

    /**
     * @param AlternateContact $AlternateContact
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setAlternateContact($AlternateContact)
    {
      $this->AlternateContact = $AlternateContact;
      return $this;
    }

    /**
     * @return LoyaltyProgramEnrollment
     */
    public function getLoyaltyProgramEnrollment()
    {
      return $this->LoyaltyProgramEnrollment;
    }

    /**
     * @param LoyaltyProgramEnrollment $LoyaltyProgramEnrollment
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setLoyaltyProgramEnrollment($LoyaltyProgramEnrollment)
    {
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return VehiclePreference
     */
    public function getVehiclePreference()
    {
      return $this->VehiclePreference;
    }

    /**
     * @param VehiclePreference $VehiclePreference
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setVehiclePreference($VehiclePreference)
    {
      $this->VehiclePreference = $VehiclePreference;
      return $this;
    }

    /**
     * @return FieldData
     */
    public function getFieldData()
    {
      return $this->FieldData;
    }

    /**
     * @param FieldData $FieldData
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setFieldData($FieldData)
    {
      $this->FieldData = $FieldData;
      return $this;
    }

    /**
     * @return FieldGroupData
     */
    public function getFieldGroupData()
    {
      return $this->FieldGroupData;
    }

    /**
     * @param FieldGroupData $FieldGroupData
     * @return \FilippoToso\Travelport\UProfile\ProfileData
     */
    public function setFieldGroupData($FieldGroupData)
    {
      $this->FieldGroupData = $FieldGroupData;
      return $this;
    }

}
