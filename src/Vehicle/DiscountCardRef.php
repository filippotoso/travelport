<?php

namespace FilippoToso\Travelport\Vehicle;

class DiscountCardRef
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key)
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
     * @return \FilippoToso\Travelport\Vehicle\DiscountCardRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
