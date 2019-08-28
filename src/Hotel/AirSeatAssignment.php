<?php

namespace FilippoToso\Travelport\Hotel;

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
    public function __construct($Key = null, $Status = null, $Seat = null, $SeatTypeCode = null, $SegmentRef = null, $FlightDetailsRef = null, $RailCoachNumber = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($Key, $Status, $Seat, $SeatTypeCode, $SegmentRef, $FlightDetailsRef, $RailCoachNumber, $ElStat, $KeyOverride);
    }

}
