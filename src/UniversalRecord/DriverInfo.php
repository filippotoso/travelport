<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DriverInfo
{

    /**
     * @var anonymous1152 $Age
     */
    protected $Age = null;

    /**
     * @param anonymous1152 $Age
     */
    public function __construct($Age)
    {
      $this->Age = $Age;
    }

    /**
     * @return anonymous1152
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param anonymous1152 $Age
     * @return \FilippoToso\Travelport\UniversalRecord\DriverInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
