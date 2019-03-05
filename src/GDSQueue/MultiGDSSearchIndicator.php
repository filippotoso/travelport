<?php

namespace FilippoToso\Travelport\GDSQueue;

class MultiGDSSearchIndicator
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var boolean $DefaultProvider
     */
    protected $DefaultProvider = null;

    /**
     * @var string $PrivateFareCode
     */
    protected $PrivateFareCode = null;

    /**
     * @var boolean $PrivateFareCodeOnly
     */
    protected $PrivateFareCodeOnly = null;

    /**
     * @param string $Type
     * @param typeProviderCode $ProviderCode
     * @param boolean $DefaultProvider
     * @param string $PrivateFareCode
     * @param boolean $PrivateFareCodeOnly
     */
    public function __construct($Type = null, $ProviderCode = null, $DefaultProvider = null, $PrivateFareCode = null, $PrivateFareCodeOnly = null)
    {
      $this->Type = $Type;
      $this->ProviderCode = $ProviderCode;
      $this->DefaultProvider = $DefaultProvider;
      $this->PrivateFareCode = $PrivateFareCode;
      $this->PrivateFareCodeOnly = $PrivateFareCodeOnly;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\GDSQueue\MultiGDSSearchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\GDSQueue\MultiGDSSearchIndicator
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultProvider()
    {
      return $this->DefaultProvider;
    }

    /**
     * @param boolean $DefaultProvider
     * @return \FilippoToso\Travelport\GDSQueue\MultiGDSSearchIndicator
     */
    public function setDefaultProvider($DefaultProvider)
    {
      $this->DefaultProvider = $DefaultProvider;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrivateFareCode()
    {
      return $this->PrivateFareCode;
    }

    /**
     * @param string $PrivateFareCode
     * @return \FilippoToso\Travelport\GDSQueue\MultiGDSSearchIndicator
     */
    public function setPrivateFareCode($PrivateFareCode)
    {
      $this->PrivateFareCode = $PrivateFareCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateFareCodeOnly()
    {
      return $this->PrivateFareCodeOnly;
    }

    /**
     * @param boolean $PrivateFareCodeOnly
     * @return \FilippoToso\Travelport\GDSQueue\MultiGDSSearchIndicator
     */
    public function setPrivateFareCodeOnly($PrivateFareCodeOnly)
    {
      $this->PrivateFareCodeOnly = $PrivateFareCodeOnly;
      return $this;
    }

}
