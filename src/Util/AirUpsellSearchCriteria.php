<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellSearchCriteria
{

    /**
     * @var AirUpsellOfferSearchCriteria $AirUpsellOfferSearchCriteria
     */
    protected $AirUpsellOfferSearchCriteria = null;

    /**
     * @var AirUpsellQualifySearchCriteria $AirUpsellQualifySearchCriteria
     */
    protected $AirUpsellQualifySearchCriteria = null;

    /**
     * @param AirUpsellOfferSearchCriteria $AirUpsellOfferSearchCriteria
     * @param AirUpsellQualifySearchCriteria $AirUpsellQualifySearchCriteria
     */
    public function __construct($AirUpsellOfferSearchCriteria = null, $AirUpsellQualifySearchCriteria = null)
    {
      $this->AirUpsellOfferSearchCriteria = $AirUpsellOfferSearchCriteria;
      $this->AirUpsellQualifySearchCriteria = $AirUpsellQualifySearchCriteria;
    }

    /**
     * @return AirUpsellOfferSearchCriteria
     */
    public function getAirUpsellOfferSearchCriteria()
    {
      return $this->AirUpsellOfferSearchCriteria;
    }

    /**
     * @param AirUpsellOfferSearchCriteria $AirUpsellOfferSearchCriteria
     * @return \FilippoToso\Travelport\Util\AirUpsellSearchCriteria
     */
    public function setAirUpsellOfferSearchCriteria($AirUpsellOfferSearchCriteria)
    {
      $this->AirUpsellOfferSearchCriteria = $AirUpsellOfferSearchCriteria;
      return $this;
    }

    /**
     * @return AirUpsellQualifySearchCriteria
     */
    public function getAirUpsellQualifySearchCriteria()
    {
      return $this->AirUpsellQualifySearchCriteria;
    }

    /**
     * @param AirUpsellQualifySearchCriteria $AirUpsellQualifySearchCriteria
     * @return \FilippoToso\Travelport\Util\AirUpsellSearchCriteria
     */
    public function setAirUpsellQualifySearchCriteria($AirUpsellQualifySearchCriteria)
    {
      $this->AirUpsellQualifySearchCriteria = $AirUpsellQualifySearchCriteria;
      return $this;
    }

}
