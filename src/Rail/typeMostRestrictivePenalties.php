<?php

namespace FilippoToso\Travelport\Rail;

class typeMostRestrictivePenalties
{

    /**
     * @var typeRestrictionData[] $RestrictionType
     */
    protected $RestrictionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeRestrictionData[]
     */
    public function getRestrictionType()
    {
      return $this->RestrictionType;
    }

    /**
     * @param typeRestrictionData[] $RestrictionType
     * @return \FilippoToso\Travelport\Rail\typeMostRestrictivePenalties
     */
    public function setRestrictionType(array $RestrictionType = null)
    {
      $this->RestrictionType = $RestrictionType;
      return $this;
    }

}
