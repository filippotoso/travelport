<?php

namespace FilippoToso\Travelport\Util;

class InitialAsynchResult
{

    /**
     * @var int $MaxWait
     */
    protected $MaxWait = null;

    /**
     * @param int $MaxWait
     */
    public function __construct($MaxWait = null)
    {
      $this->MaxWait = $MaxWait;
    }

    /**
     * @return int
     */
    public function getMaxWait()
    {
      return $this->MaxWait;
    }

    /**
     * @param int $MaxWait
     * @return \FilippoToso\Travelport\Util\InitialAsynchResult
     */
    public function setMaxWait($MaxWait)
    {
      $this->MaxWait = $MaxWait;
      return $this;
    }

}
