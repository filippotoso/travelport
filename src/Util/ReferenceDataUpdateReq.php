<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataUpdateReq extends BaseReq
{

    /**
     * @var Item[] $Item
     */
    protected $Item = null;

    /**
     * @var anonymous1212 $Action
     */
    protected $Action = null;

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
     * @param Item[] $Item
     * @param anonymous1212 $Action
     * @param typeTypeCode $TypeCode
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, array $Item, $Action, $TypeCode)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Item = $Item;
      $this->Action = $Action;
      $this->TypeCode = $TypeCode;
    }

    /**
     * @return Item[]
     */
    public function getItem()
    {
      return $this->Item;
    }

    /**
     * @param Item[] $Item
     * @return \FilippoToso\Travelport\Util\ReferenceDataUpdateReq
     */
    public function setItem(array $Item)
    {
      $this->Item = $Item;
      return $this;
    }

    /**
     * @return anonymous1212
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param anonymous1212 $Action
     * @return \FilippoToso\Travelport\Util\ReferenceDataUpdateReq
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataUpdateReq
     */
    public function setTypeCode($TypeCode)
    {
      $this->TypeCode = $TypeCode;
      return $this;
    }

}
