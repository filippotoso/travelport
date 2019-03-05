<?php

namespace FilippoToso\Travelport\Air;

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
     * @var anonymous85 $ProviderSegmentOrder
     */
    protected $ProviderSegmentOrder = null;

    /**
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     * @param anonymous85 $ProviderSegmentOrder
     */
    public function __construct($Key = null, $ProviderReservationInfoRef = null, $ProviderSegmentOrder = null)
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
     * @return \FilippoToso\Travelport\Air\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\Air\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\Air\ProviderARNKSegment
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
     * @return \FilippoToso\Travelport\Air\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return anonymous85
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous85 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\Air\ProviderARNKSegment
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

}
