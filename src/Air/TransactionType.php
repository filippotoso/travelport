<?php

namespace FilippoToso\Travelport\Air;

class TransactionType extends typeTransactionsAllowed
{

    /**
     * @var Air $Air
     */
    protected $Air = null;

    /**
     * @var typeTransactionsAllowed $Hotel
     */
    protected $Hotel = null;

    /**
     * @var typeTransactionsAllowed $Rail
     */
    protected $Rail = null;

    /**
     * @var typeTransactionsAllowed $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @var typeBookingTransactionsAllowed $Passive
     */
    protected $Passive = null;

    /**
     * @var typeBookingTransactionsAllowed $BackgroundPassive
     */
    protected $BackgroundPassive = null;

    /**
     * @param boolean $BookingEnabled
     * @param boolean $ShoppingEnabled
     * @param boolean $PricingEnabled
     */
    public function __construct($BookingEnabled = null, $ShoppingEnabled = null, $PricingEnabled = null)
    {
      parent::__construct($BookingEnabled, $ShoppingEnabled, $PricingEnabled);
    }

    /**
     * @return Air
     */
    public function getAir()
    {
      return $this->Air;
    }

    /**
     * @param Air $Air
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setAir($Air)
    {
      $this->Air = $Air;
      return $this;
    }

    /**
     * @return typeTransactionsAllowed
     */
    public function getHotel()
    {
      return $this->Hotel;
    }

    /**
     * @param typeTransactionsAllowed $Hotel
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setHotel($Hotel)
    {
      $this->Hotel = $Hotel;
      return $this;
    }

    /**
     * @return typeTransactionsAllowed
     */
    public function getRail()
    {
      return $this->Rail;
    }

    /**
     * @param typeTransactionsAllowed $Rail
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setRail($Rail)
    {
      $this->Rail = $Rail;
      return $this;
    }

    /**
     * @return typeTransactionsAllowed
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param typeTransactionsAllowed $Vehicle
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return typeBookingTransactionsAllowed
     */
    public function getPassive()
    {
      return $this->Passive;
    }

    /**
     * @param typeBookingTransactionsAllowed $Passive
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setPassive($Passive)
    {
      $this->Passive = $Passive;
      return $this;
    }

    /**
     * @return typeBookingTransactionsAllowed
     */
    public function getBackgroundPassive()
    {
      return $this->BackgroundPassive;
    }

    /**
     * @param typeBookingTransactionsAllowed $BackgroundPassive
     * @return \FilippoToso\Travelport\Air\TransactionType
     */
    public function setBackgroundPassive($BackgroundPassive)
    {
      $this->BackgroundPassive = $BackgroundPassive;
      return $this;
    }

}
