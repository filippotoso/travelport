<?php

namespace FilippoToso\Travelport\Air;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous1041 $Direction
     */
    protected $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous1041 $Direction
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
     * @return \FilippoToso\Travelport\Air\DirectionInfo
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous1041
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous1041 $Direction
     * @return \FilippoToso\Travelport\Air\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
