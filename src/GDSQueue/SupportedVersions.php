<?php

namespace FilippoToso\Travelport\GDSQueue;

class SupportedVersions
{

    /**
     * @var string $urVersion
     */
    protected $urVersion = null;

    /**
     * @var string $airVersion
     */
    protected $airVersion = null;

    /**
     * @var string $hotelVersion
     */
    protected $hotelVersion = null;

    /**
     * @var string $vehicleVersion
     */
    protected $vehicleVersion = null;

    /**
     * @var string $passiveVersion
     */
    protected $passiveVersion = null;

    /**
     * @var string $railVersion
     */
    protected $railVersion = null;

    /**
     * @var string $cruiseVersion
     */
    protected $cruiseVersion = null;

    /**
     * @param string $urVersion
     * @param string $airVersion
     * @param string $hotelVersion
     * @param string $vehicleVersion
     * @param string $passiveVersion
     * @param string $railVersion
     * @param string $cruiseVersion
     */
    public function __construct($urVersion = null, $airVersion = null, $hotelVersion = null, $vehicleVersion = null, $passiveVersion = null, $railVersion = null, $cruiseVersion = null)
    {
      $this->urVersion = $urVersion;
      $this->airVersion = $airVersion;
      $this->hotelVersion = $hotelVersion;
      $this->vehicleVersion = $vehicleVersion;
      $this->passiveVersion = $passiveVersion;
      $this->railVersion = $railVersion;
      $this->cruiseVersion = $cruiseVersion;
    }

    /**
     * @return string
     */
    public function getUrVersion()
    {
      return $this->urVersion;
    }

    /**
     * @param string $urVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setUrVersion($urVersion)
    {
      $this->urVersion = $urVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirVersion()
    {
      return $this->airVersion;
    }

    /**
     * @param string $airVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setAirVersion($airVersion)
    {
      $this->airVersion = $airVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelVersion()
    {
      return $this->hotelVersion;
    }

    /**
     * @param string $hotelVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setHotelVersion($hotelVersion)
    {
      $this->hotelVersion = $hotelVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleVersion()
    {
      return $this->vehicleVersion;
    }

    /**
     * @param string $vehicleVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setVehicleVersion($vehicleVersion)
    {
      $this->vehicleVersion = $vehicleVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassiveVersion()
    {
      return $this->passiveVersion;
    }

    /**
     * @param string $passiveVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setPassiveVersion($passiveVersion)
    {
      $this->passiveVersion = $passiveVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getRailVersion()
    {
      return $this->railVersion;
    }

    /**
     * @param string $railVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setRailVersion($railVersion)
    {
      $this->railVersion = $railVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getCruiseVersion()
    {
      return $this->cruiseVersion;
    }

    /**
     * @param string $cruiseVersion
     * @return \FilippoToso\Travelport\GDSQueue\SupportedVersions
     */
    public function setCruiseVersion($cruiseVersion)
    {
      $this->cruiseVersion = $cruiseVersion;
      return $this;
    }

}
