<?php

namespace FilippoToso\Travelport\Air;

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
    public function __construct($URLInfo = null, $TextInfo = null, $Origin = null, $Destination = null, $Carrier = null)
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
     * @return \FilippoToso\Travelport\Air\CarryOnAllowanceInfo
     */
    public function setCarryOnDetails(array $CarryOnDetails = null)
    {
      $this->CarryOnDetails = $CarryOnDetails;
      return $this;
    }

}
