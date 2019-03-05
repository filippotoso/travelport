<?php

namespace FilippoToso\Travelport\System;

class TravelerInformation
{

    /**
     * @var EmergencyContact $EmergencyContact
     */
    protected $EmergencyContact = null;

    /**
     * @var typeAirport $HomeAirport
     */
    protected $HomeAirport = null;

    /**
     * @var date $VisaExpirationDate
     */
    protected $VisaExpirationDate = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typeAirport $HomeAirport
     * @param date $VisaExpirationDate
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($HomeAirport = null, $VisaExpirationDate = null, $BookingTravelerRef = null)
    {
      $this->HomeAirport = $HomeAirport;
      $this->VisaExpirationDate = $VisaExpirationDate;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return EmergencyContact
     */
    public function getEmergencyContact()
    {
      return $this->EmergencyContact;
    }

    /**
     * @param EmergencyContact $EmergencyContact
     * @return \FilippoToso\Travelport\System\TravelerInformation
     */
    public function setEmergencyContact($EmergencyContact)
    {
      $this->EmergencyContact = $EmergencyContact;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getHomeAirport()
    {
      return $this->HomeAirport;
    }

    /**
     * @param typeAirport $HomeAirport
     * @return \FilippoToso\Travelport\System\TravelerInformation
     */
    public function setHomeAirport($HomeAirport)
    {
      $this->HomeAirport = $HomeAirport;
      return $this;
    }

    /**
     * @return date
     */
    public function getVisaExpirationDate()
    {
      return $this->VisaExpirationDate;
    }

    /**
     * @param date $VisaExpirationDate
     * @return \FilippoToso\Travelport\System\TravelerInformation
     */
    public function setVisaExpirationDate($VisaExpirationDate)
    {
      $this->VisaExpirationDate = $VisaExpirationDate;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\System\TravelerInformation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
