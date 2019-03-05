<?php

namespace FilippoToso\Travelport\Air;

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
     * @return \FilippoToso\Travelport\Air\CXRApplicationDetailsType
     */
    public function setCXRApplication(array $CXRApplication = null)
    {
      $this->CXRApplication = $CXRApplication;
      return $this;
    }

}
