<?php

namespace FilippoToso\Travelport\GDSQueue;

class LocationInfo
{

    /**
     * @var typeStructuredAddress $LocationAddress
     */
    protected $LocationAddress = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $OperationTime
     */
    protected $OperationTime = null;

    /**
     * @var string $ShuttleInfo
     */
    protected $ShuttleInfo = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $CounterLocation
     */
    protected $CounterLocation = null;

    /**
     * @var boolean $PreferredOption
     */
    protected $PreferredOption = null;

    /**
     * @param typeStructuredAddress $LocationAddress
     * @param PhoneNumber $PhoneNumber
     * @param string $OperationTime
     * @param string $Name
     * @param string $CounterLocation
     * @param boolean $PreferredOption
     */
    public function __construct($LocationAddress = null, $PhoneNumber = null, $OperationTime = null, $Name = null, $CounterLocation = null, $PreferredOption = null)
    {
      $this->LocationAddress = $LocationAddress;
      $this->PhoneNumber = $PhoneNumber;
      $this->OperationTime = $OperationTime;
      $this->Name = $Name;
      $this->CounterLocation = $CounterLocation;
      $this->PreferredOption = $PreferredOption;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getLocationAddress()
    {
      return $this->LocationAddress;
    }

    /**
     * @param typeStructuredAddress $LocationAddress
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setLocationAddress($LocationAddress)
    {
      $this->LocationAddress = $LocationAddress;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationTime()
    {
      return $this->OperationTime;
    }

    /**
     * @param string $OperationTime
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setOperationTime($OperationTime)
    {
      $this->OperationTime = $OperationTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getShuttleInfo()
    {
      return $this->ShuttleInfo;
    }

    /**
     * @param string $ShuttleInfo
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setShuttleInfo($ShuttleInfo)
    {
      $this->ShuttleInfo = $ShuttleInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounterLocation()
    {
      return $this->CounterLocation;
    }

    /**
     * @param string $CounterLocation
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setCounterLocation($CounterLocation)
    {
      $this->CounterLocation = $CounterLocation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \FilippoToso\Travelport\GDSQueue\LocationInfo
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

}
