<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct($IncludeAllNames = null, $IncludeAgentInfo = null, $MaxResults = null, $StartFromResult = null, $ExcludeAir = null, $ExcludeVehicle = null, $ExcludeHotel = null)
    {
      parent::__construct($IncludeAllNames, $IncludeAgentInfo, $MaxResults, $StartFromResult, $ExcludeAir, $ExcludeVehicle, $ExcludeHotel);
    }

}
