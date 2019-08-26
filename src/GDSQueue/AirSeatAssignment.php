<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirSeatAssignment extends SeatAssignment
{

    /**
     * @param typeRef $Key
     * @param typeStatusCode $Status
     * @param string $Seat
     * @param typeSeatTypeCode $SeatTypeCode
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailsRef
     * @param string $RailCoachNumber
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key, $Status, $Seat, $SeatTypeCode, $SegmentRef, $FlightDetailsRef, $RailCoachNumber, $ElStat, $KeyOverride)
    {
      parent::__construct($Key, $Status, $Seat, $SeatTypeCode, $SegmentRef, $FlightDetailsRef, $RailCoachNumber, $ElStat, $KeyOverride);
    }

}
