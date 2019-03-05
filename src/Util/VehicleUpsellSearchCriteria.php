<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellSearchCriteria
{

    /**
     * @var VehicleUpsellOfferSearchCriteria $VehicleUpsellOfferSearchCriteria
     */
    protected $VehicleUpsellOfferSearchCriteria = null;

    /**
     * @var VehicleUpsellQualifySearchCriteria $VehicleUpsellQualifySearchCriteria
     */
    protected $VehicleUpsellQualifySearchCriteria = null;

    /**
     * @param VehicleUpsellOfferSearchCriteria $VehicleUpsellOfferSearchCriteria
     * @param VehicleUpsellQualifySearchCriteria $VehicleUpsellQualifySearchCriteria
     */
    public function __construct($VehicleUpsellOfferSearchCriteria = null, $VehicleUpsellQualifySearchCriteria = null)
    {
      $this->VehicleUpsellOfferSearchCriteria = $VehicleUpsellOfferSearchCriteria;
      $this->VehicleUpsellQualifySearchCriteria = $VehicleUpsellQualifySearchCriteria;
    }

    /**
     * @return VehicleUpsellOfferSearchCriteria
     */
    public function getVehicleUpsellOfferSearchCriteria()
    {
      return $this->VehicleUpsellOfferSearchCriteria;
    }

    /**
     * @param VehicleUpsellOfferSearchCriteria $VehicleUpsellOfferSearchCriteria
     * @return \FilippoToso\Travelport\Util\VehicleUpsellSearchCriteria
     */
    public function setVehicleUpsellOfferSearchCriteria($VehicleUpsellOfferSearchCriteria)
    {
      $this->VehicleUpsellOfferSearchCriteria = $VehicleUpsellOfferSearchCriteria;
      return $this;
    }

    /**
     * @return VehicleUpsellQualifySearchCriteria
     */
    public function getVehicleUpsellQualifySearchCriteria()
    {
      return $this->VehicleUpsellQualifySearchCriteria;
    }

    /**
     * @param VehicleUpsellQualifySearchCriteria $VehicleUpsellQualifySearchCriteria
     * @return \FilippoToso\Travelport\Util\VehicleUpsellSearchCriteria
     */
    public function setVehicleUpsellQualifySearchCriteria($VehicleUpsellQualifySearchCriteria)
    {
      $this->VehicleUpsellQualifySearchCriteria = $VehicleUpsellQualifySearchCriteria;
      return $this;
    }

}
