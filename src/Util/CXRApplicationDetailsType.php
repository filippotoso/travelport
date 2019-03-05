<?php

namespace FilippoToso\Travelport\Util;

class CXRApplicationDetailsType
{

    /**
     * @var CXRApplication[] $CXRApplication
     */
    protected $CXRApplication = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CXRApplication[]
     */
    public function getCXRApplication()
    {
      return $this->CXRApplication;
    }

    /**
     * @param CXRApplication[] $CXRApplication
     * @return \FilippoToso\Travelport\Util\CXRApplicationDetailsType
     */
    public function setCXRApplication(array $CXRApplication = null)
    {
      $this->CXRApplication = $CXRApplication;
      return $this;
    }

}
