<?php

namespace FilippoToso\Travelport\Util;

class ContentProvider
{

    /**
     * @var string $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var anonymous1140 $AgencyCredentials
     */
    protected $AgencyCredentials = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $Provisionable
     */
    protected $Provisionable = null;

    /**
     * @var string $MerchandisingACHAdapter
     */
    protected $MerchandisingACHAdapter = null;

    /**
     * @var boolean $StaticDataCarrier
     */
    protected $StaticDataCarrier = null;

    /**
     * @var boolean $MerchandisingACHCarrier
     */
    protected $MerchandisingACHCarrier = null;

    /**
     * @var boolean $MerchandisingHubCarrier
     */
    protected $MerchandisingHubCarrier = null;

    /**
     * @var typeProviderSupplierCapabilityType $BookingRetrieve
     */
    protected $BookingRetrieve = null;

    /**
     * @var typeProviderSupplierCapabilityType $SegmentModify
     */
    protected $SegmentModify = null;

    /**
     * @var typeProviderSupplierCapabilityType $OptionalServicesModify
     */
    protected $OptionalServicesModify = null;

    /**
     * @var typeProviderSupplierCapabilityType $TravelerInfoModify
     */
    protected $TravelerInfoModify = null;

    /**
     * @var typeProviderSupplierCapabilityType $AdditionalPayment
     */
    protected $AdditionalPayment = null;

    /**
     * @var typeProviderSupplierCapabilityType $BookingCancel
     */
    protected $BookingCancel = null;

    /**
     * @var typeProviderSupplierCapabilityType $SeatMap
     */
    protected $SeatMap = null;

    /**
     * @param string $ProviderCode
     * @param string $SupplierCode
     * @param anonymous1140 $AgencyCredentials
     * @param boolean $Active
     * @param boolean $Provisionable
     * @param string $MerchandisingACHAdapter
     * @param boolean $StaticDataCarrier
     * @param boolean $MerchandisingACHCarrier
     * @param boolean $MerchandisingHubCarrier
     * @param typeProviderSupplierCapabilityType $BookingRetrieve
     * @param typeProviderSupplierCapabilityType $SegmentModify
     * @param typeProviderSupplierCapabilityType $OptionalServicesModify
     * @param typeProviderSupplierCapabilityType $TravelerInfoModify
     * @param typeProviderSupplierCapabilityType $AdditionalPayment
     * @param typeProviderSupplierCapabilityType $BookingCancel
     * @param typeProviderSupplierCapabilityType $SeatMap
     */
    public function __construct($ProviderCode = null, $SupplierCode = null, $AgencyCredentials = null, $Active = null, $Provisionable = null, $MerchandisingACHAdapter = null, $StaticDataCarrier = null, $MerchandisingACHCarrier = null, $MerchandisingHubCarrier = null, $BookingRetrieve = null, $SegmentModify = null, $OptionalServicesModify = null, $TravelerInfoModify = null, $AdditionalPayment = null, $BookingCancel = null, $SeatMap = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->AgencyCredentials = $AgencyCredentials;
      $this->Active = $Active;
      $this->Provisionable = $Provisionable;
      $this->MerchandisingACHAdapter = $MerchandisingACHAdapter;
      $this->StaticDataCarrier = $StaticDataCarrier;
      $this->MerchandisingACHCarrier = $MerchandisingACHCarrier;
      $this->MerchandisingHubCarrier = $MerchandisingHubCarrier;
      $this->BookingRetrieve = $BookingRetrieve;
      $this->SegmentModify = $SegmentModify;
      $this->OptionalServicesModify = $OptionalServicesModify;
      $this->TravelerInfoModify = $TravelerInfoModify;
      $this->AdditionalPayment = $AdditionalPayment;
      $this->BookingCancel = $BookingCancel;
      $this->SeatMap = $SeatMap;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return anonymous1140
     */
    public function getAgencyCredentials()
    {
      return $this->AgencyCredentials;
    }

    /**
     * @param anonymous1140 $AgencyCredentials
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setAgencyCredentials($AgencyCredentials)
    {
      $this->AgencyCredentials = $AgencyCredentials;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProvisionable()
    {
      return $this->Provisionable;
    }

    /**
     * @param boolean $Provisionable
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setProvisionable($Provisionable)
    {
      $this->Provisionable = $Provisionable;
      return $this;
    }

    /**
     * @return string
     */
    public function getMerchandisingACHAdapter()
    {
      return $this->MerchandisingACHAdapter;
    }

    /**
     * @param string $MerchandisingACHAdapter
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setMerchandisingACHAdapter($MerchandisingACHAdapter)
    {
      $this->MerchandisingACHAdapter = $MerchandisingACHAdapter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStaticDataCarrier()
    {
      return $this->StaticDataCarrier;
    }

    /**
     * @param boolean $StaticDataCarrier
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setStaticDataCarrier($StaticDataCarrier)
    {
      $this->StaticDataCarrier = $StaticDataCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMerchandisingACHCarrier()
    {
      return $this->MerchandisingACHCarrier;
    }

    /**
     * @param boolean $MerchandisingACHCarrier
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setMerchandisingACHCarrier($MerchandisingACHCarrier)
    {
      $this->MerchandisingACHCarrier = $MerchandisingACHCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMerchandisingHubCarrier()
    {
      return $this->MerchandisingHubCarrier;
    }

    /**
     * @param boolean $MerchandisingHubCarrier
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setMerchandisingHubCarrier($MerchandisingHubCarrier)
    {
      $this->MerchandisingHubCarrier = $MerchandisingHubCarrier;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getBookingRetrieve()
    {
      return $this->BookingRetrieve;
    }

    /**
     * @param typeProviderSupplierCapabilityType $BookingRetrieve
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setBookingRetrieve($BookingRetrieve)
    {
      $this->BookingRetrieve = $BookingRetrieve;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getSegmentModify()
    {
      return $this->SegmentModify;
    }

    /**
     * @param typeProviderSupplierCapabilityType $SegmentModify
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setSegmentModify($SegmentModify)
    {
      $this->SegmentModify = $SegmentModify;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getOptionalServicesModify()
    {
      return $this->OptionalServicesModify;
    }

    /**
     * @param typeProviderSupplierCapabilityType $OptionalServicesModify
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setOptionalServicesModify($OptionalServicesModify)
    {
      $this->OptionalServicesModify = $OptionalServicesModify;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getTravelerInfoModify()
    {
      return $this->TravelerInfoModify;
    }

    /**
     * @param typeProviderSupplierCapabilityType $TravelerInfoModify
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setTravelerInfoModify($TravelerInfoModify)
    {
      $this->TravelerInfoModify = $TravelerInfoModify;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getAdditionalPayment()
    {
      return $this->AdditionalPayment;
    }

    /**
     * @param typeProviderSupplierCapabilityType $AdditionalPayment
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setAdditionalPayment($AdditionalPayment)
    {
      $this->AdditionalPayment = $AdditionalPayment;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getBookingCancel()
    {
      return $this->BookingCancel;
    }

    /**
     * @param typeProviderSupplierCapabilityType $BookingCancel
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setBookingCancel($BookingCancel)
    {
      $this->BookingCancel = $BookingCancel;
      return $this;
    }

    /**
     * @return typeProviderSupplierCapabilityType
     */
    public function getSeatMap()
    {
      return $this->SeatMap;
    }

    /**
     * @param typeProviderSupplierCapabilityType $SeatMap
     * @return \FilippoToso\Travelport\Util\ContentProvider
     */
    public function setSeatMap($SeatMap)
    {
      $this->SeatMap = $SeatMap;
      return $this;
    }

}
