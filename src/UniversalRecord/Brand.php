<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Brand
{

    /**
     * @var typeTextElement $Title
     */
    protected $Title = null;

    /**
     * @var typeTextElement $Text
     */
    protected $Text = null;

    /**
     * @var ImageLocation $ImageLocation
     */
    protected $ImageLocation = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var Rules $Rules
     */
    protected $Rules = null;

    /**
     * @var ServiceAssociations $ServiceAssociations
     */
    protected $ServiceAssociations = null;

    /**
     * @var UpsellBrand $UpsellBrand
     */
    protected $UpsellBrand = null;

    /**
     * @var typeApplicableSegment[] $ApplicableSegment
     */
    protected $ApplicableSegment = null;

    /**
     * @var typeDefaultBrandDetail $DefaultBrandDetail
     */
    protected $DefaultBrandDetail = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeBrandId $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var typeRef $AirItineraryDetailsRef
     */
    protected $AirItineraryDetailsRef = null;

    /**
     * @var typeBrandId $UpSellBrandID
     */
    protected $UpSellBrandID = null;

    /**
     * @var boolean $BrandFound
     */
    protected $BrandFound = null;

    /**
     * @var boolean $UpSellBrandFound
     */
    protected $UpSellBrandFound = null;

    /**
     * @var boolean $BrandedDetailsAvailable
     */
    protected $BrandedDetailsAvailable = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var StringLength1to10 $BrandTier
     */
    protected $BrandTier = null;

    /**
     * @var StringLength1to99 $BrandMaintained
     */
    protected $BrandMaintained = null;

    /**
     * @param typeTextElement $Title
     * @param typeTextElement $Text
     * @param ImageLocation $ImageLocation
     * @param OptionalServices $OptionalServices
     * @param Rules $Rules
     * @param ServiceAssociations $ServiceAssociations
     * @param UpsellBrand $UpsellBrand
     * @param typeDefaultBrandDetail $DefaultBrandDetail
     * @param typeRef $Key
     * @param typeBrandId $BrandID
     * @param string $Name
     * @param typeRef $AirItineraryDetailsRef
     * @param typeBrandId $UpSellBrandID
     * @param boolean $BrandFound
     * @param boolean $UpSellBrandFound
     * @param boolean $BrandedDetailsAvailable
     * @param typeCarrier $Carrier
     * @param StringLength1to10 $BrandTier
     * @param StringLength1to99 $BrandMaintained
     */
    public function __construct($Title = null, $Text = null, $ImageLocation = null, $OptionalServices = null, $Rules = null, $ServiceAssociations = null, $UpsellBrand = null, $DefaultBrandDetail = null, $Key = null, $BrandID = null, $Name = null, $AirItineraryDetailsRef = null, $UpSellBrandID = null, $BrandFound = null, $UpSellBrandFound = null, $BrandedDetailsAvailable = null, $Carrier = null, $BrandTier = null, $BrandMaintained = null)
    {
      $this->Title = $Title;
      $this->Text = $Text;
      $this->ImageLocation = $ImageLocation;
      $this->OptionalServices = $OptionalServices;
      $this->Rules = $Rules;
      $this->ServiceAssociations = $ServiceAssociations;
      $this->UpsellBrand = $UpsellBrand;
      $this->DefaultBrandDetail = $DefaultBrandDetail;
      $this->Key = $Key;
      $this->BrandID = $BrandID;
      $this->Name = $Name;
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      $this->UpSellBrandID = $UpSellBrandID;
      $this->BrandFound = $BrandFound;
      $this->UpSellBrandFound = $UpSellBrandFound;
      $this->BrandedDetailsAvailable = $BrandedDetailsAvailable;
      $this->Carrier = $Carrier;
      $this->BrandTier = $BrandTier;
      $this->BrandMaintained = $BrandMaintained;
    }

    /**
     * @return typeTextElement
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param typeTextElement $Title
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return typeTextElement
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeTextElement $Text
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return ImageLocation
     */
    public function getImageLocation()
    {
      return $this->ImageLocation;
    }

    /**
     * @param ImageLocation $ImageLocation
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setImageLocation($ImageLocation)
    {
      $this->ImageLocation = $ImageLocation;
      return $this;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return Rules
     */
    public function getRules()
    {
      return $this->Rules;
    }

    /**
     * @param Rules $Rules
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setRules($Rules)
    {
      $this->Rules = $Rules;
      return $this;
    }

    /**
     * @return ServiceAssociations
     */
    public function getServiceAssociations()
    {
      return $this->ServiceAssociations;
    }

    /**
     * @param ServiceAssociations $ServiceAssociations
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setServiceAssociations($ServiceAssociations)
    {
      $this->ServiceAssociations = $ServiceAssociations;
      return $this;
    }

    /**
     * @return UpsellBrand
     */
    public function getUpsellBrand()
    {
      return $this->UpsellBrand;
    }

    /**
     * @param UpsellBrand $UpsellBrand
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setUpsellBrand($UpsellBrand)
    {
      $this->UpsellBrand = $UpsellBrand;
      return $this;
    }

    /**
     * @return typeApplicableSegment[]
     */
    public function getApplicableSegment()
    {
      return $this->ApplicableSegment;
    }

    /**
     * @param typeApplicableSegment[] $ApplicableSegment
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setApplicableSegment(array $ApplicableSegment = null)
    {
      $this->ApplicableSegment = $ApplicableSegment;
      return $this;
    }

    /**
     * @return typeDefaultBrandDetail
     */
    public function getDefaultBrandDetail()
    {
      return $this->DefaultBrandDetail;
    }

    /**
     * @param typeDefaultBrandDetail $DefaultBrandDetail
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setDefaultBrandDetail($DefaultBrandDetail)
    {
      $this->DefaultBrandDetail = $DefaultBrandDetail;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeBrandId
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param typeBrandId $BrandID
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirItineraryDetailsRef()
    {
      return $this->AirItineraryDetailsRef;
    }

    /**
     * @param typeRef $AirItineraryDetailsRef
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setAirItineraryDetailsRef($AirItineraryDetailsRef)
    {
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      return $this;
    }

    /**
     * @return typeBrandId
     */
    public function getUpSellBrandID()
    {
      return $this->UpSellBrandID;
    }

    /**
     * @param typeBrandId $UpSellBrandID
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setUpSellBrandID($UpSellBrandID)
    {
      $this->UpSellBrandID = $UpSellBrandID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBrandFound()
    {
      return $this->BrandFound;
    }

    /**
     * @param boolean $BrandFound
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setBrandFound($BrandFound)
    {
      $this->BrandFound = $BrandFound;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpSellBrandFound()
    {
      return $this->UpSellBrandFound;
    }

    /**
     * @param boolean $UpSellBrandFound
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setUpSellBrandFound($UpSellBrandFound)
    {
      $this->UpSellBrandFound = $UpSellBrandFound;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBrandedDetailsAvailable()
    {
      return $this->BrandedDetailsAvailable;
    }

    /**
     * @param boolean $BrandedDetailsAvailable
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setBrandedDetailsAvailable($BrandedDetailsAvailable)
    {
      $this->BrandedDetailsAvailable = $BrandedDetailsAvailable;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBrandTier()
    {
      return $this->BrandTier;
    }

    /**
     * @param StringLength1to10 $BrandTier
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setBrandTier($BrandTier)
    {
      $this->BrandTier = $BrandTier;
      return $this;
    }

    /**
     * @return StringLength1to99
     */
    public function getBrandMaintained()
    {
      return $this->BrandMaintained;
    }

    /**
     * @param StringLength1to99 $BrandMaintained
     * @return \FilippoToso\Travelport\UniversalRecord\Brand
     */
    public function setBrandMaintained($BrandMaintained)
    {
      $this->BrandMaintained = $BrandMaintained;
      return $this;
    }

}
