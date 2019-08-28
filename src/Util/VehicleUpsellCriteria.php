<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellCriteria
{

    /**
     * @var VehicleUpsellAdd $VehicleUpsellAdd
     */
    protected $VehicleUpsellAdd = null;

    /**
     * @var VehicleUpsellUpdate $VehicleUpsellUpdate
     */
    protected $VehicleUpsellUpdate = null;

    /**
     * @var VehicleUpsellDelete $VehicleUpsellDelete
     */
    protected $VehicleUpsellDelete = null;

    /**
     * @param VehicleUpsellAdd $VehicleUpsellAdd
     * @param VehicleUpsellUpdate $VehicleUpsellUpdate
     * @param VehicleUpsellDelete $VehicleUpsellDelete
     */
    public function __construct($VehicleUpsellAdd = null, $VehicleUpsellUpdate = null, $VehicleUpsellDelete = null)
    {
      $this->VehicleUpsellAdd = $VehicleUpsellAdd;
      $this->VehicleUpsellUpdate = $VehicleUpsellUpdate;
      $this->VehicleUpsellDelete = $VehicleUpsellDelete;
    }

    /**
     * @return VehicleUpsellAdd
     */
    public function getVehicleUpsellAdd()
    {
      return $this->VehicleUpsellAdd;
    }

    /**
     * @param VehicleUpsellAdd $VehicleUpsellAdd
     * @return \FilippoToso\Travelport\Util\VehicleUpsellCriteria
     */
    public function setVehicleUpsellAdd($VehicleUpsellAdd)
    {
      $this->VehicleUpsellAdd = $VehicleUpsellAdd;
      return $this;
    }

    /**
     * @return VehicleUpsellUpdate
     */
    public function getVehicleUpsellUpdate()
    {
      return $this->VehicleUpsellUpdate;
    }

    /**
     * @param VehicleUpsellUpdate $VehicleUpsellUpdate
     * @return \FilippoToso\Travelport\Util\VehicleUpsellCriteria
     */
    public function setVehicleUpsellUpdate($VehicleUpsellUpdate)
    {
      $this->VehicleUpsellUpdate = $VehicleUpsellUpdate;
      return $this;
    }

    /**
     * @return VehicleUpsellDelete
     */
    public function getVehicleUpsellDelete()
    {
      return $this->VehicleUpsellDelete;
    }

    /**
     * @param VehicleUpsellDelete $VehicleUpsellDelete
     * @return \FilippoToso\Travelport\Util\VehicleUpsellCriteria
     */
    public function setVehicleUpsellDelete($VehicleUpsellDelete)
    {
      $this->VehicleUpsellDelete = $VehicleUpsellDelete;
      return $this;
    }

}
