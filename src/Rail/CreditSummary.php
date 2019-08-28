<?php

namespace FilippoToso\Travelport\Rail;

class CreditSummary
{

    /**
     * @var typeCurrency $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var float $CurrentBalance
     */
    protected $CurrentBalance = null;

    /**
     * @var float $InitialCredit
     */
    protected $InitialCredit = null;

    /**
     * @param typeCurrency $CurrencyCode
     * @param float $CurrentBalance
     * @param float $InitialCredit
     */
    public function __construct($CurrencyCode = null, $CurrentBalance = null, $InitialCredit = null)
    {
      $this->CurrencyCode = $CurrencyCode;
      $this->CurrentBalance = $CurrentBalance;
      $this->InitialCredit = $InitialCredit;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param typeCurrency $CurrencyCode
     * @return \FilippoToso\Travelport\Rail\CreditSummary
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentBalance()
    {
      return $this->CurrentBalance;
    }

    /**
     * @param float $CurrentBalance
     * @return \FilippoToso\Travelport\Rail\CreditSummary
     */
    public function setCurrentBalance($CurrentBalance)
    {
      $this->CurrentBalance = $CurrentBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getInitialCredit()
    {
      return $this->InitialCredit;
    }

    /**
     * @param float $InitialCredit
     * @return \FilippoToso\Travelport\Rail\CreditSummary
     */
    public function setInitialCredit($InitialCredit)
    {
      $this->InitialCredit = $InitialCredit;
      return $this;
    }

}
