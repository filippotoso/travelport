<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailPricingModifiers
{

    /**
     * @var DiscountCard $DiscountCard
     */
    protected $DiscountCard = null;

    /**
     * @var boolean $ProhibitNonRefundableFares
     */
    protected $ProhibitNonRefundableFares = null;

    /**
     * @var boolean $ProhibitNonExchangeableFares
     */
    protected $ProhibitNonExchangeableFares = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    protected $CurrencyType = null;

    /**
     * @var typeRailSearchType $RailSearchType
     */
    protected $RailSearchType = null;

    /**
     * @param DiscountCard $DiscountCard
     * @param boolean $ProhibitNonRefundableFares
     * @param boolean $ProhibitNonExchangeableFares
     * @param typeCurrency $CurrencyType
     * @param typeRailSearchType $RailSearchType
     */
    public function __construct($DiscountCard = null, $ProhibitNonRefundableFares = null, $ProhibitNonExchangeableFares = null, $CurrencyType = null, $RailSearchType = null)
    {
      $this->DiscountCard = $DiscountCard;
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      $this->ProhibitNonExchangeableFares = $ProhibitNonExchangeableFares;
      $this->CurrencyType = $CurrencyType;
      $this->RailSearchType = $RailSearchType;
    }

    /**
     * @return DiscountCard
     */
    public function getDiscountCard()
    {
      return $this->DiscountCard;
    }

    /**
     * @param DiscountCard $DiscountCard
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingModifiers
     */
    public function setDiscountCard($DiscountCard)
    {
      $this->DiscountCard = $DiscountCard;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonRefundableFares()
    {
      return $this->ProhibitNonRefundableFares;
    }

    /**
     * @param boolean $ProhibitNonRefundableFares
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingModifiers
     */
    public function setProhibitNonRefundableFares($ProhibitNonRefundableFares)
    {
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonExchangeableFares()
    {
      return $this->ProhibitNonExchangeableFares;
    }

    /**
     * @param boolean $ProhibitNonExchangeableFares
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingModifiers
     */
    public function setProhibitNonExchangeableFares($ProhibitNonExchangeableFares)
    {
      $this->ProhibitNonExchangeableFares = $ProhibitNonExchangeableFares;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingModifiers
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

    /**
     * @return typeRailSearchType
     */
    public function getRailSearchType()
    {
      return $this->RailSearchType;
    }

    /**
     * @param typeRailSearchType $RailSearchType
     * @return \FilippoToso\Travelport\UniversalRecord\RailPricingModifiers
     */
    public function setRailSearchType($RailSearchType)
    {
      $this->RailSearchType = $RailSearchType;
      return $this;
    }

}
