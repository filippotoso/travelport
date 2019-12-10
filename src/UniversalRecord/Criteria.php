<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Criteria
{

    /**
     * @var anonymous1191 $Order
     */
    protected $Order = null;

    /**
     * @var anonymous1192 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1191 $Order
     * @param anonymous1192 $Type
     */
    public function __construct($Order = null, $Type = null)
    {
      $this->Order = $Order;
      $this->Type = $Type;
    }

    /**
     * @return anonymous1191
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param anonymous1191 $Order
     * @return \FilippoToso\Travelport\UniversalRecord\Criteria
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return anonymous1192
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1192 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\Criteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
