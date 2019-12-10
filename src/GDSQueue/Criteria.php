<?php

namespace FilippoToso\Travelport\GDSQueue;

class Criteria
{

    /**
     * @var anonymous1188 $Order
     */
    protected $Order = null;

    /**
     * @var anonymous1189 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1188 $Order
     * @param anonymous1189 $Type
     */
    public function __construct($Order = null, $Type = null)
    {
      $this->Order = $Order;
      $this->Type = $Type;
    }

    /**
     * @return anonymous1188
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param anonymous1188 $Order
     * @return \FilippoToso\Travelport\GDSQueue\Criteria
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return anonymous1189
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1189 $Type
     * @return \FilippoToso\Travelport\GDSQueue\Criteria
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
