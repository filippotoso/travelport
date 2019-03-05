<?php

namespace FilippoToso\Travelport\Hotel;

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
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride);
    }

}
