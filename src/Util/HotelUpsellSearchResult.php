<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellSearchResult
{

    /**
     * @var HotelUpsellQualify $HotelUpsellQualify
     */
    protected $HotelUpsellQualify = null;

    /**
     * @var HotelUpsellOffer $HotelUpsellOffer
     */
    protected $HotelUpsellOffer = null;

    /**
     * @param HotelUpsellQualify $HotelUpsellQualify
     * @param HotelUpsellOffer $HotelUpsellOffer
     */
    public function __construct($HotelUpsellQualify = null, $HotelUpsellOffer = null)
    {
      $this->HotelUpsellQualify = $HotelUpsellQualify;
      $this->HotelUpsellOffer = $HotelUpsellOffer;
    }

    /**
     * @return HotelUpsellQualify
     */
    public function getHotelUpsellQualify()
    {
      return $this->HotelUpsellQualify;
    }

    /**
     * @param HotelUpsellQualify $HotelUpsellQualify
     * @return \FilippoToso\Travelport\Util\HotelUpsellSearchResult
     */
    public function setHotelUpsellQualify($HotelUpsellQualify)
    {
      $this->HotelUpsellQualify = $HotelUpsellQualify;
      return $this;
    }

    /**
     * @return HotelUpsellOffer
     */
    public function getHotelUpsellOffer()
    {
      return $this->HotelUpsellOffer;
    }

    /**
     * @param HotelUpsellOffer $HotelUpsellOffer
     * @return \FilippoToso\Travelport\Util\HotelUpsellSearchResult
     */
    public function setHotelUpsellOffer($HotelUpsellOffer)
    {
      $this->HotelUpsellOffer = $HotelUpsellOffer;
      return $this;
    }

}
