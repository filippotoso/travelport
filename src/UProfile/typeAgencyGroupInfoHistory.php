<?php

namespace FilippoToso\Travelport\UProfile;

class typeAgencyGroupInfoHistory extends typeProfileInfo
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to128 $Name
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Name = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\typeAgencyGroupInfoHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
