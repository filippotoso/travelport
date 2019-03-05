<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Balance
{

    /**
     * @var typeMoney $CreditCardDueAmount
     */
    protected $CreditCardDueAmount = null;

    /**
     * @var typeMoney $CheckDueAmount
     */
    protected $CheckDueAmount = null;

    /**
     * @var date $DueDate
     */
    protected $DueDate = null;

    /**
     * @var date $ReceivedDate
     */
    protected $ReceivedDate = null;

    /**
     * @param typeMoney $CreditCardDueAmount
     * @param typeMoney $CheckDueAmount
     * @param date $DueDate
     * @param date $ReceivedDate
     */
    public function __construct($CreditCardDueAmount = null, $CheckDueAmount = null, $DueDate = null, $ReceivedDate = null)
    {
      $this->CreditCardDueAmount = $CreditCardDueAmount;
      $this->CheckDueAmount = $CheckDueAmount;
      $this->DueDate = $DueDate;
      $this->ReceivedDate = $ReceivedDate;
    }

    /**
     * @return typeMoney
     */
    public function getCreditCardDueAmount()
    {
      return $this->CreditCardDueAmount;
    }

    /**
     * @param typeMoney $CreditCardDueAmount
     * @return \FilippoToso\Travelport\UniversalRecord\Balance
     */
    public function setCreditCardDueAmount($CreditCardDueAmount)
    {
      $this->CreditCardDueAmount = $CreditCardDueAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCheckDueAmount()
    {
      return $this->CheckDueAmount;
    }

    /**
     * @param typeMoney $CheckDueAmount
     * @return \FilippoToso\Travelport\UniversalRecord\Balance
     */
    public function setCheckDueAmount($CheckDueAmount)
    {
      $this->CheckDueAmount = $CheckDueAmount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Balance
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
     * @return \FilippoToso\Travelport\UniversalRecord\Balance
     */
    public function setReceivedDate($ReceivedDate)
    {
      $this->ReceivedDate = $ReceivedDate;
      return $this;
    }

}
