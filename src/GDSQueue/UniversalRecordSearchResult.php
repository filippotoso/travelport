<?php

namespace FilippoToso\Travelport\GDSQueue;

class UniversalRecordSearchResult extends typeProductInfo
{

    /**
     * @var ProductInfo[] $ProductInfo
     */
    protected $ProductInfo = null;

    /**
     * @var string $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var string $EarliestTravelDate
     */
    protected $EarliestTravelDate = null;

    /**
     * @var string $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var typeLocatorCode $SavedTripLocatorCode
     */
    protected $SavedTripLocatorCode = null;

    /**
     * @var typeReservationTicketed $Ticketed
     */
    protected $Ticketed = null;

    /**
     * @var typeRecordStatus $RecordStatus
     */
    protected $RecordStatus = null;

    /**
     * @var URTicketStatus $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @param typeProduct $ProductType
     * @param string $VendorCode
     * @param string $ProviderCode
     * @param string $ProviderLocatorCode
     * @param string $UniversalRecordLocatorCode
     * @param string $EarliestTravelDate
     * @param string $CreatedDate
     * @param typeLocatorCode $SavedTripLocatorCode
     * @param typeReservationTicketed $Ticketed
     * @param typeRecordStatus $RecordStatus
     * @param URTicketStatus $TicketStatus
     */
    public function __construct($ProductType = null, $VendorCode = null, $ProviderCode = null, $ProviderLocatorCode = null, $UniversalRecordLocatorCode = null, $EarliestTravelDate = null, $CreatedDate = null, $SavedTripLocatorCode = null, $Ticketed = null, $RecordStatus = null, $TicketStatus = null)
    {
      parent::__construct($ProductType, $VendorCode, $ProviderCode, $ProviderLocatorCode);
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->EarliestTravelDate = $EarliestTravelDate;
      $this->CreatedDate = $CreatedDate;
      $this->SavedTripLocatorCode = $SavedTripLocatorCode;
      $this->Ticketed = $Ticketed;
      $this->RecordStatus = $RecordStatus;
      $this->TicketStatus = $TicketStatus;
    }

    /**
     * @return ProductInfo[]
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param ProductInfo[] $ProductInfo
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setProductInfo(array $ProductInfo = null)
    {
      $this->ProductInfo = $ProductInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param string $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEarliestTravelDate()
    {
      return $this->EarliestTravelDate;
    }

    /**
     * @param string $EarliestTravelDate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setEarliestTravelDate($EarliestTravelDate)
    {
      $this->EarliestTravelDate = $EarliestTravelDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param string $CreatedDate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getSavedTripLocatorCode()
    {
      return $this->SavedTripLocatorCode;
    }

    /**
     * @param typeLocatorCode $SavedTripLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setSavedTripLocatorCode($SavedTripLocatorCode)
    {
      $this->SavedTripLocatorCode = $SavedTripLocatorCode;
      return $this;
    }

    /**
     * @return typeReservationTicketed
     */
    public function getTicketed()
    {
      return $this->Ticketed;
    }

    /**
     * @param typeReservationTicketed $Ticketed
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setTicketed($Ticketed)
    {
      $this->Ticketed = $Ticketed;
      return $this;
    }

    /**
     * @return typeRecordStatus
     */
    public function getRecordStatus()
    {
      return $this->RecordStatus;
    }

    /**
     * @param typeRecordStatus $RecordStatus
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setRecordStatus($RecordStatus)
    {
      $this->RecordStatus = $RecordStatus;
      return $this;
    }

    /**
     * @return URTicketStatus
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param URTicketStatus $TicketStatus
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordSearchResult
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

}
