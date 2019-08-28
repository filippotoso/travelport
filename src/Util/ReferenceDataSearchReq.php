<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataSearchReq extends BaseReq
{

    /**
     * @var ReferenceDataSearchModifiers $ReferenceDataSearchModifiers
     */
    protected $ReferenceDataSearchModifiers = null;

    /**
     * @var ReferenceDataSearchItem $ReferenceDataSearchItem
     */
    protected $ReferenceDataSearchItem = null;

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
     * @param ReferenceDataSearchItem $ReferenceDataSearchItem
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ReferenceDataSearchModifiers = null, $ReferenceDataSearchItem = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ReferenceDataSearchModifiers = $ReferenceDataSearchModifiers;
      $this->ReferenceDataSearchItem = $ReferenceDataSearchItem;
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchReq
     */
    public function setReferenceDataSearchModifiers($ReferenceDataSearchModifiers)
    {
      $this->ReferenceDataSearchModifiers = $ReferenceDataSearchModifiers;
      return $this;
    }

    /**
     * @return ReferenceDataSearchItem
     */
    public function getReferenceDataSearchItem()
    {
      return $this->ReferenceDataSearchItem;
    }

    /**
     * @param ReferenceDataSearchItem $ReferenceDataSearchItem
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchReq
     */
    public function setReferenceDataSearchItem($ReferenceDataSearchItem)
    {
      $this->ReferenceDataSearchItem = $ReferenceDataSearchItem;
      return $this;
    }

}
