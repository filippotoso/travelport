<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct($UsedCredit = null, $CurrencyCode = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\CreditsUsed
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
     * @return \FilippoToso\Travelport\GDSQueue\CreditsUsed
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

}
