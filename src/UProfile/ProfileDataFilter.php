<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDataFilter
{

    /**
     * @var typeProfileDataCategory $ProfileDataCategory
     */
    protected $ProfileDataCategory = null;

    /**
     * @var GeoPoliticalAreaFilter $GeoPoliticalAreaFilter
     */
    protected $GeoPoliticalAreaFilter = null;

    /**
     * @param typeProfileDataCategory $ProfileDataCategory
     * @param GeoPoliticalAreaFilter $GeoPoliticalAreaFilter
     */
    public function __construct($ProfileDataCategory = null, $GeoPoliticalAreaFilter = null)
    {
      $this->ProfileDataCategory = $ProfileDataCategory;
      $this->GeoPoliticalAreaFilter = $GeoPoliticalAreaFilter;
    }

    /**
     * @return typeProfileDataCategory
     */
    public function getProfileDataCategory()
    {
      return $this->ProfileDataCategory;
    }

    /**
     * @param typeProfileDataCategory $ProfileDataCategory
     * @return \FilippoToso\Travelport\UProfile\ProfileDataFilter
     */
    public function setProfileDataCategory($ProfileDataCategory)
    {
      $this->ProfileDataCategory = $ProfileDataCategory;
      return $this;
    }

    /**
     * @return GeoPoliticalAreaFilter
     */
    public function getGeoPoliticalAreaFilter()
    {
      return $this->GeoPoliticalAreaFilter;
    }

    /**
     * @param GeoPoliticalAreaFilter $GeoPoliticalAreaFilter
     * @return \FilippoToso\Travelport\UProfile\ProfileDataFilter
     */
    public function setGeoPoliticalAreaFilter($GeoPoliticalAreaFilter)
    {
      $this->GeoPoliticalAreaFilter = $GeoPoliticalAreaFilter;
      return $this;
    }

}
