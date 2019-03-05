<?php

namespace FilippoToso\Travelport\GDSQueue;

class UniversalModifyCmd
{

    /**
     * @var VehicleAdd $VehicleAdd
     */
    protected $VehicleAdd = null;

    /**
     * @var VehicleDelete $VehicleDelete
     */
    protected $VehicleDelete = null;

    /**
     * @var VehicleUpdate $VehicleUpdate
     */
    protected $VehicleUpdate = null;

    /**
     * @var AirAdd $AirAdd
     */
    protected $AirAdd = null;

    /**
     * @var AirDelete $AirDelete
     */
    protected $AirDelete = null;

    /**
     * @var AirUpdate $AirUpdate
     */
    protected $AirUpdate = null;

    /**
     * @var UniversalAdd $UniversalAdd
     */
    protected $UniversalAdd = null;

    /**
     * @var UniversalDelete $UniversalDelete
     */
    protected $UniversalDelete = null;

    /**
     * @var UniversalUpdate $UniversalUpdate
     */
    protected $UniversalUpdate = null;

    /**
     * @var HotelAdd $HotelAdd
     */
    protected $HotelAdd = null;

    /**
     * @var HotelUpdate $HotelUpdate
     */
    protected $HotelUpdate = null;

    /**
     * @var HotelDelete $HotelDelete
     */
    protected $HotelDelete = null;

    /**
     * @var PassiveAdd $PassiveAdd
     */
    protected $PassiveAdd = null;

    /**
     * @var PassiveDelete $PassiveDelete
     */
    protected $PassiveDelete = null;

    /**
     * @var RailUpdate $RailUpdate
     */
    protected $RailUpdate = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param VehicleAdd $VehicleAdd
     * @param VehicleDelete $VehicleDelete
     * @param VehicleUpdate $VehicleUpdate
     * @param AirAdd $AirAdd
     * @param AirDelete $AirDelete
     * @param AirUpdate $AirUpdate
     * @param UniversalAdd $UniversalAdd
     * @param UniversalDelete $UniversalDelete
     * @param UniversalUpdate $UniversalUpdate
     * @param HotelAdd $HotelAdd
     * @param HotelUpdate $HotelUpdate
     * @param HotelDelete $HotelDelete
     * @param PassiveAdd $PassiveAdd
     * @param PassiveDelete $PassiveDelete
     * @param RailUpdate $RailUpdate
     * @param typeRef $Key
     */
    public function __construct($VehicleAdd = null, $VehicleDelete = null, $VehicleUpdate = null, $AirAdd = null, $AirDelete = null, $AirUpdate = null, $UniversalAdd = null, $UniversalDelete = null, $UniversalUpdate = null, $HotelAdd = null, $HotelUpdate = null, $HotelDelete = null, $PassiveAdd = null, $PassiveDelete = null, $RailUpdate = null, $Key = null)
    {
      $this->VehicleAdd = $VehicleAdd;
      $this->VehicleDelete = $VehicleDelete;
      $this->VehicleUpdate = $VehicleUpdate;
      $this->AirAdd = $AirAdd;
      $this->AirDelete = $AirDelete;
      $this->AirUpdate = $AirUpdate;
      $this->UniversalAdd = $UniversalAdd;
      $this->UniversalDelete = $UniversalDelete;
      $this->UniversalUpdate = $UniversalUpdate;
      $this->HotelAdd = $HotelAdd;
      $this->HotelUpdate = $HotelUpdate;
      $this->HotelDelete = $HotelDelete;
      $this->PassiveAdd = $PassiveAdd;
      $this->PassiveDelete = $PassiveDelete;
      $this->RailUpdate = $RailUpdate;
      $this->Key = $Key;
    }

    /**
     * @return VehicleAdd
     */
    public function getVehicleAdd()
    {
      return $this->VehicleAdd;
    }

    /**
     * @param VehicleAdd $VehicleAdd
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setVehicleAdd($VehicleAdd)
    {
      $this->VehicleAdd = $VehicleAdd;
      return $this;
    }

    /**
     * @return VehicleDelete
     */
    public function getVehicleDelete()
    {
      return $this->VehicleDelete;
    }

    /**
     * @param VehicleDelete $VehicleDelete
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setVehicleDelete($VehicleDelete)
    {
      $this->VehicleDelete = $VehicleDelete;
      return $this;
    }

    /**
     * @return VehicleUpdate
     */
    public function getVehicleUpdate()
    {
      return $this->VehicleUpdate;
    }

    /**
     * @param VehicleUpdate $VehicleUpdate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setVehicleUpdate($VehicleUpdate)
    {
      $this->VehicleUpdate = $VehicleUpdate;
      return $this;
    }

    /**
     * @return AirAdd
     */
    public function getAirAdd()
    {
      return $this->AirAdd;
    }

    /**
     * @param AirAdd $AirAdd
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setAirAdd($AirAdd)
    {
      $this->AirAdd = $AirAdd;
      return $this;
    }

    /**
     * @return AirDelete
     */
    public function getAirDelete()
    {
      return $this->AirDelete;
    }

    /**
     * @param AirDelete $AirDelete
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setAirDelete($AirDelete)
    {
      $this->AirDelete = $AirDelete;
      return $this;
    }

    /**
     * @return AirUpdate
     */
    public function getAirUpdate()
    {
      return $this->AirUpdate;
    }

    /**
     * @param AirUpdate $AirUpdate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setAirUpdate($AirUpdate)
    {
      $this->AirUpdate = $AirUpdate;
      return $this;
    }

    /**
     * @return UniversalAdd
     */
    public function getUniversalAdd()
    {
      return $this->UniversalAdd;
    }

    /**
     * @param UniversalAdd $UniversalAdd
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setUniversalAdd($UniversalAdd)
    {
      $this->UniversalAdd = $UniversalAdd;
      return $this;
    }

    /**
     * @return UniversalDelete
     */
    public function getUniversalDelete()
    {
      return $this->UniversalDelete;
    }

    /**
     * @param UniversalDelete $UniversalDelete
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setUniversalDelete($UniversalDelete)
    {
      $this->UniversalDelete = $UniversalDelete;
      return $this;
    }

    /**
     * @return UniversalUpdate
     */
    public function getUniversalUpdate()
    {
      return $this->UniversalUpdate;
    }

    /**
     * @param UniversalUpdate $UniversalUpdate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setUniversalUpdate($UniversalUpdate)
    {
      $this->UniversalUpdate = $UniversalUpdate;
      return $this;
    }

    /**
     * @return HotelAdd
     */
    public function getHotelAdd()
    {
      return $this->HotelAdd;
    }

    /**
     * @param HotelAdd $HotelAdd
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setHotelAdd($HotelAdd)
    {
      $this->HotelAdd = $HotelAdd;
      return $this;
    }

    /**
     * @return HotelUpdate
     */
    public function getHotelUpdate()
    {
      return $this->HotelUpdate;
    }

    /**
     * @param HotelUpdate $HotelUpdate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setHotelUpdate($HotelUpdate)
    {
      $this->HotelUpdate = $HotelUpdate;
      return $this;
    }

    /**
     * @return HotelDelete
     */
    public function getHotelDelete()
    {
      return $this->HotelDelete;
    }

    /**
     * @param HotelDelete $HotelDelete
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setHotelDelete($HotelDelete)
    {
      $this->HotelDelete = $HotelDelete;
      return $this;
    }

    /**
     * @return PassiveAdd
     */
    public function getPassiveAdd()
    {
      return $this->PassiveAdd;
    }

    /**
     * @param PassiveAdd $PassiveAdd
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setPassiveAdd($PassiveAdd)
    {
      $this->PassiveAdd = $PassiveAdd;
      return $this;
    }

    /**
     * @return PassiveDelete
     */
    public function getPassiveDelete()
    {
      return $this->PassiveDelete;
    }

    /**
     * @param PassiveDelete $PassiveDelete
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setPassiveDelete($PassiveDelete)
    {
      $this->PassiveDelete = $PassiveDelete;
      return $this;
    }

    /**
     * @return RailUpdate
     */
    public function getRailUpdate()
    {
      return $this->RailUpdate;
    }

    /**
     * @param RailUpdate $RailUpdate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setRailUpdate($RailUpdate)
    {
      $this->RailUpdate = $RailUpdate;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCmd
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
