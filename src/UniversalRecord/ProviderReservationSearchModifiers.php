<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationSearchModifiers
{

    /**
     * @var boolean $IncludeAllNames
     */
    protected $IncludeAllNames = null;

    /**
     * @var boolean $IncludeAgentInfo
     */
    protected $IncludeAgentInfo = null;

    /**
     * @var typeMaxResults $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @var boolean $ExcludeAir
     */
    protected $ExcludeAir = null;

    /**
     * @var boolean $ExcludeVehicle
     */
    protected $ExcludeVehicle = null;

    /**
     * @var boolean $ExcludeHotel
     */
    protected $ExcludeHotel = null;

    /**
     * @var boolean $ExcludeGround
     */
    protected $ExcludeGround = null;

    /**
     * @param boolean $IncludeAllNames
     * @param boolean $IncludeAgentInfo
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     * @param boolean $ExcludeAir
     * @param boolean $ExcludeVehicle
     * @param boolean $ExcludeHotel
     * @param boolean $ExcludeGround
     */
    public function __construct($IncludeAllNames = null, $IncludeAgentInfo = null, $MaxResults = null, $StartFromResult = null, $ExcludeAir = null, $ExcludeVehicle = null, $ExcludeHotel = null, $ExcludeGround = null)
    {
      $this->IncludeAllNames = $IncludeAllNames;
      $this->IncludeAgentInfo = $IncludeAgentInfo;
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
      $this->ExcludeAir = $ExcludeAir;
      $this->ExcludeVehicle = $ExcludeVehicle;
      $this->ExcludeHotel = $ExcludeHotel;
      $this->ExcludeGround = $ExcludeGround;
    }

    /**
     * @return boolean
     */
    public function getIncludeAllNames()
    {
      return $this->IncludeAllNames;
    }

    /**
     * @param boolean $IncludeAllNames
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setIncludeAllNames($IncludeAllNames)
    {
      $this->IncludeAllNames = $IncludeAllNames;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAgentInfo()
    {
      return $this->IncludeAgentInfo;
    }

    /**
     * @param boolean $IncludeAgentInfo
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setIncludeAgentInfo($IncludeAgentInfo)
    {
      $this->IncludeAgentInfo = $IncludeAgentInfo;
      return $this;
    }

    /**
     * @return typeMaxResults
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param typeMaxResults $MaxResults
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return typeStartFromResult
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param typeStartFromResult $StartFromResult
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeAir()
    {
      return $this->ExcludeAir;
    }

    /**
     * @param boolean $ExcludeAir
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setExcludeAir($ExcludeAir)
    {
      $this->ExcludeAir = $ExcludeAir;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeVehicle()
    {
      return $this->ExcludeVehicle;
    }

    /**
     * @param boolean $ExcludeVehicle
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setExcludeVehicle($ExcludeVehicle)
    {
      $this->ExcludeVehicle = $ExcludeVehicle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeHotel()
    {
      return $this->ExcludeHotel;
    }

    /**
     * @param boolean $ExcludeHotel
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setExcludeHotel($ExcludeHotel)
    {
      $this->ExcludeHotel = $ExcludeHotel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeGround()
    {
      return $this->ExcludeGround;
    }

    /**
     * @param boolean $ExcludeGround
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationSearchModifiers
     */
    public function setExcludeGround($ExcludeGround)
    {
      $this->ExcludeGround = $ExcludeGround;
      return $this;
    }

}
