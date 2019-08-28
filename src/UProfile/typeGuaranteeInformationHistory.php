<?php

namespace FilippoToso\Travelport\UProfile;

class typeGuaranteeInformationHistory
{

    /**
     * @var anonymous926 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous927 $AgencyType
     */
    protected $AgencyType = null;

    /**
     * @var StringLength1to128 $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @param anonymous926 $Type
     * @param anonymous927 $AgencyType
     * @param StringLength1to128 $IATANumber
     */
    public function __construct($Type = null, $AgencyType = null, $IATANumber = null)
    {
      $this->Type = $Type;
      $this->AgencyType = $AgencyType;
      $this->IATANumber = $IATANumber;
    }

    /**
     * @return anonymous926
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous926 $Type
     * @return \FilippoToso\Travelport\UProfile\typeGuaranteeInformationHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous927
     */
    public function getAgencyType()
    {
      return $this->AgencyType;
    }

    /**
     * @param anonymous927 $AgencyType
     * @return \FilippoToso\Travelport\UProfile\typeGuaranteeInformationHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeGuaranteeInformationHistory
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

}
