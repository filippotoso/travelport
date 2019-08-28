<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeBulkTicketModifierType
{

    /**
     * @var boolean $SuppressOnFareCalc
     */
    protected $SuppressOnFareCalc = null;

    /**
     * @param boolean $SuppressOnFareCalc
     */
    public function __construct($SuppressOnFareCalc = null)
    {
      $this->SuppressOnFareCalc = $SuppressOnFareCalc;
    }

    /**
     * @return boolean
     */
    public function getSuppressOnFareCalc()
    {
      return $this->SuppressOnFareCalc;
    }

    /**
     * @param boolean $SuppressOnFareCalc
     * @return \FilippoToso\Travelport\UniversalRecord\typeBulkTicketModifierType
     */
    public function setSuppressOnFareCalc($SuppressOnFareCalc)
    {
      $this->SuppressOnFareCalc = $SuppressOnFareCalc;
      return $this;
    }

}
