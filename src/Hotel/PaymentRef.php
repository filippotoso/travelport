<?php

namespace FilippoToso\Travelport\Hotel;

class PaymentRef
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
     * @return \FilippoToso\Travelport\Hotel\PaymentRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
