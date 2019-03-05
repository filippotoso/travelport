<?php

namespace FilippoToso\Travelport\Air;

class AirLegModifiers
{

    /**
     * @var PermittedCabins $PermittedCabins
     */
    protected $PermittedCabins = null;

    /**
     * @var PreferredCabins $PreferredCabins
     */
    protected $PreferredCabins = null;

    /**
     * @var PermittedCarriers $PermittedCarriers
     */
    protected $PermittedCarriers = null;

    /**
     * @var ProhibitedCarriers $ProhibitedCarriers
     */
    protected $ProhibitedCarriers = null;

    /**
     * @var PreferredCarriers $PreferredCarriers
     */
    protected $PreferredCarriers = null;

    /**
     * @var PermittedConnectionPoints $PermittedConnectionPoints
     */
    protected $PermittedConnectionPoints = null;

    /**
     * @var ProhibitedConnectionPoints $ProhibitedConnectionPoints
     */
    protected $ProhibitedConnectionPoints = null;

    /**
     * @var PreferredConnectionPoints $PreferredConnectionPoints
     */
    protected $PreferredConnectionPoints = null;

    /**
     * @var PermittedBookingCodes $PermittedBookingCodes
     */
    protected $PermittedBookingCodes = null;

    /**
     * @var PreferredBookingCodes $PreferredBookingCodes
     */
    protected $PreferredBookingCodes = null;

    /**
     * @var PreferredAlliances $PreferredAlliances
     */
    protected $PreferredAlliances = null;

    /**
     * @var ProhibitedBookingCodes $ProhibitedBookingCodes
     */
    protected $ProhibitedBookingCodes = null;

    /**
     * @var DisfavoredAlliances $DisfavoredAlliances
     */
    protected $DisfavoredAlliances = null;

    /**
     * @var FlightType $FlightType
     */
    protected $FlightType = null;

    /**
     * @var typeAnchorFlightData $AnchorFlightData
     */
    protected $AnchorFlightData = null;

    /**
     * @var boolean $ProhibitOvernightLayovers
     */
    protected $ProhibitOvernightLayovers = null;

    /**
     * @var int $MaxConnectionTime
     */
    protected $MaxConnectionTime = null;

    /**
     * @var boolean $ReturnFirstAvailableOnly
     */
    protected $ReturnFirstAvailableOnly = null;

    /**
     * @var boolean $AllowDirectAccess
     */
    protected $AllowDirectAccess = null;

    /**
     * @var boolean $ProhibitMultiAirportConnection
     */
    protected $ProhibitMultiAirportConnection = null;

    /**
     * @var boolean $PreferNonStop
     */
    protected $PreferNonStop = null;

    /**
     * @var anonymous726 $OrderBy
     */
    protected $OrderBy = null;

    /**
     * @var typeMaxJourneyTime $MaxJourneyTime
     */
    protected $MaxJourneyTime = null;

    /**
     * @param PermittedCabins $PermittedCabins
     * @param PreferredCabins $PreferredCabins
     * @param PermittedCarriers $PermittedCarriers
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @param PreferredCarriers $PreferredCarriers
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @param FlightType $FlightType
     * @param boolean $ProhibitOvernightLayovers
     * @param int $MaxConnectionTime
     * @param boolean $ReturnFirstAvailableOnly
     * @param boolean $AllowDirectAccess
     * @param boolean $ProhibitMultiAirportConnection
     * @param boolean $PreferNonStop
     * @param anonymous726 $OrderBy
     * @param typeMaxJourneyTime $MaxJourneyTime
     */
    public function __construct($PermittedCabins = null, $PreferredCabins = null, $PermittedCarriers = null, $ProhibitedCarriers = null, $PreferredCarriers = null, $PreferredBookingCodes = null, $FlightType = null, $ProhibitOvernightLayovers = null, $MaxConnectionTime = null, $ReturnFirstAvailableOnly = null, $AllowDirectAccess = null, $ProhibitMultiAirportConnection = null, $PreferNonStop = null, $OrderBy = null, $MaxJourneyTime = null)
    {
      $this->PermittedCabins = $PermittedCabins;
      $this->PreferredCabins = $PreferredCabins;
      $this->PermittedCarriers = $PermittedCarriers;
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      $this->PreferredCarriers = $PreferredCarriers;
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      $this->FlightType = $FlightType;
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      $this->MaxConnectionTime = $MaxConnectionTime;
      $this->ReturnFirstAvailableOnly = $ReturnFirstAvailableOnly;
      $this->AllowDirectAccess = $AllowDirectAccess;
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      $this->PreferNonStop = $PreferNonStop;
      $this->OrderBy = $OrderBy;
      $this->MaxJourneyTime = $MaxJourneyTime;
    }

    /**
     * @return PermittedCabins
     */
    public function getPermittedCabins()
    {
      return $this->PermittedCabins;
    }

    /**
     * @param PermittedCabins $PermittedCabins
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPermittedCabins($PermittedCabins)
    {
      $this->PermittedCabins = $PermittedCabins;
      return $this;
    }

    /**
     * @return PreferredCabins
     */
    public function getPreferredCabins()
    {
      return $this->PreferredCabins;
    }

    /**
     * @param PreferredCabins $PreferredCabins
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferredCabins($PreferredCabins)
    {
      $this->PreferredCabins = $PreferredCabins;
      return $this;
    }

    /**
     * @return PermittedCarriers
     */
    public function getPermittedCarriers()
    {
      return $this->PermittedCarriers;
    }

    /**
     * @param PermittedCarriers $PermittedCarriers
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPermittedCarriers($PermittedCarriers)
    {
      $this->PermittedCarriers = $PermittedCarriers;
      return $this;
    }

    /**
     * @return ProhibitedCarriers
     */
    public function getProhibitedCarriers()
    {
      return $this->ProhibitedCarriers;
    }

    /**
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setProhibitedCarriers($ProhibitedCarriers)
    {
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      return $this;
    }

    /**
     * @return PreferredCarriers
     */
    public function getPreferredCarriers()
    {
      return $this->PreferredCarriers;
    }

    /**
     * @param PreferredCarriers $PreferredCarriers
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferredCarriers($PreferredCarriers)
    {
      $this->PreferredCarriers = $PreferredCarriers;
      return $this;
    }

    /**
     * @return PermittedConnectionPoints
     */
    public function getPermittedConnectionPoints()
    {
      return $this->PermittedConnectionPoints;
    }

    /**
     * @param PermittedConnectionPoints $PermittedConnectionPoints
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPermittedConnectionPoints($PermittedConnectionPoints)
    {
      $this->PermittedConnectionPoints = $PermittedConnectionPoints;
      return $this;
    }

    /**
     * @return ProhibitedConnectionPoints
     */
    public function getProhibitedConnectionPoints()
    {
      return $this->ProhibitedConnectionPoints;
    }

    /**
     * @param ProhibitedConnectionPoints $ProhibitedConnectionPoints
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setProhibitedConnectionPoints($ProhibitedConnectionPoints)
    {
      $this->ProhibitedConnectionPoints = $ProhibitedConnectionPoints;
      return $this;
    }

    /**
     * @return PreferredConnectionPoints
     */
    public function getPreferredConnectionPoints()
    {
      return $this->PreferredConnectionPoints;
    }

    /**
     * @param PreferredConnectionPoints $PreferredConnectionPoints
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferredConnectionPoints($PreferredConnectionPoints)
    {
      $this->PreferredConnectionPoints = $PreferredConnectionPoints;
      return $this;
    }

    /**
     * @return PermittedBookingCodes
     */
    public function getPermittedBookingCodes()
    {
      return $this->PermittedBookingCodes;
    }

    /**
     * @param PermittedBookingCodes $PermittedBookingCodes
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPermittedBookingCodes($PermittedBookingCodes)
    {
      $this->PermittedBookingCodes = $PermittedBookingCodes;
      return $this;
    }

    /**
     * @return PreferredBookingCodes
     */
    public function getPreferredBookingCodes()
    {
      return $this->PreferredBookingCodes;
    }

    /**
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferredBookingCodes($PreferredBookingCodes)
    {
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      return $this;
    }

    /**
     * @return PreferredAlliances
     */
    public function getPreferredAlliances()
    {
      return $this->PreferredAlliances;
    }

    /**
     * @param PreferredAlliances $PreferredAlliances
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferredAlliances($PreferredAlliances)
    {
      $this->PreferredAlliances = $PreferredAlliances;
      return $this;
    }

    /**
     * @return ProhibitedBookingCodes
     */
    public function getProhibitedBookingCodes()
    {
      return $this->ProhibitedBookingCodes;
    }

    /**
     * @param ProhibitedBookingCodes $ProhibitedBookingCodes
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setProhibitedBookingCodes($ProhibitedBookingCodes)
    {
      $this->ProhibitedBookingCodes = $ProhibitedBookingCodes;
      return $this;
    }

    /**
     * @return DisfavoredAlliances
     */
    public function getDisfavoredAlliances()
    {
      return $this->DisfavoredAlliances;
    }

    /**
     * @param DisfavoredAlliances $DisfavoredAlliances
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setDisfavoredAlliances($DisfavoredAlliances)
    {
      $this->DisfavoredAlliances = $DisfavoredAlliances;
      return $this;
    }

    /**
     * @return FlightType
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param FlightType $FlightType
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return typeAnchorFlightData
     */
    public function getAnchorFlightData()
    {
      return $this->AnchorFlightData;
    }

    /**
     * @param typeAnchorFlightData $AnchorFlightData
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setAnchorFlightData($AnchorFlightData)
    {
      $this->AnchorFlightData = $AnchorFlightData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitOvernightLayovers()
    {
      return $this->ProhibitOvernightLayovers;
    }

    /**
     * @param boolean $ProhibitOvernightLayovers
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setProhibitOvernightLayovers($ProhibitOvernightLayovers)
    {
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnectionTime()
    {
      return $this->MaxConnectionTime;
    }

    /**
     * @param int $MaxConnectionTime
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setMaxConnectionTime($MaxConnectionTime)
    {
      $this->MaxConnectionTime = $MaxConnectionTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFirstAvailableOnly()
    {
      return $this->ReturnFirstAvailableOnly;
    }

    /**
     * @param boolean $ReturnFirstAvailableOnly
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setReturnFirstAvailableOnly($ReturnFirstAvailableOnly)
    {
      $this->ReturnFirstAvailableOnly = $ReturnFirstAvailableOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDirectAccess()
    {
      return $this->AllowDirectAccess;
    }

    /**
     * @param boolean $AllowDirectAccess
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setAllowDirectAccess($AllowDirectAccess)
    {
      $this->AllowDirectAccess = $AllowDirectAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMultiAirportConnection()
    {
      return $this->ProhibitMultiAirportConnection;
    }

    /**
     * @param boolean $ProhibitMultiAirportConnection
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setProhibitMultiAirportConnection($ProhibitMultiAirportConnection)
    {
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferNonStop()
    {
      return $this->PreferNonStop;
    }

    /**
     * @param boolean $PreferNonStop
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setPreferNonStop($PreferNonStop)
    {
      $this->PreferNonStop = $PreferNonStop;
      return $this;
    }

    /**
     * @return anonymous726
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param anonymous726 $OrderBy
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setOrderBy($OrderBy)
    {
      $this->OrderBy = $OrderBy;
      return $this;
    }

    /**
     * @return typeMaxJourneyTime
     */
    public function getMaxJourneyTime()
    {
      return $this->MaxJourneyTime;
    }

    /**
     * @param typeMaxJourneyTime $MaxJourneyTime
     * @return \FilippoToso\Travelport\Air\AirLegModifiers
     */
    public function setMaxJourneyTime($MaxJourneyTime)
    {
      $this->MaxJourneyTime = $MaxJourneyTime;
      return $this;
    }

}
