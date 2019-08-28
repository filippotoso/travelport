<?php

namespace FilippoToso\Travelport\GDSQueue;

class CarrierList
{

    /**
     * @var CarrierCode $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var boolean $IncludeCarrier
     */
    protected $IncludeCarrier = null;

    /**
     * @param CarrierCode $CarrierCode
     * @param boolean $IncludeCarrier
     */
    public function __construct($CarrierCode = null, $IncludeCarrier = null)
    {
      $this->CarrierCode = $CarrierCode;
      $this->IncludeCarrier = $IncludeCarrier;
    }

    /**
     * @return CarrierCode
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param CarrierCode $CarrierCode
     * @return \FilippoToso\Travelport\GDSQueue\CarrierList
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCarrier()
    {
      return $this->IncludeCarrier;
    }

    /**
     * @param boolean $IncludeCarrier
     * @return \FilippoToso\Travelport\GDSQueue\CarrierList
     */
    public function setIncludeCarrier($IncludeCarrier)
    {
      $this->IncludeCarrier = $IncludeCarrier;
      return $this;
    }

}
