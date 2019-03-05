<?php

namespace FilippoToso\Travelport\GDSQueue;

class CommissionRemark
{

    /**
     * @var ProviderReservationLevel $ProviderReservationLevel
     */
    protected $ProviderReservationLevel = null;

    /**
     * @var PassengerTypeLevel[] $PassengerTypeLevel
     */
    protected $PassengerTypeLevel = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param ProviderReservationLevel $ProviderReservationLevel
     * @param PassengerTypeLevel[] $PassengerTypeLevel
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ProviderReservationLevel = null, array $PassengerTypeLevel = null, $Key = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      $this->PassengerTypeLevel = $PassengerTypeLevel;
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderCode = $ProviderCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return ProviderReservationLevel
     */
    public function getProviderReservationLevel()
    {
      return $this->ProviderReservationLevel;
    }

    /**
     * @param ProviderReservationLevel $ProviderReservationLevel
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setProviderReservationLevel($ProviderReservationLevel)
    {
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      return $this;
    }

    /**
     * @return PassengerTypeLevel[]
     */
    public function getPassengerTypeLevel()
    {
      return $this->PassengerTypeLevel;
    }

    /**
     * @param PassengerTypeLevel[] $PassengerTypeLevel
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setPassengerTypeLevel(array $PassengerTypeLevel)
    {
      $this->PassengerTypeLevel = $PassengerTypeLevel;
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
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
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
     * @return \FilippoToso\Travelport\GDSQueue\CommissionRemark
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
