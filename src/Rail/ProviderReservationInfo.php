<?php

namespace FilippoToso\Travelport\Rail;

class ProviderReservationInfo
{

    /**
     * @var ProviderReservationDetails $ProviderReservationDetails
     */
    protected $ProviderReservationDetails = null;

    /**
     * @var ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     */
    protected $ProviderReservationDisplayDetailsList = null;

    /**
     * @var ExternalReservationInfo $ExternalReservationInfo
     */
    protected $ExternalReservationInfo = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var date $HostCreateDate
     */
    protected $HostCreateDate = null;

    /**
     * @var time $HostCreateTime
     */
    protected $HostCreateTime = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var boolean $Imported
     */
    protected $Imported = null;

    /**
     * @var typeRef $TicketingModifiersRef
     */
    protected $TicketingModifiersRef = null;

    /**
     * @var boolean $InQueueMode
     */
    protected $InQueueMode = null;

    /**
     * @var typeRef $GroupRef
     */
    protected $GroupRef = null;

    /**
     * @var typePCC $OwningPCC
     */
    protected $OwningPCC = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @var anonymous515 $AgentOverride
     */
    protected $AgentOverride = null;

    /**
     * @param ProviderReservationDetails $ProviderReservationDetails
     * @param ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     * @param ExternalReservationInfo $ExternalReservationInfo
     * @param typeRef $Key
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $LocatorCode
     * @param \DateTime $CreateDate
     * @param date $HostCreateDate
     * @param time $HostCreateTime
     * @param \DateTime $ModifiedDate
     * @param boolean $Imported
     * @param typeRef $TicketingModifiersRef
     * @param boolean $InQueueMode
     * @param typeRef $GroupRef
     * @param typePCC $OwningPCC
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param anonymous515 $AgentOverride
     */
    public function __construct($ProviderReservationDetails, $ProviderReservationDisplayDetailsList, $ExternalReservationInfo, $Key, $ProviderCode, $LocatorCode, \DateTime $CreateDate, $HostCreateDate, $HostCreateTime, \DateTime $ModifiedDate, $Imported, $TicketingModifiersRef, $InQueueMode, $GroupRef, $OwningPCC, $ElStat, $KeyOverride, $AgentOverride)
    {
      $this->ProviderReservationDetails = $ProviderReservationDetails;
      $this->ProviderReservationDisplayDetailsList = $ProviderReservationDisplayDetailsList;
      $this->ExternalReservationInfo = $ExternalReservationInfo;
      $this->Key = $Key;
      $this->ProviderCode = $ProviderCode;
      $this->LocatorCode = $LocatorCode;
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      $this->HostCreateDate = $HostCreateDate;
      $this->HostCreateTime = $HostCreateTime;
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      $this->Imported = $Imported;
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      $this->InQueueMode = $InQueueMode;
      $this->GroupRef = $GroupRef;
      $this->OwningPCC = $OwningPCC;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
      $this->AgentOverride = $AgentOverride;
    }

    /**
     * @return ProviderReservationDetails
     */
    public function getProviderReservationDetails()
    {
      return $this->ProviderReservationDetails;
    }

    /**
     * @param ProviderReservationDetails $ProviderReservationDetails
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderReservationDetails($ProviderReservationDetails)
    {
      $this->ProviderReservationDetails = $ProviderReservationDetails;
      return $this;
    }

    /**
     * @return ProviderReservationDisplayDetailsList
     */
    public function getProviderReservationDisplayDetailsList()
    {
      return $this->ProviderReservationDisplayDetailsList;
    }

    /**
     * @param ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderReservationDisplayDetailsList($ProviderReservationDisplayDetailsList)
    {
      $this->ProviderReservationDisplayDetailsList = $ProviderReservationDisplayDetailsList;
      return $this;
    }

    /**
     * @return ExternalReservationInfo
     */
    public function getExternalReservationInfo()
    {
      return $this->ExternalReservationInfo;
    }

    /**
     * @param ExternalReservationInfo $ExternalReservationInfo
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setExternalReservationInfo($ExternalReservationInfo)
    {
      $this->ExternalReservationInfo = $ExternalReservationInfo;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return date
     */
    public function getHostCreateDate()
    {
      return $this->HostCreateDate;
    }

    /**
     * @param date $HostCreateDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setHostCreateDate($HostCreateDate)
    {
      $this->HostCreateDate = $HostCreateDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getHostCreateTime()
    {
      return $this->HostCreateTime;
    }

    /**
     * @param time $HostCreateTime
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setHostCreateTime($HostCreateTime)
    {
      $this->HostCreateTime = $HostCreateTime;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getImported()
    {
      return $this->Imported;
    }

    /**
     * @param boolean $Imported
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setImported($Imported)
    {
      $this->Imported = $Imported;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getTicketingModifiersRef()
    {
      return $this->TicketingModifiersRef;
    }

    /**
     * @param typeRef $TicketingModifiersRef
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setTicketingModifiersRef($TicketingModifiersRef)
    {
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInQueueMode()
    {
      return $this->InQueueMode;
    }

    /**
     * @param boolean $InQueueMode
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setInQueueMode($InQueueMode)
    {
      $this->InQueueMode = $InQueueMode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getGroupRef()
    {
      return $this->GroupRef;
    }

    /**
     * @param typeRef $GroupRef
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setGroupRef($GroupRef)
    {
      $this->GroupRef = $GroupRef;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getOwningPCC()
    {
      return $this->OwningPCC;
    }

    /**
     * @param typePCC $OwningPCC
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setOwningPCC($OwningPCC)
    {
      $this->OwningPCC = $OwningPCC;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

    /**
     * @return anonymous515
     */
    public function getAgentOverride()
    {
      return $this->AgentOverride;
    }

    /**
     * @param anonymous515 $AgentOverride
     * @return \FilippoToso\Travelport\Rail\ProviderReservationInfo
     */
    public function setAgentOverride($AgentOverride)
    {
      $this->AgentOverride = $AgentOverride;
      return $this;
    }

}
