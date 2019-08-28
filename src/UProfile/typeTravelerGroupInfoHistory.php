<?php

namespace FilippoToso\Travelport\UProfile;

class typeTravelerGroupInfoHistory extends typeAccountTypeProfileInfo
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to128 $LocalLanguageName
     */
    protected $LocalLanguageName = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to255 $MidOfficeID
     * @param StringLength1to128 $Name
     * @param StringLength1to128 $LocalLanguageName
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $MidOfficeID = null, $Name = null, $LocalLanguageName = null)
    {
      parent::__construct($AdditionalIdentifier, $Description, $MidOfficeID);
      $this->Name = $Name;
      $this->LocalLanguageName = $LocalLanguageName;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\typeTravelerGroupInfoHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLocalLanguageName()
    {
      return $this->LocalLanguageName;
    }

    /**
     * @param StringLength1to128 $LocalLanguageName
     * @return \FilippoToso\Travelport\UProfile\typeTravelerGroupInfoHistory
     */
    public function setLocalLanguageName($LocalLanguageName)
    {
      $this->LocalLanguageName = $LocalLanguageName;
      return $this;
    }

}
