<?php

namespace FilippoToso\Travelport\GDSQueue;

class SavedTripSearchModifiers extends BaseSearchModifiers
{

    /**
     * @var string $SavedTripName
     */
    protected $SavedTripName = null;

    /**
     * @var boolean $ExcludeURAssociated
     */
    protected $ExcludeURAssociated = null;

    /**
     * @param boolean $IncludeAllNames
     * @param boolean $IncludeAgentInfo
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     * @param boolean $ExcludeAir
     * @param boolean $ExcludeVehicle
     * @param boolean $ExcludeHotel
     * @param string $SavedTripName
     * @param boolean $ExcludeURAssociated
     */
    public function __construct($IncludeAllNames, $IncludeAgentInfo, $MaxResults, $StartFromResult, $ExcludeAir, $ExcludeVehicle, $ExcludeHotel, $SavedTripName, $ExcludeURAssociated)
    {
      parent::__construct($IncludeAllNames, $IncludeAgentInfo, $MaxResults, $StartFromResult, $ExcludeAir, $ExcludeVehicle, $ExcludeHotel);
      $this->SavedTripName = $SavedTripName;
      $this->ExcludeURAssociated = $ExcludeURAssociated;
    }

    /**
     * @return string
     */
    public function getSavedTripName()
    {
      return $this->SavedTripName;
    }

    /**
     * @param string $SavedTripName
     * @return \FilippoToso\Travelport\GDSQueue\SavedTripSearchModifiers
     */
    public function setSavedTripName($SavedTripName)
    {
      $this->SavedTripName = $SavedTripName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeURAssociated()
    {
      return $this->ExcludeURAssociated;
    }

    /**
     * @param boolean $ExcludeURAssociated
     * @return \FilippoToso\Travelport\GDSQueue\SavedTripSearchModifiers
     */
    public function setExcludeURAssociated($ExcludeURAssociated)
    {
      $this->ExcludeURAssociated = $ExcludeURAssociated;
      return $this;
    }

}
