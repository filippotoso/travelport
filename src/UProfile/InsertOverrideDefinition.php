<?php

namespace FilippoToso\Travelport\UProfile;

class InsertOverrideDefinition
{

    /**
     * @var OverrideDefinition $OverrideDefinition
     */
    protected $OverrideDefinition = null;

    /**
     * @param OverrideDefinition $OverrideDefinition
     */
    public function __construct($OverrideDefinition = null)
    {
      $this->OverrideDefinition = $OverrideDefinition;
    }

    /**
     * @return OverrideDefinition
     */
    public function getOverrideDefinition()
    {
      return $this->OverrideDefinition;
    }

    /**
     * @param OverrideDefinition $OverrideDefinition
     * @return \FilippoToso\Travelport\UProfile\InsertOverrideDefinition
     */
    public function setOverrideDefinition($OverrideDefinition)
    {
      $this->OverrideDefinition = $OverrideDefinition;
      return $this;
    }

}
