<?php

namespace FilippoToso\Travelport\Hotel;

class Characteristic
{

    /**
     * @var anonymous146 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous147 $SeatDescription
     */
    protected $SeatDescription = null;

    /**
     * @var anonymous148 $SeatValue
     */
    protected $SeatValue = null;

    /**
     * @var anonymous149 $SeatValueDescription
     */
    protected $SeatValueDescription = null;

    /**
     * @param anonymous146 $SeatType
     * @param anonymous147 $SeatDescription
     * @param anonymous148 $SeatValue
     * @param anonymous149 $SeatValueDescription
     */
    public function __construct($SeatType = null, $SeatDescription = null, $SeatValue = null, $SeatValueDescription = null)
    {
      $this->SeatType = $SeatType;
      $this->SeatDescription = $SeatDescription;
      $this->SeatValue = $SeatValue;
      $this->SeatValueDescription = $SeatValueDescription;
    }

    /**
     * @return anonymous146
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous146 $SeatType
     * @return \FilippoToso\Travelport\Hotel\Characteristic
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous147
     */
    public function getSeatDescription()
    {
      return $this->SeatDescription;
    }

    /**
     * @param anonymous147 $SeatDescription
     * @return \FilippoToso\Travelport\Hotel\Characteristic
     */
    public function setSeatDescription($SeatDescription)
    {
      $this->SeatDescription = $SeatDescription;
      return $this;
    }

    /**
     * @return anonymous148
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous148 $SeatValue
     * @return \FilippoToso\Travelport\Hotel\Characteristic
     */
    public function setSeatValue($SeatValue)
    {
      $this->SeatValue = $SeatValue;
      return $this;
    }

    /**
     * @return anonymous149
     */
    public function getSeatValueDescription()
    {
      return $this->SeatValueDescription;
    }

    /**
     * @param anonymous149 $SeatValueDescription
     * @return \FilippoToso\Travelport\Hotel\Characteristic
     */
    public function setSeatValueDescription($SeatValueDescription)
    {
      $this->SeatValueDescription = $SeatValueDescription;
      return $this;
    }

}
