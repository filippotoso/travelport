<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VoidFailureInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param string $TicketNumber
     * @param int $Code
     */
    public function __construct($_ = null, $TicketNumber = null, $Code = null)
    {
      $this->_ = $_;
      $this->TicketNumber = $TicketNumber;
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\VoidFailureInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \FilippoToso\Travelport\UniversalRecord\VoidFailureInfo
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\UniversalRecord\VoidFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
