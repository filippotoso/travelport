<?php

namespace FilippoToso\Travelport\GDSQueue;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous1049 $Direction
     */
    protected $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous1049 $Direction
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
     * @return \FilippoToso\Travelport\GDSQueue\DirectionInfo
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous1049
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous1049 $Direction
     * @return \FilippoToso\Travelport\GDSQueue\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
