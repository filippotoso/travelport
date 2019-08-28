<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehiclePolicy
{

    /**
     * @var VehicleDisclaimer $VehicleDisclaimer
     */
    protected $VehicleDisclaimer = null;

    /**
     * @var VehicleDetail $VehicleDetail
     */
    protected $VehicleDetail = null;

    /**
     * @param VehicleDisclaimer $VehicleDisclaimer
     * @param VehicleDetail $VehicleDetail
     */
    public function __construct($VehicleDisclaimer = null, $VehicleDetail = null)
    {
      $this->VehicleDisclaimer = $VehicleDisclaimer;
      $this->VehicleDetail = $VehicleDetail;
    }

    /**
     * @return VehicleDisclaimer
     */
    public function getVehicleDisclaimer()
    {
      return $this->VehicleDisclaimer;
    }

    /**
     * @param VehicleDisclaimer $VehicleDisclaimer
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePolicy
     */
    public function setVehicleDisclaimer($VehicleDisclaimer)
    {
      $this->VehicleDisclaimer = $VehicleDisclaimer;
      return $this;
    }

    /**
     * @return VehicleDetail
     */
    public function getVehicleDetail()
    {
      return $this->VehicleDetail;
    }

    /**
     * @param VehicleDetail $VehicleDetail
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePolicy
     */
    public function setVehicleDetail($VehicleDetail)
    {
      $this->VehicleDetail = $VehicleDetail;
      return $this;
    }

}
