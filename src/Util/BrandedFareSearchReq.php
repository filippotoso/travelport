<?php

namespace FilippoToso\Travelport\Util;

class BrandedFareSearchReq extends BaseReq
{

    /**
     * @var FareFamilyCriteria $FareFamilyCriteria
     */
    protected $FareFamilyCriteria = null;

    /**
     * @var BrandedFareSearchModifier $BrandedFareSearchModifier
     */
    protected $BrandedFareSearchModifier = null;

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
     * @param FareFamilyCriteria $FareFamilyCriteria
     * @param BrandedFareSearchModifier $BrandedFareSearchModifier
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FareFamilyCriteria = null, $BrandedFareSearchModifier = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FareFamilyCriteria = $FareFamilyCriteria;
      $this->BrandedFareSearchModifier = $BrandedFareSearchModifier;
    }

    /**
     * @return FareFamilyCriteria
     */
    public function getFareFamilyCriteria()
    {
      return $this->FareFamilyCriteria;
    }

    /**
     * @param FareFamilyCriteria $FareFamilyCriteria
     * @return \FilippoToso\Travelport\Util\BrandedFareSearchReq
     */
    public function setFareFamilyCriteria($FareFamilyCriteria)
    {
      $this->FareFamilyCriteria = $FareFamilyCriteria;
      return $this;
    }

    /**
     * @return BrandedFareSearchModifier
     */
    public function getBrandedFareSearchModifier()
    {
      return $this->BrandedFareSearchModifier;
    }

    /**
     * @param BrandedFareSearchModifier $BrandedFareSearchModifier
     * @return \FilippoToso\Travelport\Util\BrandedFareSearchReq
     */
    public function setBrandedFareSearchModifier($BrandedFareSearchModifier)
    {
      $this->BrandedFareSearchModifier = $BrandedFareSearchModifier;
      return $this;
    }

}
