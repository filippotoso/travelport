<?php

namespace FilippoToso\Travelport\UProfile;

class RequiredField
{

    /**
     * @var anonymous400 $Name
     */
    protected $Name = null;

    /**
     * @param anonymous400 $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return anonymous400
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous400 $Name
     * @return \FilippoToso\Travelport\UProfile\RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
