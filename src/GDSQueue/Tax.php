<?php

namespace FilippoToso\Travelport\GDSQueue;

class Tax
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Percentage
     */
    protected $Percentage = null;

    /**
     * @var typeOTACode $Code
     */
    protected $Code = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var date $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var string $CollectionFreq
     */
    protected $CollectionFreq = null;

    /**
     * @param typeMoney $Amount
     * @param float $Percentage
     * @param typeOTACode $Code
     * @param date $EffectiveDate
     * @param date $ExpirationDate
     * @param string $Term
     * @param string $CollectionFreq
     */
    public function __construct($Amount = null, $Percentage = null, $Code = null, $EffectiveDate = null, $ExpirationDate = null, $Term = null, $CollectionFreq = null)
    {
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
      $this->Code = $Code;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->Term = $Term;
      $this->CollectionFreq = $CollectionFreq;
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
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param float $Percentage
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeOTACode $Code
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param date $ExpirationDate
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectionFreq()
    {
      return $this->CollectionFreq;
    }

    /**
     * @param string $CollectionFreq
     * @return \FilippoToso\Travelport\GDSQueue\Tax
     */
    public function setCollectionFreq($CollectionFreq)
    {
      $this->CollectionFreq = $CollectionFreq;
      return $this;
    }

}
