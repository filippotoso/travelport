<?php

namespace FilippoToso\Travelport\Rail;

class Air extends typeTransactionsAllowed
{

    /**
     * @var boolean $OneWayShop
     */
    protected $OneWayShop = null;

    /**
     * @var boolean $FlexExplore
     */
    protected $FlexExplore = null;

    /**
     * @var boolean $RapidRepriceEnabled
     */
    protected $RapidRepriceEnabled = null;

    /**
     * @var boolean $ReturnUpsellFare
     */
    protected $ReturnUpsellFare = null;

    /**
     * @var anonymous429 $Tier
     */
    protected $Tier = null;

    /**
     * @var boolean $DaysEnabled
     */
    protected $DaysEnabled = null;

    /**
     * @var boolean $WeekendsEnabled
     */
    protected $WeekendsEnabled = null;

    /**
     * @var boolean $AirportsEnabled
     */
    protected $AirportsEnabled = null;

    /**
     * @var boolean $ODEnabled
     */
    protected $ODEnabled = null;

    /**
     * @param boolean $BookingEnabled
     * @param boolean $ShoppingEnabled
     * @param boolean $PricingEnabled
     * @param boolean $OneWayShop
     * @param boolean $FlexExplore
     * @param boolean $RapidRepriceEnabled
     * @param boolean $ReturnUpsellFare
     * @param anonymous429 $Tier
     * @param boolean $DaysEnabled
     * @param boolean $WeekendsEnabled
     * @param boolean $AirportsEnabled
     * @param boolean $ODEnabled
     */
    public function __construct($BookingEnabled = null, $ShoppingEnabled = null, $PricingEnabled = null, $OneWayShop = null, $FlexExplore = null, $RapidRepriceEnabled = null, $ReturnUpsellFare = null, $Tier = null, $DaysEnabled = null, $WeekendsEnabled = null, $AirportsEnabled = null, $ODEnabled = null)
    {
      parent::__construct($BookingEnabled, $ShoppingEnabled, $PricingEnabled);
      $this->OneWayShop = $OneWayShop;
      $this->FlexExplore = $FlexExplore;
      $this->RapidRepriceEnabled = $RapidRepriceEnabled;
      $this->ReturnUpsellFare = $ReturnUpsellFare;
      $this->Tier = $Tier;
      $this->DaysEnabled = $DaysEnabled;
      $this->WeekendsEnabled = $WeekendsEnabled;
      $this->AirportsEnabled = $AirportsEnabled;
      $this->ODEnabled = $ODEnabled;
    }

    /**
     * @return boolean
     */
    public function getOneWayShop()
    {
      return $this->OneWayShop;
    }

    /**
     * @param boolean $OneWayShop
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setOneWayShop($OneWayShop)
    {
      $this->OneWayShop = $OneWayShop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlexExplore()
    {
      return $this->FlexExplore;
    }

    /**
     * @param boolean $FlexExplore
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setFlexExplore($FlexExplore)
    {
      $this->FlexExplore = $FlexExplore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRapidRepriceEnabled()
    {
      return $this->RapidRepriceEnabled;
    }

    /**
     * @param boolean $RapidRepriceEnabled
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setRapidRepriceEnabled($RapidRepriceEnabled)
    {
      $this->RapidRepriceEnabled = $RapidRepriceEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnUpsellFare()
    {
      return $this->ReturnUpsellFare;
    }

    /**
     * @param boolean $ReturnUpsellFare
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setReturnUpsellFare($ReturnUpsellFare)
    {
      $this->ReturnUpsellFare = $ReturnUpsellFare;
      return $this;
    }

    /**
     * @return anonymous429
     */
    public function getTier()
    {
      return $this->Tier;
    }

    /**
     * @param anonymous429 $Tier
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setTier($Tier)
    {
      $this->Tier = $Tier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysEnabled()
    {
      return $this->DaysEnabled;
    }

    /**
     * @param boolean $DaysEnabled
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setDaysEnabled($DaysEnabled)
    {
      $this->DaysEnabled = $DaysEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWeekendsEnabled()
    {
      return $this->WeekendsEnabled;
    }

    /**
     * @param boolean $WeekendsEnabled
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setWeekendsEnabled($WeekendsEnabled)
    {
      $this->WeekendsEnabled = $WeekendsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirportsEnabled()
    {
      return $this->AirportsEnabled;
    }

    /**
     * @param boolean $AirportsEnabled
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setAirportsEnabled($AirportsEnabled)
    {
      $this->AirportsEnabled = $AirportsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getODEnabled()
    {
      return $this->ODEnabled;
    }

    /**
     * @param boolean $ODEnabled
     * @return \FilippoToso\Travelport\Rail\Air
     */
    public function setODEnabled($ODEnabled)
    {
      $this->ODEnabled = $ODEnabled;
      return $this;
    }

}
