<?php

namespace FilippoToso\Travelport\GDSQueue;

class Criteria
{

    /**
     * @var anonymous1186 $Order
     */
    protected $Order = null;

    /**
     * @var anonymous1187 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1186 $Order
     * @param anonymous1187 $Type
     */
    public function __construct($Order, $Type)
    {
      $this->Order = $Order;
      $this->Type = $Type;
    }

    /**
     * @return anonymous1186
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param anonymous1186 $Order
     * @return \FilippoToso\Travelport\GDSQueue\Criteria
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return anonymous1187
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1187 $Type
     * @return \FilippoToso\Travelport\GDSQueue\Criteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
