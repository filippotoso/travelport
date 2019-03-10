<?php

namespace FilippoToso\Travelport\Rail;

class ProviderReservationStatus
{

    /**
     * @var typeResultMessage $CancelInfo
     */
    protected $CancelInfo = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var boolean $Cancelled
     */
    protected $Cancelled = null;

    /**
     * @param \DateTime $CreateDate
     * @param \DateTime $ModifiedDate
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $LocatorCode
     * @param boolean $Cancelled
     */
    public function __construct(\DateTime $CreateDate = null, \DateTime $ModifiedDate = null, $ProviderCode = null, $LocatorCode = null, $Cancelled = null)
    {
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->ProviderCode = $ProviderCode;
      $this->LocatorCode = $LocatorCode;
      $this->Cancelled = $Cancelled;
    }

    /**
     * @return typeResultMessage
     */
    public function getCancelInfo()
    {
      return $this->CancelInfo;
    }

    /**
     * @param typeResultMessage $CancelInfo
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
     */
    public function setCancelInfo($CancelInfo)
    {
      $this->CancelInfo = $CancelInfo;
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancelled()
    {
      return $this->Cancelled;
    }

    /**
     * @param boolean $Cancelled
     * @return \FilippoToso\Travelport\Rail\ProviderReservationStatus
     */
    public function setCancelled($Cancelled)
    {
      $this->Cancelled = $Cancelled;
      return $this;
    }

}
