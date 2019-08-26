<?php

namespace FilippoToso\Travelport\Rail;

class UniversalRecordSearchModifiers extends BaseSearchModifiers
{

    /**
     * @param boolean $IncludeAllNames
     * @param boolean $IncludeAgentInfo
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     * @param boolean $ExcludeAir
     * @param boolean $ExcludeVehicle
     * @param boolean $ExcludeHotel
     */
    public function __construct($IncludeAllNames, $IncludeAgentInfo, $MaxResults, $StartFromResult, $ExcludeAir, $ExcludeVehicle, $ExcludeHotel)
    {
      parent::__construct($IncludeAllNames, $IncludeAgentInfo, $MaxResults, $StartFromResult, $ExcludeAir, $ExcludeVehicle, $ExcludeHotel);
    }

}
