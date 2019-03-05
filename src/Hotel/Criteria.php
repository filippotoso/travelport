<?php

namespace FilippoToso\Travelport\Hotel;

class Criteria
{

    /**
     * @var anonymous572 $Order
     */
    protected $Order = null;

    /**
     * @var anonymous573 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous572 $Order
     * @param anonymous573 $Type
     */
    public function __construct($Order = null, $Type = null)
    {
      $this->Order = $Order;
      $this->Type = $Type;
    }

    /**
     * @return anonymous572
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param anonymous572 $Order
     * @return \FilippoToso\Travelport\Hotel\Criteria
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return anonymous573
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous573 $Type
     * @return \FilippoToso\Travelport\Hotel\Criteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
