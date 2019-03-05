<?php

namespace FilippoToso\Travelport\Hotel;

class ShippingAddress extends typeStructuredAddress
{

    /**
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($State = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride);
    }

}
