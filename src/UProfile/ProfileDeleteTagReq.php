<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDeleteTagReq extends BaseReq
{

    /**
     * @var TagRef $TagRef
     */
    protected $TagRef = null;

    /**
     * @var boolean $Override
     */
    protected $Override = null;

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
     * @param TagRef $TagRef
     * @param boolean $Override
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $TagRef = null, $Override = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->TagRef = $TagRef;
      $this->Override = $Override;
    }

    /**
     * @return TagRef
     */
    public function getTagRef()
    {
      return $this->TagRef;
    }

    /**
     * @param TagRef $TagRef
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteTagReq
     */
    public function setTagRef($TagRef)
    {
      $this->TagRef = $TagRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverride()
    {
      return $this->Override;
    }

    /**
     * @param boolean $Override
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteTagReq
     */
    public function setOverride($Override)
    {
      $this->Override = $Override;
      return $this;
    }

}
