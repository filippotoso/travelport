<?php

namespace FilippoToso\Travelport\Util;

class CurrencyConversion
{

    /**
     * @var typeCurrency $From
     */
    protected $From = null;

    /**
     * @var typeCurrency $To
     */
    protected $To = null;

    /**
     * @var float $OriginalAmount
     */
    protected $OriginalAmount = null;

    /**
     * @var float $ConvertedAmount
     */
    protected $ConvertedAmount = null;

    /**
     * @var float $BankSellingRate
     */
    protected $BankSellingRate = null;

    /**
     * @param typeCurrency $From
     * @param typeCurrency $To
     * @param float $OriginalAmount
     * @param float $ConvertedAmount
     * @param float $BankSellingRate
     */
    public function __construct($From = null, $To = null, $OriginalAmount = null, $ConvertedAmount = null, $BankSellingRate = null)
    {
      $this->From = $From;
      $this->To = $To;
      $this->OriginalAmount = $OriginalAmount;
      $this->ConvertedAmount = $ConvertedAmount;
      $this->BankSellingRate = $BankSellingRate;
    }

    /**
     * @return typeCurrency
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param typeCurrency $From
     * @return \FilippoToso\Travelport\Util\CurrencyConversion
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param typeCurrency $To
     * @return \FilippoToso\Travelport\Util\CurrencyConversion
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return float
     */
    public function getOriginalAmount()
    {
      return $this->OriginalAmount;
    }

    /**
     * @param float $OriginalAmount
     * @return \FilippoToso\Travelport\Util\CurrencyConversion
     */
    public function setOriginalAmount($OriginalAmount)
    {
      $this->OriginalAmount = $OriginalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getConvertedAmount()
    {
      return $this->ConvertedAmount;
    }

    /**
     * @param float $ConvertedAmount
     * @return \FilippoToso\Travelport\Util\CurrencyConversion
     */
    public function setConvertedAmount($ConvertedAmount)
    {
      $this->ConvertedAmount = $ConvertedAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBankSellingRate()
    {
      return $this->BankSellingRate;
    }

    /**
     * @param float $BankSellingRate
     * @return \FilippoToso\Travelport\Util\CurrencyConversion
     */
    public function setBankSellingRate($BankSellingRate)
    {
      $this->BankSellingRate = $BankSellingRate;
      return $this;
    }

}
