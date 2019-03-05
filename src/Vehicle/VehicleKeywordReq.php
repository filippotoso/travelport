<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleKeywordReq extends BaseSearchReq
{

    /**
     * @var Vendor $Vendor
     */
    protected $Vendor = null;

    /**
     * @var typePickupDateLocation $PickupDateLocation
     */
    protected $PickupDateLocation = null;

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @var boolean $KeywordList
     */
    protected $KeywordList = null;

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
     * @param NextResultReference $NextResultReference
     * @param Vendor $Vendor
     * @param typePickupDateLocation $PickupDateLocation
     * @param Keyword $Keyword
     * @param boolean $KeywordList
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $Vendor = null, $PickupDateLocation = null, $Keyword = null, $KeywordList = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->Vendor = $Vendor;
      $this->PickupDateLocation = $PickupDateLocation;
      $this->Keyword = $Keyword;
      $this->KeywordList = $KeywordList;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordReq
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

    /**
     * @return typePickupDateLocation
     */
    public function getPickupDateLocation()
    {
      return $this->PickupDateLocation;
    }

    /**
     * @param typePickupDateLocation $PickupDateLocation
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordReq
     */
    public function setPickupDateLocation($PickupDateLocation)
    {
      $this->PickupDateLocation = $PickupDateLocation;
      return $this;
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword $Keyword
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordReq
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeywordList()
    {
      return $this->KeywordList;
    }

    /**
     * @param boolean $KeywordList
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordReq
     */
    public function setKeywordList($KeywordList)
    {
      $this->KeywordList = $KeywordList;
      return $this;
    }

}
