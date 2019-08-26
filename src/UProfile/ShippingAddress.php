<?php

namespace FilippoToso\Travelport\UProfile;

class ShippingAddress extends typeStructuredAddress
{

    /**
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride)
    {
      parent::__construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride);
    }

}
