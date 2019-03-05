<?php

namespace FilippoToso\Travelport\System;

class ExternalCacheAccessRsp extends BaseRsp
{

    /**
     * @var CacheEntry[] $CacheEntry
     */
    protected $CacheEntry = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
    }

    /**
     * @return CacheEntry[]
     */
    public function getCacheEntry()
    {
      return $this->CacheEntry;
    }

    /**
     * @param CacheEntry[] $CacheEntry
     * @return \FilippoToso\Travelport\System\ExternalCacheAccessRsp
     */
    public function setCacheEntry(array $CacheEntry = null)
    {
      $this->CacheEntry = $CacheEntry;
      return $this;
    }

}
