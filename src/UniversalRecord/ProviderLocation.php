<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderLocation
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var anonymous1178 $Location
     */
    protected $Location = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param anonymous1178 $Location
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
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderLocation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous1178
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param anonymous1178 $Location
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderLocation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

}
