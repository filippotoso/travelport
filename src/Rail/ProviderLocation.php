<?php

namespace FilippoToso\Travelport\Rail;

class ProviderLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var anonymous1177 $Location
     */
    protected $Location = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param anonymous1177 $Location
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
     * @return \FilippoToso\Travelport\Rail\ProviderLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous1177
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous1177 $Location
     * @return \FilippoToso\Travelport\Rail\ProviderLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
