<?php

namespace FilippoToso\Travelport\Rail;

class typeVehicleCharge
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var anonymous592 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous593 $IncludedInRate
     */
    protected $IncludedInRate = null;

    /**
     * @param string $Category
     * @param string $Name
     * @param string $Description
     * @param anonymous592 $Type
     * @param anonymous593 $IncludedInRate
     */
    public function __construct($Category = null, $Name = null, $Description = null, $Type = null, $IncludedInRate = null)
    {
      $this->Category = $Category;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Type = $Type;
      $this->IncludedInRate = $IncludedInRate;
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
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return anonymous592
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous592 $Type
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous593
     */
    public function getIncludedInRate()
    {
      return $this->IncludedInRate;
    }

    /**
     * @param anonymous593 $IncludedInRate
     * @return \FilippoToso\Travelport\Rail\typeVehicleCharge
     */
    public function setIncludedInRate($IncludedInRate)
    {
      $this->IncludedInRate = $IncludedInRate;
      return $this;
    }

}
