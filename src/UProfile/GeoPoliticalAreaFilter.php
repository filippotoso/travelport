<?php

namespace FilippoToso\Travelport\UProfile;

class GeoPoliticalAreaFilter
{

    /**
     * @var typeGeoPoliticalAreaFilterType $FilterType
     */
    protected $FilterType = null;

    /**
     * @var typeGeoPoliticalAreaType $GeoPoliticalAreaType
     */
    protected $GeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     */
    protected $GeoPoliticalAreaCode = null;

    /**
     * @param typeGeoPoliticalAreaFilterType $FilterType
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     */
    public function __construct($FilterType = null, $GeoPoliticalAreaType = null, $GeoPoliticalAreaCode = null)
    {
      $this->FilterType = $FilterType;
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
    }

    /**
     * @return typeGeoPoliticalAreaFilterType
     */
    public function getFilterType()
    {
      return $this->FilterType;
    }

    /**
     * @param typeGeoPoliticalAreaFilterType $FilterType
     * @return \FilippoToso\Travelport\UProfile\GeoPoliticalAreaFilter
     */
    public function setFilterType($FilterType)
    {
      $this->FilterType = $FilterType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getGeoPoliticalAreaType()
    {
      return $this->GeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\GeoPoliticalAreaFilter
     */
    public function setGeoPoliticalAreaType($GeoPoliticalAreaType)
    {
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getGeoPoliticalAreaCode()
    {
      return $this->GeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\GeoPoliticalAreaFilter
     */
    public function setGeoPoliticalAreaCode($GeoPoliticalAreaCode)
    {
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
      return $this;
    }

}
