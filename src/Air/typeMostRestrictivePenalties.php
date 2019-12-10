<?php

namespace FilippoToso\Travelport\Air;

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
     * @return \FilippoToso\Travelport\Air\typeMostRestrictivePenalties
     */
    public function setRestrictionType(array $RestrictionType = null)
    {
      $this->RestrictionType = $RestrictionType;
      return $this;
    }

}
