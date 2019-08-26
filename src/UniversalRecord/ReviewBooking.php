<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ReviewBooking
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous461 $Queue
     */
    protected $Queue = null;

    /**
     * @var anonymous462 $QueueCategory
     */
    protected $QueueCategory = null;

    /**
     * @var \DateTime $DateTime
     */
    protected $DateTime = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var anonymous463 $Remarks
     */
    protected $Remarks = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param anonymous461 $Queue
     * @param anonymous462 $QueueCategory
     * @param \DateTime $DateTime
     * @param typePCC $PseudoCityCode
     * @param typeProviderCode $ProviderCode
     * @param typeRef $ProviderReservationInfoRef
     * @param anonymous463 $Remarks
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key, $Queue, $QueueCategory, \DateTime $DateTime, $PseudoCityCode, $ProviderCode, $ProviderReservationInfoRef, $Remarks, $ElStat, $KeyOverride)
    {
      $this->Key = $Key;
      $this->Queue = $Queue;
      $this->QueueCategory = $QueueCategory;
      $this->DateTime = $DateTime->format(\DateTime::ATOM);
      $this->PseudoCityCode = $PseudoCityCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Remarks = $Remarks;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous461
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param anonymous461 $Queue
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return anonymous462
     */
    public function getQueueCategory()
    {
      return $this->QueueCategory;
    }

    /**
     * @param anonymous462 $QueueCategory
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setQueueCategory($QueueCategory)
    {
      $this->QueueCategory = $QueueCategory;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
      if ($this->DateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTime
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setDateTime(\DateTime $DateTime)
    {
      $this->DateTime = $DateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return anonymous463
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param anonymous463 $Remarks
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
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
     * @return \FilippoToso\Travelport\UniversalRecord\ReviewBooking
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
