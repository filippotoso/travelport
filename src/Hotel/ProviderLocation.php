<?php

namespace FilippoToso\Travelport\Hotel;

class ProviderLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var anonymous561 $Location
     */
    protected $Location = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param anonymous561 $Location
     */
    public function __construct($ProviderCode = null, $Location = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->Location = $Location;
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
     * @return \FilippoToso\Travelport\Hotel\ProviderLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous561
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous561 $Location
     * @return \FilippoToso\Travelport\Hotel\ProviderLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
