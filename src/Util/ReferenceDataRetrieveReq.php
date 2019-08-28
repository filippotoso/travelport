<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataRetrieveReq extends BaseReq
{

    /**
     * @var ReferenceDataSearchModifiers $ReferenceDataSearchModifiers
     */
    protected $ReferenceDataSearchModifiers = null;

    /**
     * @var RequestReferenceDataItem $RequestReferenceDataItem
     */
    protected $RequestReferenceDataItem = null;

    /**
     * @var typeTypeCode $TypeCode
     */
    protected $TypeCode = null;

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
     * @param ReferenceDataSearchModifiers $ReferenceDataSearchModifiers
     * @param RequestReferenceDataItem $RequestReferenceDataItem
     * @param typeTypeCode $TypeCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ReferenceDataSearchModifiers = null, $RequestReferenceDataItem = null, $TypeCode = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ReferenceDataSearchModifiers = $ReferenceDataSearchModifiers;
      $this->RequestReferenceDataItem = $RequestReferenceDataItem;
      $this->TypeCode = $TypeCode;
    }

    /**
     * @return ReferenceDataSearchModifiers
     */
    public function getReferenceDataSearchModifiers()
    {
      return $this->ReferenceDataSearchModifiers;
    }

    /**
     * @param ReferenceDataSearchModifiers $ReferenceDataSearchModifiers
     * @return \FilippoToso\Travelport\Util\ReferenceDataRetrieveReq
     */
    public function setReferenceDataSearchModifiers($ReferenceDataSearchModifiers)
    {
      $this->ReferenceDataSearchModifiers = $ReferenceDataSearchModifiers;
      return $this;
    }

    /**
     * @return RequestReferenceDataItem
     */
    public function getRequestReferenceDataItem()
    {
      return $this->RequestReferenceDataItem;
    }

    /**
     * @param RequestReferenceDataItem $RequestReferenceDataItem
     * @return \FilippoToso\Travelport\Util\ReferenceDataRetrieveReq
     */
    public function setRequestReferenceDataItem($RequestReferenceDataItem)
    {
      $this->RequestReferenceDataItem = $RequestReferenceDataItem;
      return $this;
    }

    /**
     * @return typeTypeCode
     */
    public function getTypeCode()
    {
      return $this->TypeCode;
    }

    /**
     * @param typeTypeCode $TypeCode
     * @return \FilippoToso\Travelport\Util\ReferenceDataRetrieveReq
     */
    public function setTypeCode($TypeCode)
    {
      $this->TypeCode = $TypeCode;
      return $this;
    }

}
