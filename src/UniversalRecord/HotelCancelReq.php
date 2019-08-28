<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelCancelReq extends BaseReq
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var HotelStay $HotelStay
     */
    protected $HotelStay = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $SupplierLocatorCode
     */
    protected $SupplierLocatorCode = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param HotelProperty $HotelProperty
     * @param HotelStay $HotelStay
     * @param FileFinishingInfo $FileFinishingInfo
     * @param string $SupplierCode
     * @param string $SupplierLocatorCode
     * @param typeURVersion $Version
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $HotelProperty = null, $HotelStay = null, $FileFinishingInfo = null, $SupplierCode = null, $SupplierLocatorCode = null, $Version = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->HotelProperty = $HotelProperty;
      $this->HotelStay = $HotelStay;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->SupplierCode = $SupplierCode;
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      $this->Version = $Version;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierLocatorCode()
    {
      return $this->SupplierLocatorCode;
    }

    /**
     * @param string $SupplierLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setSupplierLocatorCode($SupplierLocatorCode)
    {
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCancelReq
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
