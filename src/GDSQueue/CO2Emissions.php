<?php

namespace FilippoToso\Travelport\GDSQueue;

class CO2Emissions
{

    /**
     * @var CO2Emission $CO2Emission
     */
    protected $CO2Emission = null;

    /**
     * @var float $TotalValue
     */
    protected $TotalValue = null;

    /**
     * @var StringLength1to64 $Unit
     */
    protected $Unit = null;

    /**
     * @var StringLength1to64 $Category
     */
    protected $Category = null;

    /**
     * @var StringLength1to64 $Source
     */
    protected $Source = null;

    /**
     * @param CO2Emission $CO2Emission
     * @param float $TotalValue
     * @param StringLength1to64 $Unit
     * @param StringLength1to64 $Category
     * @param StringLength1to64 $Source
     */
    public function __construct($CO2Emission = null, $TotalValue = null, $Unit = null, $Category = null, $Source = null)
    {
      $this->CO2Emission = $CO2Emission;
      $this->TotalValue = $TotalValue;
      $this->Unit = $Unit;
      $this->Category = $Category;
      $this->Source = $Source;
    }

    /**
     * @return CO2Emission
     */
    public function getCO2Emission()
    {
      return $this->CO2Emission;
    }

    /**
     * @param CO2Emission $CO2Emission
     * @return \FilippoToso\Travelport\GDSQueue\CO2Emissions
     */
    public function setCO2Emission($CO2Emission)
    {
      $this->CO2Emission = $CO2Emission;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalValue()
    {
      return $this->TotalValue;
    }

    /**
     * @param float $TotalValue
     * @return \FilippoToso\Travelport\GDSQueue\CO2Emissions
     */
    public function setTotalValue($TotalValue)
    {
      $this->TotalValue = $TotalValue;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param StringLength1to64 $Unit
     * @return \FilippoToso\Travelport\GDSQueue\CO2Emissions
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param StringLength1to64 $Category
     * @return \FilippoToso\Travelport\GDSQueue\CO2Emissions
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return StringLength1to64
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param StringLength1to64 $Source
     * @return \FilippoToso\Travelport\GDSQueue\CO2Emissions
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
