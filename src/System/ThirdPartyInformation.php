<?php

namespace FilippoToso\Travelport\System;

class ThirdPartyInformation
{

    /**
     * @var typeGeneralReference[] $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var anonymous424 $ThirdPartyCode
     */
    protected $ThirdPartyCode = null;

    /**
     * @var anonymous425 $ThirdPartyLocatorCode
     */
    protected $ThirdPartyLocatorCode = null;

    /**
     * @var typeThirdPartySupplier $ThirdPartyName
     */
    protected $ThirdPartyName = null;

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
     * @param anonymous424 $ThirdPartyCode
     * @param anonymous425 $ThirdPartyLocatorCode
     * @param typeThirdPartySupplier $ThirdPartyName
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ThirdPartyCode = null, $ThirdPartyLocatorCode = null, $ThirdPartyName = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ThirdPartyCode = $ThirdPartyCode;
      $this->ThirdPartyLocatorCode = $ThirdPartyLocatorCode;
      $this->ThirdPartyName = $ThirdPartyName;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeGeneralReference[]
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeGeneralReference[] $SegmentRef
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
     */
    public function setSegmentRef(array $SegmentRef = null)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return anonymous424
     */
    public function getThirdPartyCode()
    {
      return $this->ThirdPartyCode;
    }

    /**
     * @param anonymous424 $ThirdPartyCode
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
     */
    public function setThirdPartyCode($ThirdPartyCode)
    {
      $this->ThirdPartyCode = $ThirdPartyCode;
      return $this;
    }

    /**
     * @return anonymous425
     */
    public function getThirdPartyLocatorCode()
    {
      return $this->ThirdPartyLocatorCode;
    }

    /**
     * @param anonymous425 $ThirdPartyLocatorCode
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
     */
    public function setThirdPartyLocatorCode($ThirdPartyLocatorCode)
    {
      $this->ThirdPartyLocatorCode = $ThirdPartyLocatorCode;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getThirdPartyName()
    {
      return $this->ThirdPartyName;
    }

    /**
     * @param typeThirdPartySupplier $ThirdPartyName
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
     */
    public function setThirdPartyName($ThirdPartyName)
    {
      $this->ThirdPartyName = $ThirdPartyName;
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
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
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
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
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
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
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
     * @return \FilippoToso\Travelport\System\ThirdPartyInformation
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
