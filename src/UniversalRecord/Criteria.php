<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Criteria
{

    /**
     * @var anonymous1189 $Order
     */
    protected $Order = null;

    /**
     * @var anonymous1190 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1189 $Order
     * @param anonymous1190 $Type
     */
    public function __construct($Order = null, $Type = null)
    {
      $this->Order = $Order;
      $this->Type = $Type;
    }

    /**
     * @return anonymous1189
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param anonymous1189 $Order
     * @return \FilippoToso\Travelport\UniversalRecord\Criteria
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return anonymous1190
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1190 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\Criteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
