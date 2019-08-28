<?php

namespace FilippoToso\Travelport\Util;

class MctLookupRsp extends BaseRsp
{

    /**
     * @var MctStandard $MctStandard
     */
    protected $MctStandard = null;

    /**
     * @var MctException $MctException
     */
    protected $MctException = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param MctStandard $MctStandard
     * @param MctException $MctException
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $MctStandard = null, $MctException = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->MctStandard = $MctStandard;
      $this->MctException = $MctException;
    }

    /**
     * @return MctStandard
     */
    public function getMctStandard()
    {
      return $this->MctStandard;
    }

    /**
     * @param MctStandard $MctStandard
     * @return \FilippoToso\Travelport\Util\MctLookupRsp
     */
    public function setMctStandard($MctStandard)
    {
      $this->MctStandard = $MctStandard;
      return $this;
    }

    /**
     * @return MctException
     */
    public function getMctException()
    {
      return $this->MctException;
    }

    /**
     * @param MctException $MctException
     * @return \FilippoToso\Travelport\Util\MctLookupRsp
     */
    public function setMctException($MctException)
    {
      $this->MctException = $MctException;
      return $this;
    }

}
