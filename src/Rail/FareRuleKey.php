<?php

namespace FilippoToso\Travelport\Rail;

class FareRuleKey
{

    /**
     * @var typeNonBlanks $_
     */
    protected $_ = null;

    /**
     * @var string $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param typeNonBlanks $_
     * @param string $FareInfoRef
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($_ = null, $FareInfoRef = null, $ProviderCode = null)
    {
      $this->_ = $_;
      $this->FareInfoRef = $FareInfoRef;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \FilippoToso\Travelport\Rail\FareRuleKey
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\FareRuleKey
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\FareRuleKey
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
