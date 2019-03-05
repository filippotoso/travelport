<?php

namespace FilippoToso\Travelport\Air;

class FareTokenInfo
{

    /**
     * @var string $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @var string $HostTokenRef
     */
    protected $HostTokenRef = null;

    /**
     * @param string $FareInfoRef
     * @param string $HostTokenRef
     */
    public function __construct($FareInfoRef = null, $HostTokenRef = null)
    {
      $this->FareInfoRef = $FareInfoRef;
      $this->HostTokenRef = $HostTokenRef;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Air\FareTokenInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param string $HostTokenRef
     * @return \FilippoToso\Travelport\Air\FareTokenInfo
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

}
