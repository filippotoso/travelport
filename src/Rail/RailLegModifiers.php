<?php

namespace FilippoToso\Travelport\Rail;

class RailLegModifiers
{

    /**
     * @var PermittedConnectionPoints $PermittedConnectionPoints
     */
    protected $PermittedConnectionPoints = null;

    /**
     * @var ProhibitedConnectionPoints $ProhibitedConnectionPoints
     */
    protected $ProhibitedConnectionPoints = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @param string $Class
     */
    public function __construct($Class = null)
    {
      $this->Class = $Class;
    }

    /**
     * @return PermittedConnectionPoints
     */
    public function getPermittedConnectionPoints()
    {
      return $this->PermittedConnectionPoints;
    }

    /**
     * @param PermittedConnectionPoints $PermittedConnectionPoints
     * @return \FilippoToso\Travelport\Rail\RailLegModifiers
     */
    public function setPermittedConnectionPoints($PermittedConnectionPoints)
    {
      $this->PermittedConnectionPoints = $PermittedConnectionPoints;
      return $this;
    }

    /**
     * @return ProhibitedConnectionPoints
     */
    public function getProhibitedConnectionPoints()
    {
      return $this->ProhibitedConnectionPoints;
    }

    /**
     * @param ProhibitedConnectionPoints $ProhibitedConnectionPoints
     * @return \FilippoToso\Travelport\Rail\RailLegModifiers
     */
    public function setProhibitedConnectionPoints($ProhibitedConnectionPoints)
    {
      $this->ProhibitedConnectionPoints = $ProhibitedConnectionPoints;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param string $Class
     * @return \FilippoToso\Travelport\Rail\RailLegModifiers
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

}
