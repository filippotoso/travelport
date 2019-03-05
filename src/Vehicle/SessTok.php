<?php

namespace FilippoToso\Travelport\Vehicle;

class SessTok
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @param string $id
     */
    public function __construct($id = null)
    {
      $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \FilippoToso\Travelport\Vehicle\SessTok
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
