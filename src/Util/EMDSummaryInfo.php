<?php

namespace FilippoToso\Travelport\Util;

class EMDSummaryInfo
{

    /**
     * @var EMDSummary $EMDSummary
     */
    protected $EMDSummary = null;

    /**
     * @var EMDTravelerInfo $EMDTravelerInfo
     */
    protected $EMDTravelerInfo = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param EMDSummary $EMDSummary
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @param Payment $Payment
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($EMDSummary = null, $EMDTravelerInfo = null, $Payment = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->EMDSummary = $EMDSummary;
      $this->EMDTravelerInfo = $EMDTravelerInfo;
      $this->Payment = $Payment;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return EMDSummary
     */
    public function getEMDSummary()
    {
      return $this->EMDSummary;
    }

    /**
     * @param EMDSummary $EMDSummary
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setEMDSummary($EMDSummary)
    {
      $this->EMDSummary = $EMDSummary;
      return $this;
    }

    /**
     * @return EMDTravelerInfo
     */
    public function getEMDTravelerInfo()
    {
      return $this->EMDTravelerInfo;
    }

    /**
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setEMDTravelerInfo($EMDTravelerInfo)
    {
      $this->EMDTravelerInfo = $EMDTravelerInfo;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
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
     * @return \FilippoToso\Travelport\Util\EMDSummaryInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
