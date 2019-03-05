<?php

namespace FilippoToso\Travelport\UProfile;

class typeTravelerInfoHistory extends typeAccountTypeProfileInfo
{

    /**
     * @var ProprietaryData $ProprietaryData
     */
    protected $ProprietaryData = null;

    /**
     * @var typePTC[] $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var StringLength1to128 $GivenName
     */
    protected $GivenName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    protected $Surname = null;

    /**
     * @var StringLength6to128 $UniqueProfileID
     */
    protected $UniqueProfileID = null;

    /**
     * @var StringLength1to128 $Title
     */
    protected $Title = null;

    /**
     * @var StringLength1to128 $Nickname
     */
    protected $Nickname = null;

    /**
     * @var StringLength1to128 $OtherName
     */
    protected $OtherName = null;

    /**
     * @var StringLength1to128 $Suffix
     */
    protected $Suffix = null;

    /**
     * @var date $BirthDate
     */
    protected $BirthDate = null;

    /**
     * @var typeGender $Gender
     */
    protected $Gender = null;

    /**
     * @var boolean $VipStatus
     */
    protected $VipStatus = null;

    /**
     * @var StringLength1to50 $JobTitle
     */
    protected $JobTitle = null;

    /**
     * @var StringLength1to255 $Disability
     */
    protected $Disability = null;

    /**
     * @var typeCityOrAirport $HomeCityOrAirport
     */
    protected $HomeCityOrAirport = null;

    /**
     * @var anonymous639 $LocalLanguage
     */
    protected $LocalLanguage = null;

    /**
     * @var StringLength1to128 $LocalLanguageGivenName
     */
    protected $LocalLanguageGivenName = null;

    /**
     * @var StringLength1to128 $LocalLanguageSurname
     */
    protected $LocalLanguageSurname = null;

    /**
     * @var StringLength1to128 $LocalLanguageUsername
     */
    protected $LocalLanguageUsername = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to255 $MidOfficeID
     * @param ProprietaryData $ProprietaryData
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $Surname
     * @param StringLength6to128 $UniqueProfileID
     * @param StringLength1to128 $Title
     * @param StringLength1to128 $Nickname
     * @param StringLength1to128 $OtherName
     * @param StringLength1to128 $Suffix
     * @param date $BirthDate
     * @param typeGender $Gender
     * @param boolean $VipStatus
     * @param StringLength1to50 $JobTitle
     * @param StringLength1to255 $Disability
     * @param typeCityOrAirport $HomeCityOrAirport
     * @param anonymous639 $LocalLanguage
     * @param StringLength1to128 $LocalLanguageGivenName
     * @param StringLength1to128 $LocalLanguageSurname
     * @param StringLength1to128 $LocalLanguageUsername
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $MidOfficeID = null, $ProprietaryData = null, $GivenName = null, $Surname = null, $UniqueProfileID = null, $Title = null, $Nickname = null, $OtherName = null, $Suffix = null, $BirthDate = null, $Gender = null, $VipStatus = null, $JobTitle = null, $Disability = null, $HomeCityOrAirport = null, $LocalLanguage = null, $LocalLanguageGivenName = null, $LocalLanguageSurname = null, $LocalLanguageUsername = null)
    {
      parent::__construct($AdditionalIdentifier, $Description, $MidOfficeID);
      $this->ProprietaryData = $ProprietaryData;
      $this->GivenName = $GivenName;
      $this->Surname = $Surname;
      $this->UniqueProfileID = $UniqueProfileID;
      $this->Title = $Title;
      $this->Nickname = $Nickname;
      $this->OtherName = $OtherName;
      $this->Suffix = $Suffix;
      $this->BirthDate = $BirthDate;
      $this->Gender = $Gender;
      $this->VipStatus = $VipStatus;
      $this->JobTitle = $JobTitle;
      $this->Disability = $Disability;
      $this->HomeCityOrAirport = $HomeCityOrAirport;
      $this->LocalLanguage = $LocalLanguage;
      $this->LocalLanguageGivenName = $LocalLanguageGivenName;
      $this->LocalLanguageSurname = $LocalLanguageSurname;
      $this->LocalLanguageUsername = $LocalLanguageUsername;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setProprietaryData($ProprietaryData)
    {
      $this->ProprietaryData = $ProprietaryData;
      return $this;
    }

    /**
     * @return typePTC[]
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC[] $PassengerTypeCode
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setPassengerTypeCode(array $PassengerTypeCode = null)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return StringLength6to128
     */
    public function getUniqueProfileID()
    {
      return $this->UniqueProfileID;
    }

    /**
     * @param StringLength6to128 $UniqueProfileID
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param StringLength1to128 $Title
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getNickname()
    {
      return $this->Nickname;
    }

    /**
     * @param StringLength1to128 $Nickname
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setNickname($Nickname)
    {
      $this->Nickname = $Nickname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherName()
    {
      return $this->OtherName;
    }

    /**
     * @param StringLength1to128 $OtherName
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setOtherName($OtherName)
    {
      $this->OtherName = $OtherName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param StringLength1to128 $Suffix
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setBirthDate($BirthDate)
    {
      $this->BirthDate = $BirthDate;
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
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVipStatus()
    {
      return $this->VipStatus;
    }

    /**
     * @param boolean $VipStatus
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setVipStatus($VipStatus)
    {
      $this->VipStatus = $VipStatus;
      return $this;
    }

    /**
     * @return StringLength1to50
     */
    public function getJobTitle()
    {
      return $this->JobTitle;
    }

    /**
     * @param StringLength1to50 $JobTitle
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setJobTitle($JobTitle)
    {
      $this->JobTitle = $JobTitle;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDisability()
    {
      return $this->Disability;
    }

    /**
     * @param StringLength1to255 $Disability
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setDisability($Disability)
    {
      $this->Disability = $Disability;
      return $this;
    }

    /**
     * @return typeCityOrAirport
     */
    public function getHomeCityOrAirport()
    {
      return $this->HomeCityOrAirport;
    }

    /**
     * @param typeCityOrAirport $HomeCityOrAirport
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setHomeCityOrAirport($HomeCityOrAirport)
    {
      $this->HomeCityOrAirport = $HomeCityOrAirport;
      return $this;
    }

    /**
     * @return anonymous639
     */
    public function getLocalLanguage()
    {
      return $this->LocalLanguage;
    }

    /**
     * @param anonymous639 $LocalLanguage
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setLocalLanguage($LocalLanguage)
    {
      $this->LocalLanguage = $LocalLanguage;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLocalLanguageGivenName()
    {
      return $this->LocalLanguageGivenName;
    }

    /**
     * @param StringLength1to128 $LocalLanguageGivenName
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setLocalLanguageGivenName($LocalLanguageGivenName)
    {
      $this->LocalLanguageGivenName = $LocalLanguageGivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLocalLanguageSurname()
    {
      return $this->LocalLanguageSurname;
    }

    /**
     * @param StringLength1to128 $LocalLanguageSurname
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setLocalLanguageSurname($LocalLanguageSurname)
    {
      $this->LocalLanguageSurname = $LocalLanguageSurname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLocalLanguageUsername()
    {
      return $this->LocalLanguageUsername;
    }

    /**
     * @param StringLength1to128 $LocalLanguageUsername
     * @return \FilippoToso\Travelport\UProfile\typeTravelerInfoHistory
     */
    public function setLocalLanguageUsername($LocalLanguageUsername)
    {
      $this->LocalLanguageUsername = $LocalLanguageUsername;
      return $this;
    }

}
