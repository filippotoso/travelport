<?php

namespace FilippoToso\Travelport\UniversalRecord;

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
     * @return \FilippoToso\Travelport\UniversalRecord\SessTok
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
