<?php

namespace FilippoToso\Travelport\Rail;

class TaxDetails
{

    /**
     * @var Tax $Tax
     */
    protected $Tax = null;

    /**
     * @param Tax $Tax
     */
    public function __construct($Tax = null)
    {
      $this->Tax = $Tax;
    }

    /**
     * @return Tax
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax $Tax
     * @return \FilippoToso\Travelport\Rail\TaxDetails
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
