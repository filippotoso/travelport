<?php

namespace FilippoToso\Travelport\GDSQueue;

class PocketItineraryRemark extends typeAssociatedRemarkWithSegmentRef
{

    /**
     * @param string $RemarkData
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param typeRef $SegmentRef
     */
    public function __construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride, $SegmentRef)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride, $SegmentRef);
    }

}
