<?php

namespace FilippoToso\Travelport\Rail;

class OptionalServiceModifiers
{

    /**
     * @var OptionalServiceModifier $OptionalServiceModifier
     */
    protected $OptionalServiceModifier = null;

    /**
     * @param OptionalServiceModifier $OptionalServiceModifier
     */
    public function __construct($OptionalServiceModifier = null)
    {
      $this->OptionalServiceModifier = $OptionalServiceModifier;
    }

    /**
     * @return OptionalServiceModifier
     */
    public function getOptionalServiceModifier()
    {
      return $this->OptionalServiceModifier;
    }

    /**
     * @param OptionalServiceModifier $OptionalServiceModifier
     * @return \FilippoToso\Travelport\Rail\OptionalServiceModifiers
     */
    public function setOptionalServiceModifier($OptionalServiceModifier)
    {
      $this->OptionalServiceModifier = $OptionalServiceModifier;
      return $this;
    }

}
