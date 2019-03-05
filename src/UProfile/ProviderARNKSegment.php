<?php

namespace FilippoToso\Travelport\UProfile;

class ProviderARNKSegment
{

    /**
     * @var PreviousSegment $PreviousSegment
     */
    protected $PreviousSegment = null;

    /**
     * @var NextSegment $NextSegment
     */
    protected $NextSegment = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($Key = null, $ProviderReservationInfoRef = null)
    {
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
    }

    /**
     * @return PreviousSegment
     */
    public function getPreviousSegment()
    {
      return $this->PreviousSegment;
    }

    /**
     * @param PreviousSegment $PreviousSegment
     * @return \FilippoToso\Travelport\UProfile\ProviderARNKSegment
     */
    public function setPreviousSegment($PreviousSegment)
    {
      $this->PreviousSegment = $PreviousSegment;
      return $this;
    }

    /**
     * @return NextSegment
     */
    public function getNextSegment()
    {
      return $this->NextSegment;
    }

    /**
     * @param NextSegment $NextSegment
     * @return \FilippoToso\Travelport\UProfile\ProviderARNKSegment
     */
    public function setNextSegment($NextSegment)
    {
      $this->NextSegment = $NextSegment;
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
     * @return \FilippoToso\Travelport\UProfile\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\UProfile\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
