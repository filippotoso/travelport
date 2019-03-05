<?php

namespace FilippoToso\Travelport\Rail;

class Aggregator
{

    /**
     * @var typeThirdPartySupplier $Name
     */
    protected $Name = null;

    /**
     * @param typeThirdPartySupplier $Name
     */
    public function __construct($Name = null)
    {
      $this->Name = $Name;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeThirdPartySupplier $Name
     * @return \FilippoToso\Travelport\Rail\Aggregator
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
