<?php

namespace FilippoToso\Travelport\Rail;

class VehicleReservationCriteria
{

    /**
     * @var typeDateSpec $PickUpDate
     */
    protected $PickUpDate = null;

    /**
     * @var string $VehicleConfirmation
     */
    protected $VehicleConfirmation = null;

    /**
     * @var typeIATACode $Location
     */
    protected $Location = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var string $LocationNumber
     */
    protected $LocationNumber = null;

    /**
     * @var boolean $PassiveOnly
     */
    protected $PassiveOnly = null;

    /**
     * @param string $VehicleConfirmation
     * @param typeIATACode $Location
     * @param typeSupplierCode $VendorCode
     * @param string $LocationNumber
     * @param boolean $PassiveOnly
     */
    public function __construct($VehicleConfirmation = null, $Location = null, $VendorCode = null, $LocationNumber = null, $PassiveOnly = null)
    {
      $this->VehicleConfirmation = $VehicleConfirmation;
      $this->Location = $Location;
      $this->VendorCode = $VendorCode;
      $this->LocationNumber = $LocationNumber;
      $this->PassiveOnly = $PassiveOnly;
    }

    /**
     * @return typeDateSpec
     */
    public function getPickUpDate()
    {
      return $this->PickUpDate;
    }

    /**
     * @param typeDateSpec $PickUpDate
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setPickUpDate($PickUpDate)
    {
      $this->PickUpDate = $PickUpDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleConfirmation()
    {
      return $this->VehicleConfirmation;
    }

    /**
     * @param string $VehicleConfirmation
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setVehicleConfirmation($VehicleConfirmation)
    {
      $this->VehicleConfirmation = $VehicleConfirmation;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationNumber()
    {
      return $this->LocationNumber;
    }

    /**
     * @param string $LocationNumber
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setLocationNumber($LocationNumber)
    {
      $this->LocationNumber = $LocationNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassiveOnly()
    {
      return $this->PassiveOnly;
    }

    /**
     * @param boolean $PassiveOnly
     * @return \FilippoToso\Travelport\Rail\VehicleReservationCriteria
     */
    public function setPassiveOnly($PassiveOnly)
    {
      $this->PassiveOnly = $PassiveOnly;
      return $this;
    }

}
