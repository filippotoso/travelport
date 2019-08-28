<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellCriteria
{

    /**
     * @var HotelUpsellAdd $HotelUpsellAdd
     */
    protected $HotelUpsellAdd = null;

    /**
     * @var HotelUpsellUpdate $HotelUpsellUpdate
     */
    protected $HotelUpsellUpdate = null;

    /**
     * @var HotelUpsellDelete $HotelUpsellDelete
     */
    protected $HotelUpsellDelete = null;

    /**
     * @param HotelUpsellAdd $HotelUpsellAdd
     * @param HotelUpsellUpdate $HotelUpsellUpdate
     * @param HotelUpsellDelete $HotelUpsellDelete
     */
    public function __construct($HotelUpsellAdd = null, $HotelUpsellUpdate = null, $HotelUpsellDelete = null)
    {
      $this->HotelUpsellAdd = $HotelUpsellAdd;
      $this->HotelUpsellUpdate = $HotelUpsellUpdate;
      $this->HotelUpsellDelete = $HotelUpsellDelete;
    }

    /**
     * @return HotelUpsellAdd
     */
    public function getHotelUpsellAdd()
    {
      return $this->HotelUpsellAdd;
    }

    /**
     * @param HotelUpsellAdd $HotelUpsellAdd
     * @return \FilippoToso\Travelport\Util\HotelUpsellCriteria
     */
    public function setHotelUpsellAdd($HotelUpsellAdd)
    {
      $this->HotelUpsellAdd = $HotelUpsellAdd;
      return $this;
    }

    /**
     * @return HotelUpsellUpdate
     */
    public function getHotelUpsellUpdate()
    {
      return $this->HotelUpsellUpdate;
    }

    /**
     * @param HotelUpsellUpdate $HotelUpsellUpdate
     * @return \FilippoToso\Travelport\Util\HotelUpsellCriteria
     */
    public function setHotelUpsellUpdate($HotelUpsellUpdate)
    {
      $this->HotelUpsellUpdate = $HotelUpsellUpdate;
      return $this;
    }

    /**
     * @return HotelUpsellDelete
     */
    public function getHotelUpsellDelete()
    {
      return $this->HotelUpsellDelete;
    }

    /**
     * @param HotelUpsellDelete $HotelUpsellDelete
     * @return \FilippoToso\Travelport\Util\HotelUpsellCriteria
     */
    public function setHotelUpsellDelete($HotelUpsellDelete)
    {
      $this->HotelUpsellDelete = $HotelUpsellDelete;
      return $this;
    }

}
