<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirRefundModifiers
{

    /**
     * @var string $RefundDate
     */
    protected $RefundDate = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @param string $RefundDate
     * @param string $AccountCode
     * @param typeTicketDesignator $TicketDesignator
     */
    public function __construct($RefundDate = null, $AccountCode = null, $TicketDesignator = null)
    {
      $this->RefundDate = $RefundDate;
      $this->AccountCode = $AccountCode;
      $this->TicketDesignator = $TicketDesignator;
    }

    /**
     * @return string
     */
    public function getRefundDate()
    {
      return $this->RefundDate;
    }

    /**
     * @param string $RefundDate
     * @return \FilippoToso\Travelport\UniversalRecord\AirRefundModifiers
     */
    public function setRefundDate($RefundDate)
    {
      $this->RefundDate = $RefundDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\UniversalRecord\AirRefundModifiers
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\UniversalRecord\AirRefundModifiers
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

}
