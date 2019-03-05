<?php

namespace FilippoToso\Travelport\Air;

class BillingDetailItem
{

    /**
     * @var typeBillingDetailsName $Name
     */
    protected $Name = null;

    /**
     * @var typeBillingDetailsDataType $DataType
     */
    protected $DataType = null;

    /**
     * @var string $MinLength
     */
    protected $MinLength = null;

    /**
     * @var string $MaxLength
     */
    protected $MaxLength = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param typeBillingDetailsName $Name
     * @param typeBillingDetailsDataType $DataType
     * @param string $MinLength
     * @param string $MaxLength
     * @param string $Value
     */
    public function __construct($Name = null, $DataType = null, $MinLength = null, $MaxLength = null, $Value = null)
    {
      $this->Name = $Name;
      $this->DataType = $DataType;
      $this->MinLength = $MinLength;
      $this->MaxLength = $MaxLength;
      $this->Value = $Value;
    }

    /**
     * @return typeBillingDetailsName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeBillingDetailsName $Name
     * @return \FilippoToso\Travelport\Air\BillingDetailItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeBillingDetailsDataType
     */
    public function getDataType()
    {
      return $this->DataType;
    }

    /**
     * @param typeBillingDetailsDataType $DataType
     * @return \FilippoToso\Travelport\Air\BillingDetailItem
     */
    public function setDataType($DataType)
    {
      $this->DataType = $DataType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinLength()
    {
      return $this->MinLength;
    }

    /**
     * @param string $MinLength
     * @return \FilippoToso\Travelport\Air\BillingDetailItem
     */
    public function setMinLength($MinLength)
    {
      $this->MinLength = $MinLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxLength()
    {
      return $this->MaxLength;
    }

    /**
     * @param string $MaxLength
     * @return \FilippoToso\Travelport\Air\BillingDetailItem
     */
    public function setMaxLength($MaxLength)
    {
      $this->MaxLength = $MaxLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Air\BillingDetailItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
