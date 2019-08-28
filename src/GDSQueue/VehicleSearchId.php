<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleSearchId
{

    /**
     * @var string $MediaLinksSearchId
     */
    protected $MediaLinksSearchId = null;

    /**
     * @param string $MediaLinksSearchId
     */
    public function __construct($MediaLinksSearchId = null)
    {
      $this->MediaLinksSearchId = $MediaLinksSearchId;
    }

    /**
     * @return string
     */
    public function getMediaLinksSearchId()
    {
      return $this->MediaLinksSearchId;
    }

    /**
     * @param string $MediaLinksSearchId
     * @return \FilippoToso\Travelport\GDSQueue\VehicleSearchId
     */
    public function setMediaLinksSearchId($MediaLinksSearchId)
    {
      $this->MediaLinksSearchId = $MediaLinksSearchId;
      return $this;
    }

}
