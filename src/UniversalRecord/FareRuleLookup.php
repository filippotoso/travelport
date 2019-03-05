<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRuleLookup
{

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var date $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @param AccountCode $AccountCode
     * @param PointOfSale $PointOfSale
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeCarrier $Carrier
     * @param string $FareBasis
     * @param typeProviderCode $ProviderCode
     * @param date $DepartureDate
     * @param date $TicketingDate
     */
    public function __construct($AccountCode = null, $PointOfSale = null, $Origin = null, $Destination = null, $Carrier = null, $FareBasis = null, $ProviderCode = null, $DepartureDate = null, $TicketingDate = null)
    {
      $this->AccountCode = $AccountCode;
      $this->PointOfSale = $PointOfSale;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->Carrier = $Carrier;
      $this->FareBasis = $FareBasis;
      $this->ProviderCode = $ProviderCode;
      $this->DepartureDate = $DepartureDate;
      $this->TicketingDate = $TicketingDate;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTicketingDate()
    {
      return $this->TicketingDate;
    }

    /**
     * @param date $TicketingDate
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleLookup
     */
    public function setTicketingDate($TicketingDate)
    {
      $this->TicketingDate = $TicketingDate;
      return $this;
    }

}
