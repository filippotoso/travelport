<?php

namespace FilippoToso\Travelport\Util;

class CreateAgencyFeeMcoRsp extends BaseRsp
{

    /**
     * @var MCO $MCO
     */
    protected $MCO = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param MCO $MCO
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $MCO = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->MCO = $MCO;
    }

    /**
     * @return MCO
     */
    public function getMCO()
    {
      return $this->MCO;
    }

    /**
     * @param MCO $MCO
     * @return \FilippoToso\Travelport\Util\CreateAgencyFeeMcoRsp
     */
    public function setMCO($MCO)
    {
      $this->MCO = $MCO;
      return $this;
    }

}
