<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellSearchCriteria
{

    /**
     * @var HotelUpsellOfferSearchCriteria $HotelUpsellOfferSearchCriteria
     */
    protected $HotelUpsellOfferSearchCriteria = null;

    /**
     * @var HotelUpsellQualifySearchCriteria $HotelUpsellQualifySearchCriteria
     */
    protected $HotelUpsellQualifySearchCriteria = null;

    /**
     * @param HotelUpsellOfferSearchCriteria $HotelUpsellOfferSearchCriteria
     * @param HotelUpsellQualifySearchCriteria $HotelUpsellQualifySearchCriteria
     */
    public function __construct($HotelUpsellOfferSearchCriteria = null, $HotelUpsellQualifySearchCriteria = null)
    {
      $this->HotelUpsellOfferSearchCriteria = $HotelUpsellOfferSearchCriteria;
      $this->HotelUpsellQualifySearchCriteria = $HotelUpsellQualifySearchCriteria;
    }

    /**
     * @return HotelUpsellOfferSearchCriteria
     */
    public function getHotelUpsellOfferSearchCriteria()
    {
      return $this->HotelUpsellOfferSearchCriteria;
    }

    /**
     * @param HotelUpsellOfferSearchCriteria $HotelUpsellOfferSearchCriteria
     * @return \FilippoToso\Travelport\Util\HotelUpsellSearchCriteria
     */
    public function setHotelUpsellOfferSearchCriteria($HotelUpsellOfferSearchCriteria)
    {
      $this->HotelUpsellOfferSearchCriteria = $HotelUpsellOfferSearchCriteria;
      return $this;
    }

    /**
     * @return HotelUpsellQualifySearchCriteria
     */
    public function getHotelUpsellQualifySearchCriteria()
    {
      return $this->HotelUpsellQualifySearchCriteria;
    }

    /**
     * @param HotelUpsellQualifySearchCriteria $HotelUpsellQualifySearchCriteria
     * @return \FilippoToso\Travelport\Util\HotelUpsellSearchCriteria
     */
    public function setHotelUpsellQualifySearchCriteria($HotelUpsellQualifySearchCriteria)
    {
      $this->HotelUpsellQualifySearchCriteria = $HotelUpsellQualifySearchCriteria;
      return $this;
    }

}
