<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProviderLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var anonymous1175 $Location
     */
    protected $Location = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param anonymous1175 $Location
     */
    public function __construct($ProviderCode, $Location)
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
     * @return \FilippoToso\Travelport\GDSQueue\ProviderLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous1175
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous1175 $Location
     * @return \FilippoToso\Travelport\GDSQueue\ProviderLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
