<?php

namespace FilippoToso\Travelport\UProfile;

class Endorsement
{

    /**
     * @var typeEndorsement $Value
     */
    protected $Value = null;

    /**
     * @param typeEndorsement $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeEndorsement
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeEndorsement $Value
     * @return \FilippoToso\Travelport\UProfile\Endorsement
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
