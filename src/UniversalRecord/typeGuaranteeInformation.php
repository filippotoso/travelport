<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeGuaranteeInformation
{

    /**
     * @var anonymous125 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous126 $AgencyType
     */
    protected $AgencyType = null;

    /**
     * @var StringLength1to128 $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @param anonymous125 $Type
     * @param anonymous126 $AgencyType
     * @param StringLength1to128 $IATANumber
     */
    public function __construct($Type = null, $AgencyType = null, $IATANumber = null)
    {
      $this->Type = $Type;
      $this->AgencyType = $AgencyType;
      $this->IATANumber = $IATANumber;
    }

    /**
     * @return anonymous125
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous125 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\typeGuaranteeInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous126
     */
    public function getAgencyType()
    {
      return $this->AgencyType;
    }

    /**
     * @param anonymous126 $AgencyType
     * @return \FilippoToso\Travelport\UniversalRecord\typeGuaranteeInformation
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeGuaranteeInformation
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

}
