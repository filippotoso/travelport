<?php

namespace FilippoToso\Travelport\Rail;

class HotelRulesModifiers
{

    /**
     * @var PermittedProviders $PermittedProviders
     */
    protected $PermittedProviders = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    protected $HotelBedding = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var int $NumberOfAdults
     */
    protected $NumberOfAdults = null;

    /**
     * @var int $NumberOfRooms
     */
    protected $NumberOfRooms = null;

    /**
     * @var int $TotalOccupants
     */
    protected $TotalOccupants = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param PermittedProviders $PermittedProviders
     * @param NumberOfChildren $NumberOfChildren
     * @param HotelBedding $HotelBedding
     * @param CorporateDiscountID $CorporateDiscountID
     * @param int $NumberOfAdults
     * @param int $NumberOfRooms
     * @param int $TotalOccupants
     * @param typeRef $Key
     */
    public function __construct($PermittedProviders = null, $NumberOfChildren = null, $HotelBedding = null, $CorporateDiscountID = null, $NumberOfAdults = null, $NumberOfRooms = null, $TotalOccupants = null, $Key = null)
    {
      $this->PermittedProviders = $PermittedProviders;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->HotelBedding = $HotelBedding;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->NumberOfAdults = $NumberOfAdults;
      $this->NumberOfRooms = $NumberOfRooms;
      $this->TotalOccupants = $TotalOccupants;
      $this->Key = $Key;
    }

    /**
     * @return PermittedProviders
     */
    public function getPermittedProviders()
    {
      return $this->PermittedProviders;
    }

    /**
     * @param PermittedProviders $PermittedProviders
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
      return $this;
    }

    /**
     * @return NumberOfChildren
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param NumberOfChildren $NumberOfChildren
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->NumberOfRooms;
    }

    /**
     * @param int $NumberOfRooms
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalOccupants()
    {
      return $this->TotalOccupants;
    }

    /**
     * @param int $TotalOccupants
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setTotalOccupants($TotalOccupants)
    {
      $this->TotalOccupants = $TotalOccupants;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\HotelRulesModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
