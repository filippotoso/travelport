<?php

namespace FilippoToso\Travelport\GDSQueue;

class BaggageRestriction
{

    /**
     * @var Dimension $Dimension
     */
    protected $Dimension = null;

    /**
     * @var typeUnitOfMeasure[] $MaxWeight
     */
    protected $MaxWeight = null;

    /**
     * @var TextInfo $TextInfo
     */
    protected $TextInfo = null;

    /**
     * @param Dimension $Dimension
     * @param TextInfo $TextInfo
     */
    public function __construct($Dimension = null, $TextInfo = null)
    {
      $this->Dimension = $Dimension;
      $this->TextInfo = $TextInfo;
    }

    /**
     * @return Dimension
     */
    public function getDimension()
    {
      return $this->Dimension;
    }

    /**
     * @param Dimension $Dimension
     * @return \FilippoToso\Travelport\GDSQueue\BaggageRestriction
     */
    public function setDimension($Dimension)
    {
      $this->Dimension = $Dimension;
      return $this;
    }

    /**
     * @return typeUnitOfMeasure[]
     */
    public function getMaxWeight()
    {
      return $this->MaxWeight;
    }

    /**
     * @param typeUnitOfMeasure[] $MaxWeight
     * @return \FilippoToso\Travelport\GDSQueue\BaggageRestriction
     */
    public function setMaxWeight(array $MaxWeight = null)
    {
      $this->MaxWeight = $MaxWeight;
      return $this;
    }

    /**
     * @return TextInfo
     */
    public function getTextInfo()
    {
      return $this->TextInfo;
    }

    /**
     * @param TextInfo $TextInfo
     * @return \FilippoToso\Travelport\GDSQueue\BaggageRestriction
     */
    public function setTextInfo($TextInfo)
    {
      $this->TextInfo = $TextInfo;
      return $this;
    }

}
