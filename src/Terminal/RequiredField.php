<?php

namespace FilippoToso\Travelport\Terminal;

class RequiredField
{

    /**
     * @var anonymous397 $Name
     */
    protected $Name = null;

    /**
     * @param anonymous397 $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return anonymous397
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous397 $Name
     * @return \FilippoToso\Travelport\Terminal\RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
