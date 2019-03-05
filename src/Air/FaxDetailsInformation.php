<?php

namespace FilippoToso\Travelport\Air;

class FaxDetailsInformation
{

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var FaxDetails $FaxDetails
     */
    protected $FaxDetails = null;

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param FaxDetails $FaxDetails
     */
    public function __construct($AirPricingInfoRef = null, $FaxDetails = null)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->FaxDetails = $FaxDetails;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Air\FaxDetailsInformation
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return FaxDetails
     */
    public function getFaxDetails()
    {
      return $this->FaxDetails;
    }

    /**
     * @param FaxDetails $FaxDetails
     * @return \FilippoToso\Travelport\Air\FaxDetailsInformation
     */
    public function setFaxDetails($FaxDetails)
    {
      $this->FaxDetails = $FaxDetails;
      return $this;
    }

}
