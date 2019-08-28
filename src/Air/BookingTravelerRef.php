<?php

namespace FilippoToso\Travelport\Air;

class BookingTravelerRef
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
     * @return \FilippoToso\Travelport\Air\BookingTravelerRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
