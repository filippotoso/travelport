<?php

namespace FilippoToso\Travelport\Util;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous970 $Direction
     */
    protected $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous970 $Direction
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
     * @return \FilippoToso\Travelport\Util\DirectionInfo
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous970
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous970 $Direction
     * @return \FilippoToso\Travelport\Util\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
