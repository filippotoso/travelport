<?php

namespace FilippoToso\Travelport\GDSQueue;

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
     * @var anonymous82 $ProviderSegmentOrder
     */
    protected $ProviderSegmentOrder = null;

    /**
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     * @param anonymous82 $ProviderSegmentOrder
     */
    public function __construct($Key, $ProviderReservationInfoRef, $ProviderSegmentOrder)
    {
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
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
     * @return \FilippoToso\Travelport\GDSQueue\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return anonymous82
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous82 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\GDSQueue\ProviderARNKSegment
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

}
