<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRuleLongRef
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLongRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
