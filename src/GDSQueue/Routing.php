<?php

namespace FilippoToso\Travelport\GDSQueue;

class Routing
{

    /**
     * @var DirectionInfo[] $DirectionInfo
     */
    protected $DirectionInfo = null;

    /**
     * @var boolean $RoutingConstructedInd
     */
    protected $RoutingConstructedInd = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $RoutingRestriction
     */
    protected $RoutingRestriction = null;

    /**
     * @param boolean $RoutingConstructedInd
     * @param string $Number
     * @param string $RoutingRestriction
     */
    public function __construct($RoutingConstructedInd = null, $Number = null, $RoutingRestriction = null)
    {
      $this->RoutingConstructedInd = $RoutingConstructedInd;
      $this->Number = $Number;
      $this->RoutingRestriction = $RoutingRestriction;
    }

    /**
     * @return DirectionInfo[]
     */
    public function getDirectionInfo()
    {
      return $this->DirectionInfo;
    }

    /**
     * @param DirectionInfo[] $DirectionInfo
     * @return \FilippoToso\Travelport\GDSQueue\Routing
     */
    public function setDirectionInfo(array $DirectionInfo = null)
    {
      $this->DirectionInfo = $DirectionInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRoutingConstructedInd()
    {
      return $this->RoutingConstructedInd;
    }

    /**
     * @param boolean $RoutingConstructedInd
     * @return \FilippoToso\Travelport\GDSQueue\Routing
     */
    public function setRoutingConstructedInd($RoutingConstructedInd)
    {
      $this->RoutingConstructedInd = $RoutingConstructedInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\GDSQueue\Routing
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingRestriction()
    {
      return $this->RoutingRestriction;
    }

    /**
     * @param string $RoutingRestriction
     * @return \FilippoToso\Travelport\GDSQueue\Routing
     */
    public function setRoutingRestriction($RoutingRestriction)
    {
      $this->RoutingRestriction = $RoutingRestriction;
      return $this;
    }

}
