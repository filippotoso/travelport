<?php

namespace FilippoToso\Travelport\Rail;

class AssociatedRemark extends typeAssociatedRemark
{

    /**
     * @param string $RemarkData
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride);
    }

}
