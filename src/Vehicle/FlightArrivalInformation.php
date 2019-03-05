<?php

namespace FilippoToso\Travelport\Vehicle;

class FlightArrivalInformation
{

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var anonymous602 $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeCarrier $Carrier
     * @param anonymous602 $FlightNumber
     * @param typeRef $Key
     */
    public function __construct($Carrier = null, $FlightNumber = null, $Key = null)
    {
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Vehicle\FlightArrivalInformation
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return anonymous602
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param anonymous602 $FlightNumber
     * @return \FilippoToso\Travelport\Vehicle\FlightArrivalInformation
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \FilippoToso\Travelport\Vehicle\FlightArrivalInformation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
