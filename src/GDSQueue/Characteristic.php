<?php

namespace FilippoToso\Travelport\GDSQueue;

class Characteristic
{

    /**
     * @var boolean $Smoking
     */
    protected $Smoking = null;

    /**
     * @var typeCoachClassType $Class
     */
    protected $Class = null;

    /**
     * @param boolean $Smoking
     * @param typeCoachClassType $Class
     */
    public function __construct($Smoking = null, $Class = null)
    {
      $this->Smoking = $Smoking;
      $this->Class = $Class;
    }

    /**
     * @return boolean
     */
    public function getSmoking()
    {
      return $this->Smoking;
    }

    /**
     * @param boolean $Smoking
     * @return \FilippoToso\Travelport\GDSQueue\Characteristic
     */
    public function setSmoking($Smoking)
    {
      $this->Smoking = $Smoking;
      return $this;
    }

    /**
     * @return typeCoachClassType
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param typeCoachClassType $Class
     * @return \FilippoToso\Travelport\GDSQueue\Characteristic
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

}
