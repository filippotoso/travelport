<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous973 $Direction
     */
    protected $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous973 $Direction
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
     * @return anonymous973
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous973 $Direction
     * @return \FilippoToso\Travelport\UniversalRecord\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
