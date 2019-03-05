<?php

namespace FilippoToso\Travelport\Hotel;

class HotelRulesLookup
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var HotelStay $HotelStay
     */
    protected $HotelStay = null;

    /**
     * @var HotelRulesModifiers $HotelRulesModifiers
     */
    protected $HotelRulesModifiers = null;

    /**
     * @var string $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @var typeMoney $Base
     */
    protected $Base = null;

    /**
     * @var anonymous664 $RulesDetailReqd
     */
    protected $RulesDetailReqd = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelStay $HotelStay
     * @param HotelRulesModifiers $HotelRulesModifiers
     * @param string $RatePlanType
     * @param typeMoney $Base
     * @param anonymous664 $RulesDetailReqd
     */
    public function __construct($HotelProperty = null, $HotelStay = null, $HotelRulesModifiers = null, $RatePlanType = null, $Base = null, $RulesDetailReqd = null)
    {
      $this->HotelProperty = $HotelProperty;
      $this->HotelStay = $HotelStay;
      $this->HotelRulesModifiers = $HotelRulesModifiers;
      $this->RatePlanType = $RatePlanType;
      $this->Base = $Base;
      $this->RulesDetailReqd = $RulesDetailReqd;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return HotelRulesModifiers
     */
    public function getHotelRulesModifiers()
    {
      return $this->HotelRulesModifiers;
    }

    /**
     * @param HotelRulesModifiers $HotelRulesModifiers
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setHotelRulesModifiers($HotelRulesModifiers)
    {
      $this->HotelRulesModifiers = $HotelRulesModifiers;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanType()
    {
      return $this->RatePlanType;
    }

    /**
     * @param string $RatePlanType
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param typeMoney $Base
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return anonymous664
     */
    public function getRulesDetailReqd()
    {
      return $this->RulesDetailReqd;
    }

    /**
     * @param anonymous664 $RulesDetailReqd
     * @return \FilippoToso\Travelport\Hotel\HotelRulesLookup
     */
    public function setRulesDetailReqd($RulesDetailReqd)
    {
      $this->RulesDetailReqd = $RulesDetailReqd;
      return $this;
    }

}
