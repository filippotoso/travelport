<?php

namespace FilippoToso\Travelport\Rail;

class CreditsUsed
{

    /**
     * @var float $UsedCredit
     */
    protected $UsedCredit = null;

    /**
     * @var typeCurrency $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @param float $UsedCredit
     * @param typeCurrency $CurrencyCode
     */
    public function __construct($UsedCredit, $CurrencyCode)
    {
      $this->UsedCredit = $UsedCredit;
      $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * @return float
     */
    public function getUsedCredit()
    {
      return $this->UsedCredit;
    }

    /**
     * @param float $UsedCredit
     * @return \FilippoToso\Travelport\Rail\CreditsUsed
     */
    public function setUsedCredit($UsedCredit)
    {
      $this->UsedCredit = $UsedCredit;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\CreditsUsed
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

}
