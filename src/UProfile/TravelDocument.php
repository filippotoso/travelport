<?php

namespace FilippoToso\Travelport\UProfile;

class TravelDocument extends typeKeyTaggedElement
{

    /**
     * @var typeTravelDocumentAddress $Address
     */
    protected $Address = null;

    /**
     * @var typeTravelDocumentType $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to128 $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var date $IssuedDate
     */
    protected $IssuedDate = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var StringLength1to255 $LocationIssuedDescription
     */
    protected $LocationIssuedDescription = null;

    /**
     * @var StringLength1to128 $GivenName
     */
    protected $GivenName = null;

    /**
     * @var StringLength1to128 $MiddleName
     */
    protected $MiddleName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    protected $Surname = null;

    /**
     * @var typeGender $Gender
     */
    protected $Gender = null;

    /**
     * @var StringLength1to255 $NationalIdentifier
     */
    protected $NationalIdentifier = null;

    /**
     * @var date $BirthDate
     */
    protected $BirthDate = null;

    /**
     * @var StringLength1to128 $PlaceOfBirth
     */
    protected $PlaceOfBirth = null;

    /**
     * @var typeCountry $Nationality
     */
    protected $Nationality = null;

    /**
     * @var typeCountry $Citizenship
     */
    protected $Citizenship = null;

    /**
     * @var typeCountry $IssuedByCountry
     */
    protected $IssuedByCountry = null;

    /**
     * @var StringLength1to128 $IssuedByOtherCountryName
     */
    protected $IssuedByOtherCountryName = null;

    /**
     * @var anonymous633 $Height
     */
    protected $Height = null;

    /**
     * @var anonymous634 $HeightUnit
     */
    protected $HeightUnit = null;

    /**
     * @var anonymous635 $Weight
     */
    protected $Weight = null;

    /**
     * @var anonymous636 $WeightUnit
     */
    protected $WeightUnit = null;

    /**
     * @var StringLength1to255 $Residence
     */
    protected $Residence = null;

    /**
     * @var StringLength1to255 $EyeColor
     */
    protected $EyeColor = null;

    /**
     * @var StringLength1to255 $MilitaryStatus
     */
    protected $MilitaryStatus = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     */
    protected $IssuedForGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     */
    protected $IssuedForGeoPoliticalAreaCode = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param typeTravelDocumentType $Type
     * @param StringLength1to128 $DocumentNumber
     * @param date $IssuedDate
     * @param date $ExpirationDate
     * @param StringLength1to255 $LocationIssuedDescription
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $MiddleName
     * @param StringLength1to128 $Surname
     * @param typeGender $Gender
     * @param StringLength1to255 $NationalIdentifier
     * @param date $BirthDate
     * @param StringLength1to128 $PlaceOfBirth
     * @param typeCountry $Nationality
     * @param typeCountry $Citizenship
     * @param typeCountry $IssuedByCountry
     * @param StringLength1to128 $IssuedByOtherCountryName
     * @param anonymous633 $Height
     * @param anonymous634 $HeightUnit
     * @param anonymous635 $Weight
     * @param anonymous636 $WeightUnit
     * @param StringLength1to255 $Residence
     * @param StringLength1to255 $EyeColor
     * @param StringLength1to255 $MilitaryStatus
     * @param typePriorityOrder $PriorityOrder
     * @param typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     */
    public function __construct($Key = null, $TagRef = null, $Type = null, $DocumentNumber = null, $IssuedDate = null, $ExpirationDate = null, $LocationIssuedDescription = null, $GivenName = null, $MiddleName = null, $Surname = null, $Gender = null, $NationalIdentifier = null, $BirthDate = null, $PlaceOfBirth = null, $Nationality = null, $Citizenship = null, $IssuedByCountry = null, $IssuedByOtherCountryName = null, $Height = null, $HeightUnit = null, $Weight = null, $WeightUnit = null, $Residence = null, $EyeColor = null, $MilitaryStatus = null, $PriorityOrder = null, $IssuedForGeoPoliticalAreaType = null, $IssuedForGeoPoliticalAreaCode = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Type = $Type;
      $this->DocumentNumber = $DocumentNumber;
      $this->IssuedDate = $IssuedDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->LocationIssuedDescription = $LocationIssuedDescription;
      $this->GivenName = $GivenName;
      $this->MiddleName = $MiddleName;
      $this->Surname = $Surname;
      $this->Gender = $Gender;
      $this->NationalIdentifier = $NationalIdentifier;
      $this->BirthDate = $BirthDate;
      $this->PlaceOfBirth = $PlaceOfBirth;
      $this->Nationality = $Nationality;
      $this->Citizenship = $Citizenship;
      $this->IssuedByCountry = $IssuedByCountry;
      $this->IssuedByOtherCountryName = $IssuedByOtherCountryName;
      $this->Height = $Height;
      $this->HeightUnit = $HeightUnit;
      $this->Weight = $Weight;
      $this->WeightUnit = $WeightUnit;
      $this->Residence = $Residence;
      $this->EyeColor = $EyeColor;
      $this->MilitaryStatus = $MilitaryStatus;
      $this->PriorityOrder = $PriorityOrder;
      $this->IssuedForGeoPoliticalAreaType = $IssuedForGeoPoliticalAreaType;
      $this->IssuedForGeoPoliticalAreaCode = $IssuedForGeoPoliticalAreaCode;
    }

    /**
     * @return typeTravelDocumentAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeTravelDocumentAddress $Address
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeTravelDocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeTravelDocumentType $Type
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param StringLength1to128 $DocumentNumber
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssuedDate()
    {
      return $this->IssuedDate;
    }

    /**
     * @param date $IssuedDate
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setIssuedDate($IssuedDate)
    {
      $this->IssuedDate = $IssuedDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getLocationIssuedDescription()
    {
      return $this->LocationIssuedDescription;
    }

    /**
     * @param StringLength1to255 $LocationIssuedDescription
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setLocationIssuedDescription($LocationIssuedDescription)
    {
      $this->LocationIssuedDescription = $LocationIssuedDescription;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param StringLength1to128 $GivenName
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getMiddleName()
    {
      return $this->MiddleName;
    }

    /**
     * @param StringLength1to128 $MiddleName
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setMiddleName($MiddleName)
    {
      $this->MiddleName = $MiddleName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param StringLength1to128 $Surname
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return typeGender
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param typeGender $Gender
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getNationalIdentifier()
    {
      return $this->NationalIdentifier;
    }

    /**
     * @param StringLength1to255 $NationalIdentifier
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setNationalIdentifier($NationalIdentifier)
    {
      $this->NationalIdentifier = $NationalIdentifier;
      return $this;
    }

    /**
     * @return date
     */
    public function getBirthDate()
    {
      return $this->BirthDate;
    }

    /**
     * @param date $BirthDate
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setBirthDate($BirthDate)
    {
      $this->BirthDate = $BirthDate;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getPlaceOfBirth()
    {
      return $this->PlaceOfBirth;
    }

    /**
     * @param StringLength1to128 $PlaceOfBirth
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setPlaceOfBirth($PlaceOfBirth)
    {
      $this->PlaceOfBirth = $PlaceOfBirth;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param typeCountry $Nationality
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCitizenship()
    {
      return $this->Citizenship;
    }

    /**
     * @param typeCountry $Citizenship
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setCitizenship($Citizenship)
    {
      $this->Citizenship = $Citizenship;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getIssuedByCountry()
    {
      return $this->IssuedByCountry;
    }

    /**
     * @param typeCountry $IssuedByCountry
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setIssuedByCountry($IssuedByCountry)
    {
      $this->IssuedByCountry = $IssuedByCountry;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getIssuedByOtherCountryName()
    {
      return $this->IssuedByOtherCountryName;
    }

    /**
     * @param StringLength1to128 $IssuedByOtherCountryName
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setIssuedByOtherCountryName($IssuedByOtherCountryName)
    {
      $this->IssuedByOtherCountryName = $IssuedByOtherCountryName;
      return $this;
    }

    /**
     * @return anonymous633
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param anonymous633 $Height
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return anonymous634
     */
    public function getHeightUnit()
    {
      return $this->HeightUnit;
    }

    /**
     * @param anonymous634 $HeightUnit
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setHeightUnit($HeightUnit)
    {
      $this->HeightUnit = $HeightUnit;
      return $this;
    }

    /**
     * @return anonymous635
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param anonymous635 $Weight
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return anonymous636
     */
    public function getWeightUnit()
    {
      return $this->WeightUnit;
    }

    /**
     * @param anonymous636 $WeightUnit
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setWeightUnit($WeightUnit)
    {
      $this->WeightUnit = $WeightUnit;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getResidence()
    {
      return $this->Residence;
    }

    /**
     * @param StringLength1to255 $Residence
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setResidence($Residence)
    {
      $this->Residence = $Residence;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getEyeColor()
    {
      return $this->EyeColor;
    }

    /**
     * @param StringLength1to255 $EyeColor
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setEyeColor($EyeColor)
    {
      $this->EyeColor = $EyeColor;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getMilitaryStatus()
    {
      return $this->MilitaryStatus;
    }

    /**
     * @param StringLength1to255 $MilitaryStatus
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setMilitaryStatus($MilitaryStatus)
    {
      $this->MilitaryStatus = $MilitaryStatus;
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
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getIssuedForGeoPoliticalAreaType()
    {
      return $this->IssuedForGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $IssuedForGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setIssuedForGeoPoliticalAreaType($IssuedForGeoPoliticalAreaType)
    {
      $this->IssuedForGeoPoliticalAreaType = $IssuedForGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getIssuedForGeoPoliticalAreaCode()
    {
      return $this->IssuedForGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $IssuedForGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\TravelDocument
     */
    public function setIssuedForGeoPoliticalAreaCode($IssuedForGeoPoliticalAreaCode)
    {
      $this->IssuedForGeoPoliticalAreaCode = $IssuedForGeoPoliticalAreaCode;
      return $this;
    }

}
