<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Deposit
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var date $DueDate
     */
    protected $DueDate = null;

    /**
     * @var date $ReceivedDate
     */
    protected $ReceivedDate = null;

    /**
     * @param typeMoney $Amount
     * @param date $DueDate
     * @param date $ReceivedDate
     */
    public function __construct($Amount = null, $DueDate = null, $ReceivedDate = null)
    {
      $this->Amount = $Amount;
      $this->DueDate = $DueDate;
      $this->ReceivedDate = $ReceivedDate;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UniversalRecord\Deposit
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return date
     */
    public function getDueDate()
    {
      return $this->DueDate;
    }

    /**
     * @param date $DueDate
     * @return \FilippoToso\Travelport\UniversalRecord\Deposit
     */
    public function setDueDate($DueDate)
    {
      $this->DueDate = $DueDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getReceivedDate()
    {
      return $this->ReceivedDate;
    }

    /**
     * @param date $ReceivedDate
     * @return \FilippoToso\Travelport\UniversalRecord\Deposit
     */
    public function setReceivedDate($ReceivedDate)
    {
      $this->ReceivedDate = $ReceivedDate;
      return $this;
    }

}
