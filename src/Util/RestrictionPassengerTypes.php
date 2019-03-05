<?php

namespace FilippoToso\Travelport\Util;

class RestrictionPassengerTypes
{

    /**
     * @var string $MaxNbrTravelers
     */
    protected $MaxNbrTravelers = null;

    /**
     * @var string $TotalNbrPTC
     */
    protected $TotalNbrPTC = null;

    /**
     * @param string $MaxNbrTravelers
     * @param string $TotalNbrPTC
     */
    public function __construct($MaxNbrTravelers = null, $TotalNbrPTC = null)
    {
      $this->MaxNbrTravelers = $MaxNbrTravelers;
      $this->TotalNbrPTC = $TotalNbrPTC;
    }

    /**
     * @return string
     */
    public function getMaxNbrTravelers()
    {
      return $this->MaxNbrTravelers;
    }

    /**
     * @param string $MaxNbrTravelers
     * @return \FilippoToso\Travelport\Util\RestrictionPassengerTypes
     */
    public function setMaxNbrTravelers($MaxNbrTravelers)
    {
      $this->MaxNbrTravelers = $MaxNbrTravelers;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalNbrPTC()
    {
      return $this->TotalNbrPTC;
    }

    /**
     * @param string $TotalNbrPTC
     * @return \FilippoToso\Travelport\Util\RestrictionPassengerTypes
     */
    public function setTotalNbrPTC($TotalNbrPTC)
    {
      $this->TotalNbrPTC = $TotalNbrPTC;
      return $this;
    }

}
