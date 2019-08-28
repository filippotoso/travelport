<?php

namespace FilippoToso\Travelport\Util;

class BrandedFareAdminReq extends BaseReq
{

    /**
     * @var FareFamilyAdd $FareFamilyAdd
     */
    protected $FareFamilyAdd = null;

    /**
     * @var FareFamilyUpdate $FareFamilyUpdate
     */
    protected $FareFamilyUpdate = null;

    /**
     * @var FareFamilyDelete $FareFamilyDelete
     */
    protected $FareFamilyDelete = null;

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
     * @param FareFamilyAdd $FareFamilyAdd
     * @param FareFamilyUpdate $FareFamilyUpdate
     * @param FareFamilyDelete $FareFamilyDelete
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FareFamilyAdd = null, $FareFamilyUpdate = null, $FareFamilyDelete = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FareFamilyAdd = $FareFamilyAdd;
      $this->FareFamilyUpdate = $FareFamilyUpdate;
      $this->FareFamilyDelete = $FareFamilyDelete;
    }

    /**
     * @return FareFamilyAdd
     */
    public function getFareFamilyAdd()
    {
      return $this->FareFamilyAdd;
    }

    /**
     * @param FareFamilyAdd $FareFamilyAdd
     * @return \FilippoToso\Travelport\Util\BrandedFareAdminReq
     */
    public function setFareFamilyAdd($FareFamilyAdd)
    {
      $this->FareFamilyAdd = $FareFamilyAdd;
      return $this;
    }

    /**
     * @return FareFamilyUpdate
     */
    public function getFareFamilyUpdate()
    {
      return $this->FareFamilyUpdate;
    }

    /**
     * @param FareFamilyUpdate $FareFamilyUpdate
     * @return \FilippoToso\Travelport\Util\BrandedFareAdminReq
     */
    public function setFareFamilyUpdate($FareFamilyUpdate)
    {
      $this->FareFamilyUpdate = $FareFamilyUpdate;
      return $this;
    }

    /**
     * @return FareFamilyDelete
     */
    public function getFareFamilyDelete()
    {
      return $this->FareFamilyDelete;
    }

    /**
     * @param FareFamilyDelete $FareFamilyDelete
     * @return \FilippoToso\Travelport\Util\BrandedFareAdminReq
     */
    public function setFareFamilyDelete($FareFamilyDelete)
    {
      $this->FareFamilyDelete = $FareFamilyDelete;
      return $this;
    }

}
