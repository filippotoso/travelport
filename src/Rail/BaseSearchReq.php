<?php

namespace FilippoToso\Travelport\Rail;

class BaseSearchReq extends BaseReq
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
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param NextResultReference $NextResultReference
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
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
     * @return \FilippoToso\Travelport\Rail\BaseSearchReq
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
      return $this;
    }

}
