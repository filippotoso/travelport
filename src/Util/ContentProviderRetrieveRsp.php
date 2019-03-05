<?php

namespace FilippoToso\Travelport\Util;

class ContentProviderRetrieveRsp extends BaseRsp
{

    /**
     * @var ContentProvider $ContentProvider
     */
    protected $ContentProvider = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ContentProvider $ContentProvider
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ContentProvider = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ContentProvider = $ContentProvider;
    }

    /**
     * @return ContentProvider
     */
    public function getContentProvider()
    {
      return $this->ContentProvider;
    }

    /**
     * @param ContentProvider $ContentProvider
     * @return \FilippoToso\Travelport\Util\ContentProviderRetrieveRsp
     */
    public function setContentProvider($ContentProvider)
    {
      $this->ContentProvider = $ContentProvider;
      return $this;
    }

}
