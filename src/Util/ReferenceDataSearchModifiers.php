<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataSearchModifiers
{

    /**
     * @var RailStationLocationModifiers $RailStationLocationModifiers
     */
    protected $RailStationLocationModifiers = null;

    /**
     * @var anonymous1142 $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var anonymous1143 $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param RailStationLocationModifiers $RailStationLocationModifiers
     * @param anonymous1142 $MaxResults
     * @param anonymous1143 $StartFromResult
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($RailStationLocationModifiers, $MaxResults, $StartFromResult, $ProviderCode)
    {
      $this->RailStationLocationModifiers = $RailStationLocationModifiers;
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return RailStationLocationModifiers
     */
    public function getRailStationLocationModifiers()
    {
      return $this->RailStationLocationModifiers;
    }

    /**
     * @param RailStationLocationModifiers $RailStationLocationModifiers
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchModifiers
     */
    public function setRailStationLocationModifiers($RailStationLocationModifiers)
    {
      $this->RailStationLocationModifiers = $RailStationLocationModifiers;
      return $this;
    }

    /**
     * @return anonymous1142
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param anonymous1142 $MaxResults
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchModifiers
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return anonymous1143
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param anonymous1143 $StartFromResult
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchModifiers
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchModifiers
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
