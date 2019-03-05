<?php

namespace FilippoToso\Travelport\Rail;

class RailSearchModifiers
{

    /**
     * @var PreferredSuppliers $PreferredSuppliers
     */
    protected $PreferredSuppliers = null;

    /**
     * @var anonymous1320 $MaxChanges
     */
    protected $MaxChanges = null;

    /**
     * @var typeRailDirection $Direction
     */
    protected $Direction = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var int $MaxSolutions
     */
    protected $MaxSolutions = null;

    /**
     * @param anonymous1320 $MaxChanges
     * @param typeRailDirection $Direction
     * @param string $Class
     * @param int $MaxSolutions
     */
    public function __construct($MaxChanges = null, $Direction = null, $Class = null, $MaxSolutions = null)
    {
      $this->MaxChanges = $MaxChanges;
      $this->Direction = $Direction;
      $this->Class = $Class;
      $this->MaxSolutions = $MaxSolutions;
    }

    /**
     * @return PreferredSuppliers
     */
    public function getPreferredSuppliers()
    {
      return $this->PreferredSuppliers;
    }

    /**
     * @param PreferredSuppliers $PreferredSuppliers
     * @return \FilippoToso\Travelport\Rail\RailSearchModifiers
     */
    public function setPreferredSuppliers($PreferredSuppliers)
    {
      $this->PreferredSuppliers = $PreferredSuppliers;
      return $this;
    }

    /**
     * @return anonymous1320
     */
    public function getMaxChanges()
    {
      return $this->MaxChanges;
    }

    /**
     * @param anonymous1320 $MaxChanges
     * @return \FilippoToso\Travelport\Rail\RailSearchModifiers
     */
    public function setMaxChanges($MaxChanges)
    {
      $this->MaxChanges = $MaxChanges;
      return $this;
    }

    /**
     * @return typeRailDirection
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param typeRailDirection $Direction
     * @return \FilippoToso\Travelport\Rail\RailSearchModifiers
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
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
     * @return \FilippoToso\Travelport\Rail\RailSearchModifiers
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxSolutions()
    {
      return $this->MaxSolutions;
    }

    /**
     * @param int $MaxSolutions
     * @return \FilippoToso\Travelport\Rail\RailSearchModifiers
     */
    public function setMaxSolutions($MaxSolutions)
    {
      $this->MaxSolutions = $MaxSolutions;
      return $this;
    }

}
