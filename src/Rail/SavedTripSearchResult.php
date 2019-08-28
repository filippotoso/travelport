<?php

namespace FilippoToso\Travelport\Rail;

class SavedTripSearchResult extends typeSavedTripProductInfo
{

    /**
     * @var ProductInfo[] $ProductInfo
     */
    protected $ProductInfo = null;

    /**
     * @var string $EarliestTravelDate
     */
    protected $EarliestTravelDate = null;

    /**
     * @var string $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $SavedTripName
     */
    protected $SavedTripName = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @param typeProduct $ProductType
     * @param string $VendorCode
     * @param string $ProviderCode
     * @param string $EarliestTravelDate
     * @param string $CreatedDate
     * @param string $SavedTripName
     * @param typeLocatorCode $LocatorCode
     * @param typeLocatorCode $UniversalRecordLocatorCode
     */
    public function __construct($ProductType = null, $VendorCode = null, $ProviderCode = null, $EarliestTravelDate = null, $CreatedDate = null, $SavedTripName = null, $LocatorCode = null, $UniversalRecordLocatorCode = null)
    {
      parent::__construct($ProductType, $VendorCode, $ProviderCode);
      $this->EarliestTravelDate = $EarliestTravelDate;
      $this->CreatedDate = $CreatedDate;
      $this->SavedTripName = $SavedTripName;
      $this->LocatorCode = $LocatorCode;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
     */
    public function setProductInfo(array $ProductInfo = null)
    {
      $this->ProductInfo = $ProductInfo;
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
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
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
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSavedTripName()
    {
      return $this->SavedTripName;
    }

    /**
     * @param string $SavedTripName
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
     */
    public function setSavedTripName($SavedTripName)
    {
      $this->SavedTripName = $SavedTripName;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\Rail\SavedTripSearchResult
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

}
