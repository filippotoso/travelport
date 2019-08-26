<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BaseCoreSearchReq extends BaseCoreReq
{

    /**
     * @var NextResultReference $NextResultReference
     */
    protected $NextResultReference = null;

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
     * @param NextResultReference $NextResultReference
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $NextResultReference)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode);
      $this->NextResultReference = $NextResultReference;
    }

    /**
     * @return NextResultReference
     */
    public function getNextResultReference()
    {
      return $this->NextResultReference;
    }

    /**
     * @param NextResultReference $NextResultReference
     * @return \FilippoToso\Travelport\UniversalRecord\BaseCoreSearchReq
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
      return $this;
    }

}
