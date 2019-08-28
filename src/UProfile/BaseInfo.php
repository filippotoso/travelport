<?php

namespace FilippoToso\Travelport\UProfile;

class BaseInfo
{

    /**
     * @var AgencyBaseInfo $AgencyBaseInfo
     */
    protected $AgencyBaseInfo = null;

    /**
     * @var BranchBaseInfo $BranchBaseInfo
     */
    protected $BranchBaseInfo = null;

    /**
     * @param AgencyBaseInfo $AgencyBaseInfo
     * @param BranchBaseInfo $BranchBaseInfo
     */
    public function __construct($AgencyBaseInfo = null, $BranchBaseInfo = null)
    {
      $this->AgencyBaseInfo = $AgencyBaseInfo;
      $this->BranchBaseInfo = $BranchBaseInfo;
    }

    /**
     * @return AgencyBaseInfo
     */
    public function getAgencyBaseInfo()
    {
      return $this->AgencyBaseInfo;
    }

    /**
     * @param AgencyBaseInfo $AgencyBaseInfo
     * @return \FilippoToso\Travelport\UProfile\BaseInfo
     */
    public function setAgencyBaseInfo($AgencyBaseInfo)
    {
      $this->AgencyBaseInfo = $AgencyBaseInfo;
      return $this;
    }

    /**
     * @return BranchBaseInfo
     */
    public function getBranchBaseInfo()
    {
      return $this->BranchBaseInfo;
    }

    /**
     * @param BranchBaseInfo $BranchBaseInfo
     * @return \FilippoToso\Travelport\UProfile\BaseInfo
     */
    public function setBranchBaseInfo($BranchBaseInfo)
    {
      $this->BranchBaseInfo = $BranchBaseInfo;
      return $this;
    }

}
