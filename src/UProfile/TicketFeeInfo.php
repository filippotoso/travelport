<?php

namespace FilippoToso\Travelport\UProfile;

class TicketFeeInfo
{

    /**
     * @var typeMoney $Base
     */
    protected $Base = null;

    /**
     * @var typeMoney $Tax
     */
    protected $Tax = null;

    /**
     * @var typeMoney $Total
     */
    protected $Total = null;

    /**
     * @param typeMoney $Base
     * @param typeMoney $Tax
     * @param typeMoney $Total
     */
    public function __construct($Base = null, $Tax = null, $Total = null)
    {
      $this->Base = $Base;
      $this->Tax = $Tax;
      $this->Total = $Total;
    }

    /**
     * @return typeMoney
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param typeMoney $Base
     * @return \FilippoToso\Travelport\UProfile\TicketFeeInfo
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param typeMoney $Tax
     * @return \FilippoToso\Travelport\UProfile\TicketFeeInfo
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param typeMoney $Total
     * @return \FilippoToso\Travelport\UProfile\TicketFeeInfo
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
