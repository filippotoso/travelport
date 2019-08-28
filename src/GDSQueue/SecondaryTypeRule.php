<?php

namespace FilippoToso\Travelport\GDSQueue;

class SecondaryTypeRule
{

    /**
     * @var OptionalServiceApplicationLimitType[] $ApplicationLimit
     */
    protected $ApplicationLimit = null;

    /**
     * @var typeRef $SecondaryType
     */
    protected $SecondaryType = null;

    /**
     * @param typeRef $SecondaryType
     */
    public function __construct($SecondaryType = null)
    {
      $this->SecondaryType = $SecondaryType;
    }

    /**
     * @return OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit()
    {
      return $this->ApplicationLimit;
    }

    /**
     * @param OptionalServiceApplicationLimitType[] $ApplicationLimit
     * @return \FilippoToso\Travelport\GDSQueue\SecondaryTypeRule
     */
    public function setApplicationLimit(array $ApplicationLimit = null)
    {
      $this->ApplicationLimit = $ApplicationLimit;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSecondaryType()
    {
      return $this->SecondaryType;
    }

    /**
     * @param typeRef $SecondaryType
     * @return \FilippoToso\Travelport\GDSQueue\SecondaryTypeRule
     */
    public function setSecondaryType($SecondaryType)
    {
      $this->SecondaryType = $SecondaryType;
      return $this;
    }

}
