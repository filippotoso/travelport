<?php

namespace FilippoToso\Travelport\Vehicle;

class DriverInfo
{

    /**
     * @var anonymous615 $Age
     */
    protected $Age = null;

    /**
     * @param anonymous615 $Age
     */
    public function __construct($Age = null)
    {
      $this->Age = $Age;
    }

    /**
     * @return anonymous615
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param anonymous615 $Age
     * @return \FilippoToso\Travelport\Vehicle\DriverInfo
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
