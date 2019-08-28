<?php

namespace FilippoToso\Travelport\GDSQueue;

class ArvlUnknSegment
{

    /**
     * @var BookingTravelerRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var int $TravelOrder
     */
    protected $TravelOrder = null;

    /**
     * @param typeRef $Key
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param int $TravelOrder
     */
    public function __construct($Key = null, $Origin = null, $Destination = null, $TravelOrder = null)
    {
      $this->Key = $Key;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->TravelOrder = $TravelOrder;
    }

    /**
     * @return BookingTravelerRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\ArvlUnknSegment
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\ArvlUnknSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\GDSQueue\ArvlUnknSegment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\GDSQueue\ArvlUnknSegment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\GDSQueue\ArvlUnknSegment
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

}
