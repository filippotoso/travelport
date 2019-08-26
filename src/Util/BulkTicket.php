<?php

namespace FilippoToso\Travelport\Util;

class BulkTicket extends typeBulkTicketModifierType
{

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @param boolean $SuppressOnFareCalc
     * @param boolean $NonRefundable
     */
    public function __construct($SuppressOnFareCalc, $NonRefundable)
    {
      parent::__construct($SuppressOnFareCalc);
      $this->NonRefundable = $NonRefundable;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return \FilippoToso\Travelport\Util\BulkTicket
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

}
