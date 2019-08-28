<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDataAdd
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Phone $Phone
     */
    protected $Phone = null;

    /**
     * @var ElectronicAddress $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @var TravelerIdentityInformation $TravelerIdentityInformation
     */
    protected $TravelerIdentityInformation = null;

    /**
     * @var ExternalIdentifier $ExternalIdentifier
     */
    protected $ExternalIdentifier = null;

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
     * @var LoyaltyProgramEnrollment $LoyaltyProgramEnrollment
     */
    protected $LoyaltyProgramEnrollment = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var Contract $Contract
     */
    protected $Contract = null;

    /**
     * @var ServiceFee $ServiceFee
     */
    protected $ServiceFee = null;

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
     * @var OtherPreference $OtherPreference
     */
    protected $OtherPreference = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var FieldData $FieldData
     */
    protected $FieldData = null;

    /**
     * @var AlternateContact $AlternateContact
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
     * @var FieldGroupData $FieldGroupData
     */
    protected $FieldGroupData = null;

    /**
     * @var VehiclePreference $VehiclePreference
     */
    protected $VehiclePreference = null;

    /**
     * @var Advisory $Advisory
     */
    protected $Advisory = null;

    /**
     * @var CommissionReference $CommissionReference
     */
    protected $CommissionReference = null;

    /**
     * @var RailPreference $RailPreference
     */
    protected $RailPreference = null;

    /**
     * @var ProviderInfo $ProviderInfo
     */
    protected $ProviderInfo = null;

    /**
     * @var ProprietaryData $ProprietaryData
     */
    protected $ProprietaryData = null;

    /**
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param TravelerIdentityInformation $TravelerIdentityInformation
     * @param ExternalIdentifier $ExternalIdentifier
     * @param TravelDocument $TravelDocument
     * @param AccountingReference $AccountingReference
     * @param PolicyReference $PolicyReference
     * @param LoyaltyProgramEnrollment $LoyaltyProgramEnrollment
     * @param Commission $Commission
     * @param Contract $Contract
     * @param ServiceFee $ServiceFee
     * @param typeFormOfPaymentType $FormOfPayment
     * @param AirPreference $AirPreference
     * @param HotelPreference $HotelPreference
     * @param OtherPreference $OtherPreference
     * @param Remark $Remark
     * @param FieldData $FieldData
     * @param AlternateContact $AlternateContact
     * @param AlternateContactAddress $AlternateContactAddress
     * @param AlternateContactPhone $AlternateContactPhone
     * @param AlternateContactElectronicAddress $AlternateContactElectronicAddress
     * @param FieldGroupData $FieldGroupData
     * @param VehiclePreference $VehiclePreference
     * @param Advisory $Advisory
     * @param CommissionReference $CommissionReference
     * @param RailPreference $RailPreference
     * @param ProviderInfo $ProviderInfo
     * @param ProprietaryData $ProprietaryData
     */
    public function __construct($Address = null, $Phone = null, $ElectronicAddress = null, $TravelerIdentityInformation = null, $ExternalIdentifier = null, $TravelDocument = null, $AccountingReference = null, $PolicyReference = null, $LoyaltyProgramEnrollment = null, $Commission = null, $Contract = null, $ServiceFee = null, $FormOfPayment = null, $AirPreference = null, $HotelPreference = null, $OtherPreference = null, $Remark = null, $FieldData = null, $AlternateContact = null, $AlternateContactAddress = null, $AlternateContactPhone = null, $AlternateContactElectronicAddress = null, $FieldGroupData = null, $VehiclePreference = null, $Advisory = null, $CommissionReference = null, $RailPreference = null, $ProviderInfo = null, $ProprietaryData = null)
    {
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->TravelerIdentityInformation = $TravelerIdentityInformation;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->TravelDocument = $TravelDocument;
      $this->AccountingReference = $AccountingReference;
      $this->PolicyReference = $PolicyReference;
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
      $this->Commission = $Commission;
      $this->Contract = $Contract;
      $this->ServiceFee = $ServiceFee;
      $this->FormOfPayment = $FormOfPayment;
      $this->AirPreference = $AirPreference;
      $this->HotelPreference = $HotelPreference;
      $this->OtherPreference = $OtherPreference;
      $this->Remark = $Remark;
      $this->FieldData = $FieldData;
      $this->AlternateContact = $AlternateContact;
      $this->AlternateContactAddress = $AlternateContactAddress;
      $this->AlternateContactPhone = $AlternateContactPhone;
      $this->AlternateContactElectronicAddress = $AlternateContactElectronicAddress;
      $this->FieldGroupData = $FieldGroupData;
      $this->VehiclePreference = $VehiclePreference;
      $this->Advisory = $Advisory;
      $this->CommissionReference = $CommissionReference;
      $this->RailPreference = $RailPreference;
      $this->ProviderInfo = $ProviderInfo;
      $this->ProprietaryData = $ProprietaryData;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Phone $Phone
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return ElectronicAddress
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param ElectronicAddress $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setTravelerIdentityInformation($TravelerIdentityInformation)
    {
      $this->TravelerIdentityInformation = $TravelerIdentityInformation;
      return $this;
    }

    /**
     * @return ExternalIdentifier
     */
    public function getExternalIdentifier()
    {
      return $this->ExternalIdentifier;
    }

    /**
     * @param ExternalIdentifier $ExternalIdentifier
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setExternalIdentifier($ExternalIdentifier)
    {
      $this->ExternalIdentifier = $ExternalIdentifier;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setPolicyReference($PolicyReference)
    {
      $this->PolicyReference = $PolicyReference;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setLoyaltyProgramEnrollment($LoyaltyProgramEnrollment)
    {
      $this->LoyaltyProgramEnrollment = $LoyaltyProgramEnrollment;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setServiceFee($ServiceFee)
    {
      $this->ServiceFee = $ServiceFee;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setHotelPreference($HotelPreference)
    {
      $this->HotelPreference = $HotelPreference;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setOtherPreference($OtherPreference)
    {
      $this->OtherPreference = $OtherPreference;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setFieldData($FieldData)
    {
      $this->FieldData = $FieldData;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setAlternateContactElectronicAddress($AlternateContactElectronicAddress)
    {
      $this->AlternateContactElectronicAddress = $AlternateContactElectronicAddress;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setFieldGroupData($FieldGroupData)
    {
      $this->FieldGroupData = $FieldGroupData;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setVehiclePreference($VehiclePreference)
    {
      $this->VehiclePreference = $VehiclePreference;
      return $this;
    }

    /**
     * @return Advisory
     */
    public function getAdvisory()
    {
      return $this->Advisory;
    }

    /**
     * @param Advisory $Advisory
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setAdvisory($Advisory)
    {
      $this->Advisory = $Advisory;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setCommissionReference($CommissionReference)
    {
      $this->CommissionReference = $CommissionReference;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setRailPreference($RailPreference)
    {
      $this->RailPreference = $RailPreference;
      return $this;
    }

    /**
     * @return ProviderInfo
     */
    public function getProviderInfo()
    {
      return $this->ProviderInfo;
    }

    /**
     * @param ProviderInfo $ProviderInfo
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setProviderInfo($ProviderInfo)
    {
      $this->ProviderInfo = $ProviderInfo;
      return $this;
    }

    /**
     * @return ProprietaryData
     */
    public function getProprietaryData()
    {
      return $this->ProprietaryData;
    }

    /**
     * @param ProprietaryData $ProprietaryData
     * @return \FilippoToso\Travelport\UProfile\ProfileDataAdd
     */
    public function setProprietaryData($ProprietaryData)
    {
      $this->ProprietaryData = $ProprietaryData;
      return $this;
    }

}
