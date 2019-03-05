<?php

namespace FilippoToso\Travelport\System;

class ExternalCacheAccessReq extends BaseReq
{

    /**
     * @var RetrieveEntry[] $RetrieveEntry
     */
    protected $RetrieveEntry = null;

    /**
     * @var DeleteEntry[] $DeleteEntry
     */
    protected $DeleteEntry = null;

    /**
     * @var string $CacheName
     */
    protected $CacheName = null;

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
     * @param string $CacheName
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $CacheName = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->CacheName = $CacheName;
    }

    /**
     * @return RetrieveEntry[]
     */
    public function getRetrieveEntry()
    {
      return $this->RetrieveEntry;
    }

    /**
     * @param RetrieveEntry[] $RetrieveEntry
     * @return \FilippoToso\Travelport\System\ExternalCacheAccessReq
     */
    public function setRetrieveEntry(array $RetrieveEntry = null)
    {
      $this->RetrieveEntry = $RetrieveEntry;
      return $this;
    }

    /**
     * @return DeleteEntry[]
     */
    public function getDeleteEntry()
    {
      return $this->DeleteEntry;
    }

    /**
     * @param DeleteEntry[] $DeleteEntry
     * @return \FilippoToso\Travelport\System\ExternalCacheAccessReq
     */
    public function setDeleteEntry(array $DeleteEntry = null)
    {
      $this->DeleteEntry = $DeleteEntry;
      return $this;
    }

    /**
     * @return string
     */
    public function getCacheName()
    {
      return $this->CacheName;
    }

    /**
     * @param string $CacheName
     * @return \FilippoToso\Travelport\System\ExternalCacheAccessReq
     */
    public function setCacheName($CacheName)
    {
      $this->CacheName = $CacheName;
      return $this;
    }

}
