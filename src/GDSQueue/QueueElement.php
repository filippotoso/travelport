<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueueElement
{

    /**
     * @var string $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $QueueDate
     */
    protected $QueueDate = null;

    /**
     * @var time $QueueTime
     */
    protected $QueueTime = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var typeAgentCode $CreatedByAgentCode
     */
    protected $CreatedByAgentCode = null;

    /**
     * @var typeAgentCode $ModifiedByAgentCode
     */
    protected $ModifiedByAgentCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param string $DepartureDate
     * @param string $QueueDate
     * @param time $QueueTime
     * @param string $Name
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typeAgentCode $CreatedByAgentCode
     * @param typeAgentCode $ModifiedByAgentCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($DepartureDate = null, $QueueDate = null, $QueueTime = null, $Name = null, $UniversalRecordLocatorCode = null, $CreatedByAgentCode = null, $ModifiedByAgentCode = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      $this->DepartureDate = $DepartureDate;
      $this->QueueDate = $QueueDate;
      $this->QueueTime = $QueueTime;
      $this->Name = $Name;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->CreatedByAgentCode = $CreatedByAgentCode;
      $this->ModifiedByAgentCode = $ModifiedByAgentCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return string
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param string $DepartureDate
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueDate()
    {
      return $this->QueueDate;
    }

    /**
     * @param string $QueueDate
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setQueueDate($QueueDate)
    {
      $this->QueueDate = $QueueDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getQueueTime()
    {
      return $this->QueueTime;
    }

    /**
     * @param time $QueueTime
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setQueueTime($QueueTime)
    {
      $this->QueueTime = $QueueTime;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return typeAgentCode
     */
    public function getCreatedByAgentCode()
    {
      return $this->CreatedByAgentCode;
    }

    /**
     * @param typeAgentCode $CreatedByAgentCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setCreatedByAgentCode($CreatedByAgentCode)
    {
      $this->CreatedByAgentCode = $CreatedByAgentCode;
      return $this;
    }

    /**
     * @return typeAgentCode
     */
    public function getModifiedByAgentCode()
    {
      return $this->ModifiedByAgentCode;
    }

    /**
     * @param typeAgentCode $ModifiedByAgentCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setModifiedByAgentCode($ModifiedByAgentCode)
    {
      $this->ModifiedByAgentCode = $ModifiedByAgentCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueElement
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
