<?php

namespace FilippoToso\Travelport\Rail;

class SolutionGroup
{

    /**
     * @var PermittedAccountCodes $PermittedAccountCodes
     */
    protected $PermittedAccountCodes = null;

    /**
     * @var PreferredAccountCodes $PreferredAccountCodes
     */
    protected $PreferredAccountCodes = null;

    /**
     * @var ProhibitedAccountCodes $ProhibitedAccountCodes
     */
    protected $ProhibitedAccountCodes = null;

    /**
     * @var PermittedPointOfSales $PermittedPointOfSales
     */
    protected $PermittedPointOfSales = null;

    /**
     * @var ProhibitedPointOfSales $ProhibitedPointOfSales
     */
    protected $ProhibitedPointOfSales = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var typeTripType $TripType
     */
    protected $TripType = null;

    /**
     * @var typeDiversity $Diversification
     */
    protected $Diversification = null;

    /**
     * @var anonymous644 $Tag
     */
    protected $Tag = null;

    /**
     * @var boolean $Primary
     */
    protected $Primary = null;

    /**
     * @param int $Count
     * @param typeTripType $TripType
     * @param typeDiversity $Diversification
     * @param anonymous644 $Tag
     * @param boolean $Primary
     */
    public function __construct($Count = null, $TripType = null, $Diversification = null, $Tag = null, $Primary = null)
    {
      $this->Count = $Count;
      $this->TripType = $TripType;
      $this->Diversification = $Diversification;
      $this->Tag = $Tag;
      $this->Primary = $Primary;
    }

    /**
     * @return PermittedAccountCodes
     */
    public function getPermittedAccountCodes()
    {
      return $this->PermittedAccountCodes;
    }

    /**
     * @param PermittedAccountCodes $PermittedAccountCodes
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setPermittedAccountCodes($PermittedAccountCodes)
    {
      $this->PermittedAccountCodes = $PermittedAccountCodes;
      return $this;
    }

    /**
     * @return PreferredAccountCodes
     */
    public function getPreferredAccountCodes()
    {
      return $this->PreferredAccountCodes;
    }

    /**
     * @param PreferredAccountCodes $PreferredAccountCodes
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setPreferredAccountCodes($PreferredAccountCodes)
    {
      $this->PreferredAccountCodes = $PreferredAccountCodes;
      return $this;
    }

    /**
     * @return ProhibitedAccountCodes
     */
    public function getProhibitedAccountCodes()
    {
      return $this->ProhibitedAccountCodes;
    }

    /**
     * @param ProhibitedAccountCodes $ProhibitedAccountCodes
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setProhibitedAccountCodes($ProhibitedAccountCodes)
    {
      $this->ProhibitedAccountCodes = $ProhibitedAccountCodes;
      return $this;
    }

    /**
     * @return PermittedPointOfSales
     */
    public function getPermittedPointOfSales()
    {
      return $this->PermittedPointOfSales;
    }

    /**
     * @param PermittedPointOfSales $PermittedPointOfSales
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setPermittedPointOfSales($PermittedPointOfSales)
    {
      $this->PermittedPointOfSales = $PermittedPointOfSales;
      return $this;
    }

    /**
     * @return ProhibitedPointOfSales
     */
    public function getProhibitedPointOfSales()
    {
      return $this->ProhibitedPointOfSales;
    }

    /**
     * @param ProhibitedPointOfSales $ProhibitedPointOfSales
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setProhibitedPointOfSales($ProhibitedPointOfSales)
    {
      $this->ProhibitedPointOfSales = $ProhibitedPointOfSales;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

    /**
     * @return typeTripType
     */
    public function getTripType()
    {
      return $this->TripType;
    }

    /**
     * @param typeTripType $TripType
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setTripType($TripType)
    {
      $this->TripType = $TripType;
      return $this;
    }

    /**
     * @return typeDiversity
     */
    public function getDiversification()
    {
      return $this->Diversification;
    }

    /**
     * @param typeDiversity $Diversification
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setDiversification($Diversification)
    {
      $this->Diversification = $Diversification;
      return $this;
    }

    /**
     * @return anonymous644
     */
    public function getTag()
    {
      return $this->Tag;
    }

    /**
     * @param anonymous644 $Tag
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setTag($Tag)
    {
      $this->Tag = $Tag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimary()
    {
      return $this->Primary;
    }

    /**
     * @param boolean $Primary
     * @return \FilippoToso\Travelport\Rail\SolutionGroup
     */
    public function setPrimary($Primary)
    {
      $this->Primary = $Primary;
      return $this;
    }

}
