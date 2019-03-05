<?php

namespace FilippoToso\Travelport\Vehicle;

class Characteristic
{

    /**
     * @var anonymous149 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous150 $SeatDescription
     */
    protected $SeatDescription = null;

    /**
     * @var anonymous151 $SeatValue
     */
    protected $SeatValue = null;

    /**
     * @var anonymous152 $SeatValueDescription
     */
    protected $SeatValueDescription = null;

    /**
     * @param anonymous149 $SeatType
     * @param anonymous150 $SeatDescription
     * @param anonymous151 $SeatValue
     * @param anonymous152 $SeatValueDescription
     */
    public function __construct($SeatType = null, $SeatDescription = null, $SeatValue = null, $SeatValueDescription = null)
    {
      $this->SeatType = $SeatType;
      $this->SeatDescription = $SeatDescription;
      $this->SeatValue = $SeatValue;
      $this->SeatValueDescription = $SeatValueDescription;
    }

    /**
     * @return anonymous149
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous149 $SeatType
     * @return \FilippoToso\Travelport\Vehicle\Characteristic
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous150
     */
    public function getSeatDescription()
    {
      return $this->SeatDescription;
    }

    /**
     * @param anonymous150 $SeatDescription
     * @return \FilippoToso\Travelport\Vehicle\Characteristic
     */
    public function setSeatDescription($SeatDescription)
    {
      $this->SeatDescription = $SeatDescription;
      return $this;
    }

    /**
     * @return anonymous151
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous151 $SeatValue
     * @return \FilippoToso\Travelport\Vehicle\Characteristic
     */
    public function setSeatValue($SeatValue)
    {
      $this->SeatValue = $SeatValue;
      return $this;
    }

    /**
     * @return anonymous152
     */
    public function getSeatValueDescription()
    {
      return $this->SeatValueDescription;
    }

    /**
     * @param anonymous152 $SeatValueDescription
     * @return \FilippoToso\Travelport\Vehicle\Characteristic
     */
    public function setSeatValueDescription($SeatValueDescription)
    {
      $this->SeatValueDescription = $SeatValueDescription;
      return $this;
    }

}
