<?php

namespace FilippoToso\Travelport\Rail;

class typeGuestChildInformation
{

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @param int $Age
     */
    public function __construct($Age = null)
    {
      $this->Age = $Age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\Rail\typeGuestChildInformation
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
