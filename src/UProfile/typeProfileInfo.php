<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileInfo
{

    /**
     * @var StringLength1to255 $AdditionalIdentifier
     */
    protected $AdditionalIdentifier = null;

    /**
     * @var typeDescription $Description
     */
    protected $Description = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     */
    public function __construct($AdditionalIdentifier = null, $Description = null)
    {
      $this->AdditionalIdentifier = $AdditionalIdentifier;
      $this->Description = $Description;
    }

    /**
     * @return StringLength1to255
     */
    public function getAdditionalIdentifier()
    {
      return $this->AdditionalIdentifier;
    }

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeProfileInfo
     */
    public function setAdditionalIdentifier($AdditionalIdentifier)
    {
      $this->AdditionalIdentifier = $AdditionalIdentifier;
      return $this;
    }

    /**
     * @return typeDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param typeDescription $Description
     * @return \FilippoToso\Travelport\UProfile\typeProfileInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
