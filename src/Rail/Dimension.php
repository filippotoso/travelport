<?php

namespace FilippoToso\Travelport\Rail;

class Dimension extends typeUnitOfMeasure
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param float $Value
     * @param string $Unit
     * @param string $type
     */
    public function __construct($Value, $Unit, $type)
    {
      parent::__construct($Value, $Unit);
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FilippoToso\Travelport\Rail\Dimension
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
