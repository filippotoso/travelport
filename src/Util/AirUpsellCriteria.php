<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellCriteria
{

    /**
     * @var AirUpsellAdd $AirUpsellAdd
     */
    protected $AirUpsellAdd = null;

    /**
     * @var AirUpsellUpdate $AirUpsellUpdate
     */
    protected $AirUpsellUpdate = null;

    /**
     * @var AirUpsellDelete $AirUpsellDelete
     */
    protected $AirUpsellDelete = null;

    /**
     * @param AirUpsellAdd $AirUpsellAdd
     * @param AirUpsellUpdate $AirUpsellUpdate
     * @param AirUpsellDelete $AirUpsellDelete
     */
    public function __construct($AirUpsellAdd = null, $AirUpsellUpdate = null, $AirUpsellDelete = null)
    {
      $this->AirUpsellAdd = $AirUpsellAdd;
      $this->AirUpsellUpdate = $AirUpsellUpdate;
      $this->AirUpsellDelete = $AirUpsellDelete;
    }

    /**
     * @return AirUpsellAdd
     */
    public function getAirUpsellAdd()
    {
      return $this->AirUpsellAdd;
    }

    /**
     * @param AirUpsellAdd $AirUpsellAdd
     * @return \FilippoToso\Travelport\Util\AirUpsellCriteria
     */
    public function setAirUpsellAdd($AirUpsellAdd)
    {
      $this->AirUpsellAdd = $AirUpsellAdd;
      return $this;
    }

    /**
     * @return AirUpsellUpdate
     */
    public function getAirUpsellUpdate()
    {
      return $this->AirUpsellUpdate;
    }

    /**
     * @param AirUpsellUpdate $AirUpsellUpdate
     * @return \FilippoToso\Travelport\Util\AirUpsellCriteria
     */
    public function setAirUpsellUpdate($AirUpsellUpdate)
    {
      $this->AirUpsellUpdate = $AirUpsellUpdate;
      return $this;
    }

    /**
     * @return AirUpsellDelete
     */
    public function getAirUpsellDelete()
    {
      return $this->AirUpsellDelete;
    }

    /**
     * @param AirUpsellDelete $AirUpsellDelete
     * @return \FilippoToso\Travelport\Util\AirUpsellCriteria
     */
    public function setAirUpsellDelete($AirUpsellDelete)
    {
      $this->AirUpsellDelete = $AirUpsellDelete;
      return $this;
    }

}
