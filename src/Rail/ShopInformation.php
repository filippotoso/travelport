<?php

namespace FilippoToso\Travelport\Rail;

class ShopInformation
{

    /**
     * @var SearchRequest[] $SearchRequest
     */
    protected $SearchRequest = null;

    /**
     * @var FlightsOffered[] $FlightsOffered
     */
    protected $FlightsOffered = null;

    /**
     * @var string $CabinShopped
     */
    protected $CabinShopped = null;

    /**
     * @var string $CabinSelected
     */
    protected $CabinSelected = null;

    /**
     * @var typeMoney $LowestFareOffered
     */
    protected $LowestFareOffered = null;

    /**
     * @param string $CabinShopped
     * @param string $CabinSelected
     * @param typeMoney $LowestFareOffered
     */
    public function __construct($CabinShopped = null, $CabinSelected = null, $LowestFareOffered = null)
    {
      $this->CabinShopped = $CabinShopped;
      $this->CabinSelected = $CabinSelected;
      $this->LowestFareOffered = $LowestFareOffered;
    }

    /**
     * @return SearchRequest[]
     */
    public function getSearchRequest()
    {
      return $this->SearchRequest;
    }

    /**
     * @param SearchRequest[] $SearchRequest
     * @return \FilippoToso\Travelport\Rail\ShopInformation
     */
    public function setSearchRequest(array $SearchRequest = null)
    {
      $this->SearchRequest = $SearchRequest;
      return $this;
    }

    /**
     * @return FlightsOffered[]
     */
    public function getFlightsOffered()
    {
      return $this->FlightsOffered;
    }

    /**
     * @param FlightsOffered[] $FlightsOffered
     * @return \FilippoToso\Travelport\Rail\ShopInformation
     */
    public function setFlightsOffered(array $FlightsOffered = null)
    {
      $this->FlightsOffered = $FlightsOffered;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinShopped()
    {
      return $this->CabinShopped;
    }

    /**
     * @param string $CabinShopped
     * @return \FilippoToso\Travelport\Rail\ShopInformation
     */
    public function setCabinShopped($CabinShopped)
    {
      $this->CabinShopped = $CabinShopped;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinSelected()
    {
      return $this->CabinSelected;
    }

    /**
     * @param string $CabinSelected
     * @return \FilippoToso\Travelport\Rail\ShopInformation
     */
    public function setCabinSelected($CabinSelected)
    {
      $this->CabinSelected = $CabinSelected;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getLowestFareOffered()
    {
      return $this->LowestFareOffered;
    }

    /**
     * @param typeMoney $LowestFareOffered
     * @return \FilippoToso\Travelport\Rail\ShopInformation
     */
    public function setLowestFareOffered($LowestFareOffered)
    {
      $this->LowestFareOffered = $LowestFareOffered;
      return $this;
    }

}
