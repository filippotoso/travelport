<?php

namespace FilippoToso\Travelport\System;

class typeGuaranteeInformation
{

    /**
     * @var anonymous113 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous114 $AgencyType
     */
    protected $AgencyType = null;

    /**
     * @var StringLength1to128 $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @param anonymous113 $Type
     * @param anonymous114 $AgencyType
     * @param StringLength1to128 $IATANumber
     */
    public function __construct($Type = null, $AgencyType = null, $IATANumber = null)
    {
      $this->Type = $Type;
      $this->AgencyType = $AgencyType;
      $this->IATANumber = $IATANumber;
    }

    /**
     * @return anonymous113
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous113 $Type
     * @return \FilippoToso\Travelport\System\typeGuaranteeInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous114
     */
    public function getAgencyType()
    {
      return $this->AgencyType;
    }

    /**
     * @param anonymous114 $AgencyType
     * @return \FilippoToso\Travelport\System\typeGuaranteeInformation
     */
    public function setAgencyType($AgencyType)
    {
      $this->AgencyType = $AgencyType;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param StringLength1to128 $IATANumber
     * @return \FilippoToso\Travelport\System\typeGuaranteeInformation
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

}
