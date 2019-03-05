<?php

namespace FilippoToso\Travelport\Util;

class AssociatedRemark extends typeAssociatedRemarkWithSegmentRef
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
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null, $ElStat = null, $KeyOverride = null, $SegmentRef = null)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride, $SegmentRef);
    }

}
