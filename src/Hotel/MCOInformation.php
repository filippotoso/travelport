<?php

namespace FilippoToso\Travelport\Hotel;

class MCOInformation
{

    /**
     * @var PassengerInfo $PassengerInfo
     */
    protected $PassengerInfo = null;

    /**
     * @var string $MCONumber
     */
    protected $MCONumber = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $MCOType
     */
    protected $MCOType = null;

    /**
     * @param PassengerInfo $PassengerInfo
     * @param string $MCONumber
     * @param string $Status
     * @param string $MCOType
     */
    public function __construct($PassengerInfo = null, $MCONumber = null, $Status = null, $MCOType = null)
    {
      $this->PassengerInfo = $PassengerInfo;
      $this->MCONumber = $MCONumber;
      $this->Status = $Status;
      $this->MCOType = $MCOType;
    }

    /**
     * @return PassengerInfo
     */
    public function getPassengerInfo()
    {
      return $this->PassengerInfo;
    }

    /**
     * @param PassengerInfo $PassengerInfo
     * @return \FilippoToso\Travelport\Hotel\MCOInformation
     */
    public function setPassengerInfo($PassengerInfo)
    {
      $this->PassengerInfo = $PassengerInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMCONumber()
    {
      return $this->MCONumber;
    }

    /**
     * @param string $MCONumber
     * @return \FilippoToso\Travelport\Hotel\MCOInformation
     */
    public function setMCONumber($MCONumber)
    {
      $this->MCONumber = $MCONumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\Hotel\MCOInformation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMCOType()
    {
      return $this->MCOType;
    }

    /**
     * @param string $MCOType
     * @return \FilippoToso\Travelport\Hotel\MCOInformation
     */
    public function setMCOType($MCOType)
    {
      $this->MCOType = $MCOType;
      return $this;
    }

}
