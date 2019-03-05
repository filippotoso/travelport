<?php

namespace FilippoToso\Travelport\Air;

class RequiredField
{

    /**
     * @var anonymous412 $Name
     */
    protected $Name = null;

    /**
     * @param anonymous412 $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return anonymous412
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous412 $Name
     * @return \FilippoToso\Travelport\Air\RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
