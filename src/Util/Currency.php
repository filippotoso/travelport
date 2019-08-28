<?php

namespace FilippoToso\Travelport\Util;

class Currency
{

    /**
     * @var typeCurrency $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Decimal
     */
    protected $Decimal = null;

    /**
     * @param typeCurrency $Code
     * @param string $Name
     * @param string $Decimal
     */
    public function __construct($Code = null, $Name = null, $Decimal = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
      $this->Decimal = $Decimal;
    }

    /**
     * @return typeCurrency
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCurrency $Code
     * @return \FilippoToso\Travelport\Util\Currency
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\Util\Currency
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecimal()
    {
      return $this->Decimal;
    }

    /**
     * @param string $Decimal
     * @return \FilippoToso\Travelport\Util\Currency
     */
    public function setDecimal($Decimal)
    {
      $this->Decimal = $Decimal;
      return $this;
    }

}
