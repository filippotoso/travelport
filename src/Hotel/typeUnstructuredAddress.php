<?php

namespace FilippoToso\Travelport\Hotel;

class typeUnstructuredAddress
{

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    /**
     * @param Address[] $Address
     */
    public function __construct(array $Address = null)
    {
      $this->Address = $Address;
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return \FilippoToso\Travelport\Hotel\typeUnstructuredAddress
     */
    public function setAddress(array $Address)
    {
      $this->Address = $Address;
      return $this;
    }

}
