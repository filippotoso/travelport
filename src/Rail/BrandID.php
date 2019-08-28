<?php

namespace FilippoToso\Travelport\Rail;

class BrandID
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @param string $Id
     */
    public function __construct($Id = null)
    {
      $this->Id = $Id;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \FilippoToso\Travelport\Rail\BrandID
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
