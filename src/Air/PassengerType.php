<?php

namespace FilippoToso\Travelport\Air;

class PassengerType
{

    /**
     * @var FareGuaranteeInfo $FareGuaranteeInfo
     */
    protected $FareGuaranteeInfo = null;

    /**
     * @param FareGuaranteeInfo $FareGuaranteeInfo
     */
    public function __construct($FareGuaranteeInfo = null)
    {
      $this->FareGuaranteeInfo = $FareGuaranteeInfo;
    }

    /**
     * @return FareGuaranteeInfo
     */
    public function getFareGuaranteeInfo()
    {
      return $this->FareGuaranteeInfo;
    }

    /**
     * @param FareGuaranteeInfo $FareGuaranteeInfo
     * @return \FilippoToso\Travelport\Air\PassengerType
     */
    public function setFareGuaranteeInfo($FareGuaranteeInfo)
    {
      $this->FareGuaranteeInfo = $FareGuaranteeInfo;
      return $this;
    }

}
