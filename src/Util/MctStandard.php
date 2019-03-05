<?php

namespace FilippoToso\Travelport\Util;

class MctStandard
{

    /**
     * @var typeMctConnection $Type
     */
    protected $Type = null;

    /**
     * @var int $Time
     */
    protected $Time = null;

    /**
     * @param typeMctConnection $Type
     * @param int $Time
     */
    public function __construct($Type = null, $Time = null)
    {
      $this->Type = $Type;
      $this->Time = $Time;
    }

    /**
     * @return typeMctConnection
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMctConnection $Type
     * @return \FilippoToso\Travelport\Util\MctStandard
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param int $Time
     * @return \FilippoToso\Travelport\Util\MctStandard
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
