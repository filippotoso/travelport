<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous975 $Direction
     */
    protected $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous975 $Direction
     */
    public function __construct($LocationCode = null, $Direction = null)
    {
      $this->LocationCode = $LocationCode;
      $this->Direction = $Direction;
    }

    /**
     * @return typeIATACode
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param typeIATACode $LocationCode
     * @return \FilippoToso\Travelport\UniversalRecord\DirectionInfo
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous975
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous975 $Direction
     * @return \FilippoToso\Travelport\UniversalRecord\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
