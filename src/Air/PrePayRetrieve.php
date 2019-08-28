<?php

namespace FilippoToso\Travelport\Air;

class PrePayRetrieve
{

    /**
     * @var typeCardNumber $Id
     */
    protected $Id = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param typeCardNumber $Id
     * @param string $Type
     */
    public function __construct($Id = null, $Type = null)
    {
      $this->Id = $Id;
      $this->Type = $Type;
    }

    /**
     * @return typeCardNumber
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param typeCardNumber $Id
     * @return \FilippoToso\Travelport\Air\PrePayRetrieve
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\PrePayRetrieve
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
