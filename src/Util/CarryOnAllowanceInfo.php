<?php

namespace FilippoToso\Travelport\Util;

class CarryOnAllowanceInfo extends BaseBaggageAllowanceInfo
{

    /**
     * @var CarryOnDetails[] $CarryOnDetails
     */
    protected $CarryOnDetails = null;

    /**
     * @param URLInfo $URLInfo
     * @param TextInfo $TextInfo
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeCarrier $Carrier
     */
    public function __construct($URLInfo, $TextInfo, $Origin, $Destination, $Carrier)
    {
      parent::__construct($URLInfo, $TextInfo, $Origin, $Destination, $Carrier);
    }

    /**
     * @return CarryOnDetails[]
     */
    public function getCarryOnDetails()
    {
      return $this->CarryOnDetails;
    }

    /**
     * @param CarryOnDetails[] $CarryOnDetails
     * @return \FilippoToso\Travelport\Util\CarryOnAllowanceInfo
     */
    public function setCarryOnDetails(array $CarryOnDetails = null)
    {
      $this->CarryOnDetails = $CarryOnDetails;
      return $this;
    }

}
