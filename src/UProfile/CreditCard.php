<?php

namespace FilippoToso\Travelport\UProfile;

class CreditCard
{

    /**
     * @var boolean $ExtractIndicator
     */
    protected $ExtractIndicator = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @param boolean $ExtractIndicator
     * @param boolean $Active
     */
    public function __construct($ExtractIndicator = null, $Active = null)
    {
      $this->ExtractIndicator = $ExtractIndicator;
      $this->Active = $Active;
    }

    /**
     * @return boolean
     */
    public function getExtractIndicator()
    {
      return $this->ExtractIndicator;
    }

    /**
     * @param boolean $ExtractIndicator
     * @return \FilippoToso\Travelport\UProfile\CreditCard
     */
    public function setExtractIndicator($ExtractIndicator)
    {
      $this->ExtractIndicator = $ExtractIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \FilippoToso\Travelport\UProfile\CreditCard
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
