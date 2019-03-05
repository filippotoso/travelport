<?php

namespace FilippoToso\Travelport\UProfile;

class typeHistorySubElement extends typeAddressHistory
{

    /**
     * @var typeAccountInfoHistory $AccountInfo
     */
    protected $AccountInfo = null;

    /**
     * @var typeTravelerInfoHistory $TravelerInfo
     */
    protected $TravelerInfo = null;

    /**
     * @var typeTravelDocumentHistory $TravelDocument
     */
    protected $TravelDocument = null;

    /**
     * @var typeAccountingReferenceHistory $AccountingReference
     */
    protected $AccountingReference = null;

    /**
     * @var typePolicyReferenceHistory $PolicyReference
     */
    protected $PolicyReference = null;

    /**
     * @var typeCommissionReferenceHistory $CommissionReference
     */
    protected $CommissionReference = null;

    /**
     * @var typeLoyaltyProgramEnrollmentHistory $LoyaltyProgramEnrollment
     */
    protected $LoyaltyProgramEnrollment = null;

    /**
     * @var typeContractHistory $Contract
     */
    protected $Contract = null;

    /**
     * @var typeCommissionHistory $Commission
     */
    protected $Commission = null;

    /**
     * @var typeServiceFeeHistory $ServiceFee
     */
    protected $ServiceFee = null;

    /**
     * @var typeAlternateContactHistory $AlternateContact
     */
    protected $AlternateContact = null;

    /**
     * @var AlternateContactAddress $AlternateContactAddress
     */
    protected $AlternateContactAddress = null;

    /**
     * @var AlternateContactPhone $AlternateContactPhone
     */
    protected $AlternateContactPhone = null;

    /**
     * @var AlternateContactElectronicAddress $AlternateContactElectronicAddress
     */
    protected $AlternateContactElectronicAddress = null;

    /**
     * @var typeFormOfPaymentHistory $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var typeRemarkHistory $Remark
     */
    protected $Remark = null;

    /**
     * @var typeAddressHistory $Address
     */
    protected $Address = null;

    /**
     * @var typePhoneHistory $Phone
     */
    protected $Phone = null;

    /**
     * @var typeElectronicAddressHistory $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @var TravelerIdentityInformation $TravelerIdentityInformation
     */
    protected $TravelerIdentityInformation = null;

    /**
     * @var typeExternalIdentifierHistory $ExternalIdentifier
     */
    protected $ExternalIdentifier = null;

    /**
     * @var typeAirPreferenceHistory $AirPreference
     */
    protected $AirPreference = null;

    /**
     * @var typeVehiclePreferenceHistory $VehiclePreference
     */
    protected $VehiclePreference = null;

    /**
     * @var typeHotelPreferenceHistory $HotelPreference
     */
    protected $HotelPreference = null;

    /**
     * @var typeRailPreferenceHistory $RailPreference
     */
    protected $RailPreference = null;

    /**
     * @var typeProfileParentHistory $ProfileParentHistory
     */
    protected $ProfileParentHistory = null;

    /**
     * @var typeFieldDataHistory $FieldData
     */
    protected $FieldData = null;

    /**
     * @var typeFieldGroupDataHistory $FieldGroupData
     */
    protected $FieldGroupData = null;

    /**
     * @var typeAdvisoryHistory $Advisory
     */
    protected $Advisory = null;

    /**
     * @var typeAgencyGroupInfoHistory $AgencyGroupInfo
     */
    protected $AgencyGroupInfo = null;

    /**
     * @var typeAgencyInfoHistory $AgencyInfo
     */
    protected $AgencyInfo = null;

    /**
     * @var typeBranchGroupInfoHistory $BranchGroupInfo
     */
    protected $BranchGroupInfo = null;

    /**
     * @var typeBranchInfoHistory $BranchInfo
     */
    protected $BranchInfo = null;

    /**
     * @var typeAgentInfoHistory $AgentInfo
     */
    protected $AgentInfo = null;

    /**
     * @var typeTravelerGroupInfoHistory $TravelerGroupInfo
     */
    protected $TravelerGroupInfo = null;

    /**
     * @var typeProfileStatusHistory $ProfileStatus
     */
    protected $ProfileStatus = null;

    /**
     * @var typeProfileLinkHistory $ProfileLink
     */
    protected $ProfileLink = null;

    /**
     * @var typeProviderInfoHistory $ProviderInfo
     */
    protected $ProviderInfo = null;

    /**
     * @var typeOtherPreferenceHistory $OtherPreference
     */
    protected $OtherPreference = null;

    /**
     * @var typeProprietaryDataHistory $ProprietaryData
     */
    protected $ProprietaryData = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param StringLength1to128 $AddressLine
     * @param anonymous730 $City
     * @param StringLength1to255 $State
     * @param StringLength1to128 $OtherStateProvince
     * @param typeCountry $Country
     * @param anonymous731 $Postal
     * @param StringLength1to128 $Type
     * @param typeContactPurpose $Purpose
     * @param boolean $Provisioned
     * @param typePriorityOrder $PriorityOrder
     * @param StringLength1to255 $DeliveryDescription
     * @param typeProfileID $OwnerID
     * @param typeAccountInfoHistory $AccountInfo
     * @param typeTravelerInfoHistory $TravelerInfo
     * @param typeTravelDocumentHistory $TravelDocument
     * @param typeAccountingReferenceHistory $AccountingReference
     * @param typePolicyReferenceHistory $PolicyReference
     * @param typeCommissionReferenceHistory $CommissionReference
     * @param typeLoyaltyProgramEnrollmentHistory $LoyaltyProgramEnrollment
     * @param typeContractHistory $Contract
     * @param typeCommissionHistory $Commission
     * @param typeServiceFeeHistory $ServiceFee
     * @param typeAlternateContactHistory $AlternateContact
     * @param AlternateContactAddress $AlternateContactAddress
     * @param AlternateContactPhone $AlternateContactPhone
     * @param AlternateContactElectronicAddress $AlternateContactElectronicAddress
     * @param typeFormOfPaymentHistory $FormOfPayment
     * @param typeRemarkHistory $Remark
     * @param typeAddressHistory $Address
     * @param typePhoneHistory $Phone
     * @param typeElectronicAddressHistory $ElectronicAddress
     * @param TravelerIdentityInformation $TravelerIdentityInformation
     * @param typeExternalIdentifierHistory $ExternalIdentifier
     * @param typeAirPreferenceHistory $AirPreference
     * @param typeVehiclePreferenceHistory $VehiclePreference
     * @param typeHotelPreferenceHistory $HotelPreference
     * @param typeRailPreferenceHistory $RailPreference
     * @param typeProfileParentHistory $ProfileParentHistory
     * @param typeFieldDataHistory $FieldData
     * @param typeFieldGroupDataHistory $FieldGroupData
     * @param typeAdvisoryHistory $Advisory
     * @param typeAgencyGroupInfoHistory $AgencyGroupInfo
     * @param typeAgencyInfoHistory $AgencyInfo
     * @param typeBranchGroupInfoHistory $BranchGroupInfo
     * @param typeBranchInfoHistory $BranchInfo
     * @param typeAgentInfoHistory $AgentInfo
     * @param typeTravelerGroupInfoHistory $TravelerGroupInfo
     * @param typeProfileStatusHistory $ProfileStatus
     * @param typeProfileLinkHistory $ProfileLink
     * @param typeProviderInfoHistory $ProviderInfo
     * @param typeOtherPreferenceHistory $OtherPreference
     * @param typeProprietaryDataHistory $ProprietaryData
     */
    public function __construct($Key = null, $TagRef = null, $AddressLine = null, $City = null, $State = null, $OtherStateProvince = null, $Country = null, $Postal = null, $Type = null, $Purpose = null, $Provisioned = null, $PriorityOrder = null, $DeliveryDescription = null, $OwnerID = null, $AccountInfo = null, $TravelerInfo = null, $TravelDocument = null, $AccountingReference = null, $PolicyReference = null, $CommissionReference = null, $LoyaltyProgramEnrollment = null, $Contract = null, $Commission = null, $ServiceFee = null, $AlternateContact = null, $AlternateContactAddress = null, $AlternateContactPhone = null, $AlternateContactElectronicAddress = null, $FormOfPayment = null, $Remark = null, $Address = null, $Phone = null, $ElectronicAddress = null, $TravelerIdentityInformation = null, $ExternalIdentifier = null, $AirPreference = null, $VehiclePreference = null, $HotelPreference = null, $RailPreference = null, $ProfileParentHistory = null, $FieldData = null, $FieldGroupData = null, $Advisory = null, $AgencyGroupInfo = null, $AgencyInfo = null, $BranchGroupInfo = null, $BranchInfo = null, $AgentInfo = null, $TravelerGroupInfo = null, $ProfileStatus = null, $ProfileLink = null, $ProviderInfo = null, $OtherPreference = null, $ProprietaryData = null)
    {
      parent::__construct($Key, $TagRef, $AddressLine, $City, $State, $OtherStateProvince, $Country, $Postal, $Type, $Purpose, $Provisioned, $PriorityOrder, $DeliveryDescription, $OwnerID);
      $this->AccountInfo = $AccountInfo;
      $this->TravelerInfo = $TravelerInfo;
      $this->TravelDocument = $TravelDocument;
      $this->AccountingReference = $AccountingReference;
      $this->PolicyReference = $PolicyReference;
      $this->CommissionReference = $CommissionReference;
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
      $this->Contract = $Contract;
      $this->Commission = $Commission;
      $this->ServiceFee = $ServiceFee;
      $this->AlternateContact = $AlternateContact;
      $this->AlternateContactAddress = $AlternateContactAddress;
      $this->AlternateContactPhone = $AlternateContactPhone;
      $this->AlternateContactElectronicAddress = $AlternateContactElectronicAddress;
      $this->FormOfPayment = $FormOfPayment;
      $this->Remark = $Remark;
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->TravelerIdentityInformation = $TravelerIdentityInformation;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->AirPreference = $AirPreference;
      $this->VehiclePreference = $VehiclePreference;
      $this->HotelPreference = $HotelPreference;
      $this->RailPreference = $RailPreference;
      $this->ProfileParentHistory = $ProfileParentHistory;
      $this->FieldData = $FieldData;
      $this->FieldGroupData = $FieldGroupData;
      $this->Advisory = $Advisory;
      $this->AgencyGroupInfo = $AgencyGroupInfo;
      $this->AgencyInfo = $AgencyInfo;
      $this->BranchGroupInfo = $BranchGroupInfo;
      $this->BranchInfo = $BranchInfo;
      $this->AgentInfo = $AgentInfo;
      $this->TravelerGroupInfo = $TravelerGroupInfo;
      $this->ProfileStatus = $ProfileStatus;
      $this->ProfileLink = $ProfileLink;
      $this->ProviderInfo = $ProviderInfo;
      $this->OtherPreference = $OtherPreference;
      $this->ProprietaryData = $ProprietaryData;
    }

    /**
     * @return typeAccountInfoHistory
     */
    public function getAccountInfo()
    {
      return $this->AccountInfo;
    }

    /**
     * @param typeAccountInfoHistory $AccountInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAccountInfo($AccountInfo)
    {
      $this->AccountInfo = $AccountInfo;
      return $this;
    }

    /**
     * @return typeTravelerInfoHistory
     */
    public function getTravelerInfo()
    {
      return $this->TravelerInfo;
    }

    /**
     * @param typeTravelerInfoHistory $TravelerInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setTravelerInfo($TravelerInfo)
    {
      $this->TravelerInfo = $TravelerInfo;
      return $this;
    }

    /**
     * @return typeTravelDocumentHistory
     */
    public function getTravelDocument()
    {
      return $this->TravelDocument;
    }

    /**
     * @param typeTravelDocumentHistory $TravelDocument
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setTravelDocument($TravelDocument)
    {
      $this->TravelDocument = $TravelDocument;
      return $this;
    }

    /**
     * @return typeAccountingReferenceHistory
     */
    public function getAccountingReference()
    {
      return $this->AccountingReference;
    }

    /**
     * @param typeAccountingReferenceHistory $AccountingReference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAccountingReference($AccountingReference)
    {
      $this->AccountingReference = $AccountingReference;
      return $this;
    }

    /**
     * @return typePolicyReferenceHistory
     */
    public function getPolicyReference()
    {
      return $this->PolicyReference;
    }

    /**
     * @param typePolicyReferenceHistory $PolicyReference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
      return $this;
    }

    /**
     * @return typeCommissionReferenceHistory
     */
    public function getCommissionReference()
    {
      return $this->CommissionReference;
    }

    /**
     * @param typeCommissionReferenceHistory $CommissionReference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setCommissionReference($CommissionReference)
    {
      $this->CommissionReference = $CommissionReference;
      return $this;
    }

    /**
     * @return typeLoyaltyProgramEnrollmentHistory
     */
    public function getLoyaltyProgramEnrollment()
    {
      return $this->LoyaltyProgramEnrollment;
    }

    /**
     * @param typeLoyaltyProgramEnrollmentHistory $LoyaltyProgramEnrollment
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setLoyaltyProgramEnrollment($LoyaltyProgramEnrollment)
    {
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
      return $this;
    }

    /**
     * @return typeContractHistory
     */
    public function getContract()
    {
      return $this->Contract;
    }

    /**
     * @param typeContractHistory $Contract
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setContract($Contract)
    {
      $this->Contract = $Contract;
      return $this;
    }

    /**
     * @return typeCommissionHistory
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param typeCommissionHistory $Commission
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeServiceFeeHistory
     */
    public function getServiceFee()
    {
      return $this->ServiceFee;
    }

    /**
     * @param typeServiceFeeHistory $ServiceFee
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setServiceFee($ServiceFee)
    {
      $this->ServiceFee = $ServiceFee;
      return $this;
    }

    /**
     * @return typeAlternateContactHistory
     */
    public function getAlternateContact()
    {
      return $this->AlternateContact;
    }

    /**
     * @param typeAlternateContactHistory $AlternateContact
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAlternateContact($AlternateContact)
    {
      $this->AlternateContact = $AlternateContact;
      return $this;
    }

    /**
     * @return AlternateContactAddress
     */
    public function getAlternateContactAddress()
    {
      return $this->AlternateContactAddress;
    }

    /**
     * @param AlternateContactAddress $AlternateContactAddress
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAlternateContactAddress($AlternateContactAddress)
    {
      $this->AlternateContactAddress = $AlternateContactAddress;
      return $this;
    }

    /**
     * @return AlternateContactPhone
     */
    public function getAlternateContactPhone()
    {
      return $this->AlternateContactPhone;
    }

    /**
     * @param AlternateContactPhone $AlternateContactPhone
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAlternateContactPhone($AlternateContactPhone)
    {
      $this->AlternateContactPhone = $AlternateContactPhone;
      return $this;
    }

    /**
     * @return AlternateContactElectronicAddress
     */
    public function getAlternateContactElectronicAddress()
    {
      return $this->AlternateContactElectronicAddress;
    }

    /**
     * @param AlternateContactElectronicAddress $AlternateContactElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAlternateContactElectronicAddress($AlternateContactElectronicAddress)
    {
      $this->AlternateContactElectronicAddress = $AlternateContactElectronicAddress;
      return $this;
    }

    /**
     * @return typeFormOfPaymentHistory
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param typeFormOfPaymentHistory $FormOfPayment
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return typeRemarkHistory
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param typeRemarkHistory $Remark
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return typeAddressHistory
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeAddressHistory $Address
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typePhoneHistory
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param typePhoneHistory $Phone
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return typeElectronicAddressHistory
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param typeElectronicAddressHistory $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return TravelerIdentityInformation
     */
    public function getTravelerIdentityInformation()
    {
      return $this->TravelerIdentityInformation;
    }

    /**
     * @param TravelerIdentityInformation $TravelerIdentityInformation
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setTravelerIdentityInformation($TravelerIdentityInformation)
    {
      $this->TravelerIdentityInformation = $TravelerIdentityInformation;
      return $this;
    }

    /**
     * @return typeExternalIdentifierHistory
     */
    public function getExternalIdentifier()
    {
      return $this->ExternalIdentifier;
    }

    /**
     * @param typeExternalIdentifierHistory $ExternalIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setExternalIdentifier($ExternalIdentifier)
    {
      $this->ExternalIdentifier = $ExternalIdentifier;
      return $this;
    }

    /**
     * @return typeAirPreferenceHistory
     */
    public function getAirPreference()
    {
      return $this->AirPreference;
    }

    /**
     * @param typeAirPreferenceHistory $AirPreference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAirPreference($AirPreference)
    {
      $this->AirPreference = $AirPreference;
      return $this;
    }

    /**
     * @return typeVehiclePreferenceHistory
     */
    public function getVehiclePreference()
    {
      return $this->VehiclePreference;
    }

    /**
     * @param typeVehiclePreferenceHistory $VehiclePreference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setVehiclePreference($VehiclePreference)
    {
      $this->VehiclePreference = $VehiclePreference;
      return $this;
    }

    /**
     * @return typeHotelPreferenceHistory
     */
    public function getHotelPreference()
    {
      return $this->HotelPreference;
    }

    /**
     * @param typeHotelPreferenceHistory $HotelPreference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setHotelPreference($HotelPreference)
    {
      $this->HotelPreference = $HotelPreference;
      return $this;
    }

    /**
     * @return typeRailPreferenceHistory
     */
    public function getRailPreference()
    {
      return $this->RailPreference;
    }

    /**
     * @param typeRailPreferenceHistory $RailPreference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setRailPreference($RailPreference)
    {
      $this->RailPreference = $RailPreference;
      return $this;
    }

    /**
     * @return typeProfileParentHistory
     */
    public function getProfileParentHistory()
    {
      return $this->ProfileParentHistory;
    }

    /**
     * @param typeProfileParentHistory $ProfileParentHistory
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setProfileParentHistory($ProfileParentHistory)
    {
      $this->ProfileParentHistory = $ProfileParentHistory;
      return $this;
    }

    /**
     * @return typeFieldDataHistory
     */
    public function getFieldData()
    {
      return $this->FieldData;
    }

    /**
     * @param typeFieldDataHistory $FieldData
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setFieldData($FieldData)
    {
      $this->FieldData = $FieldData;
      return $this;
    }

    /**
     * @return typeFieldGroupDataHistory
     */
    public function getFieldGroupData()
    {
      return $this->FieldGroupData;
    }

    /**
     * @param typeFieldGroupDataHistory $FieldGroupData
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setFieldGroupData($FieldGroupData)
    {
      $this->FieldGroupData = $FieldGroupData;
      return $this;
    }

    /**
     * @return typeAdvisoryHistory
     */
    public function getAdvisory()
    {
      return $this->Advisory;
    }

    /**
     * @param typeAdvisoryHistory $Advisory
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAdvisory($Advisory)
    {
      $this->Advisory = $Advisory;
      return $this;
    }

    /**
     * @return typeAgencyGroupInfoHistory
     */
    public function getAgencyGroupInfo()
    {
      return $this->AgencyGroupInfo;
    }

    /**
     * @param typeAgencyGroupInfoHistory $AgencyGroupInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAgencyGroupInfo($AgencyGroupInfo)
    {
      $this->AgencyGroupInfo = $AgencyGroupInfo;
      return $this;
    }

    /**
     * @return typeAgencyInfoHistory
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param typeAgencyInfoHistory $AgencyInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return typeBranchGroupInfoHistory
     */
    public function getBranchGroupInfo()
    {
      return $this->BranchGroupInfo;
    }

    /**
     * @param typeBranchGroupInfoHistory $BranchGroupInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setBranchGroupInfo($BranchGroupInfo)
    {
      $this->BranchGroupInfo = $BranchGroupInfo;
      return $this;
    }

    /**
     * @return typeBranchInfoHistory
     */
    public function getBranchInfo()
    {
      return $this->BranchInfo;
    }

    /**
     * @param typeBranchInfoHistory $BranchInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setBranchInfo($BranchInfo)
    {
      $this->BranchInfo = $BranchInfo;
      return $this;
    }

    /**
     * @return typeAgentInfoHistory
     */
    public function getAgentInfo()
    {
      return $this->AgentInfo;
    }

    /**
     * @param typeAgentInfoHistory $AgentInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setAgentInfo($AgentInfo)
    {
      $this->AgentInfo = $AgentInfo;
      return $this;
    }

    /**
     * @return typeTravelerGroupInfoHistory
     */
    public function getTravelerGroupInfo()
    {
      return $this->TravelerGroupInfo;
    }

    /**
     * @param typeTravelerGroupInfoHistory $TravelerGroupInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setTravelerGroupInfo($TravelerGroupInfo)
    {
      $this->TravelerGroupInfo = $TravelerGroupInfo;
      return $this;
    }

    /**
     * @return typeProfileStatusHistory
     */
    public function getProfileStatus()
    {
      return $this->ProfileStatus;
    }

    /**
     * @param typeProfileStatusHistory $ProfileStatus
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setProfileStatus($ProfileStatus)
    {
      $this->ProfileStatus = $ProfileStatus;
      return $this;
    }

    /**
     * @return typeProfileLinkHistory
     */
    public function getProfileLink()
    {
      return $this->ProfileLink;
    }

    /**
     * @param typeProfileLinkHistory $ProfileLink
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setProfileLink($ProfileLink)
    {
      $this->ProfileLink = $ProfileLink;
      return $this;
    }

    /**
     * @return typeProviderInfoHistory
     */
    public function getProviderInfo()
    {
      return $this->ProviderInfo;
    }

    /**
     * @param typeProviderInfoHistory $ProviderInfo
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setProviderInfo($ProviderInfo)
    {
      $this->ProviderInfo = $ProviderInfo;
      return $this;
    }

    /**
     * @return typeOtherPreferenceHistory
     */
    public function getOtherPreference()
    {
      return $this->OtherPreference;
    }

    /**
     * @param typeOtherPreferenceHistory $OtherPreference
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setOtherPreference($OtherPreference)
    {
      $this->OtherPreference = $OtherPreference;
      return $this;
    }

    /**
     * @return typeProprietaryDataHistory
     */
    public function getProprietaryData()
    {
      return $this->ProprietaryData;
    }

    /**
     * @param typeProprietaryDataHistory $ProprietaryData
     * @return \FilippoToso\Travelport\UProfile\typeHistorySubElement
     */
    public function setProprietaryData($ProprietaryData)
    {
      $this->ProprietaryData = $ProprietaryData;
      return $this;
    }

}
