<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeRateHostIndicator
{

    /**
     * @var string $InventoryToken
     */
    protected $InventoryToken = null;

    /**
     * @var string $RateToken
     */
    protected $RateToken = null;

    /**
     * @param string $InventoryToken
     * @param string $RateToken
     */
    public function __construct($InventoryToken = null, $RateToken = null)
    {
      $this->InventoryToken = $InventoryToken;
      $this->RateToken = $RateToken;
    }

    /**
     * @return string
     */
    public function getInventoryToken()
    {
      return $this->InventoryToken;
    }

    /**
     * @param string $InventoryToken
     * @return \FilippoToso\Travelport\UniversalRecord\typeRateHostIndicator
     */
    public function setInventoryToken($InventoryToken)
    {
      $this->InventoryToken = $InventoryToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateToken()
    {
      return $this->RateToken;
    }

    /**
     * @param string $RateToken
     * @return \FilippoToso\Travelport\UniversalRecord\typeRateHostIndicator
     */
    public function setRateToken($RateToken)
    {
      $this->RateToken = $RateToken;
      return $this;
    }

}
