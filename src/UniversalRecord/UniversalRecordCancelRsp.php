<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordCancelRsp extends BaseRsp
{

    /**
     * @var ProviderReservationStatus $ProviderReservationStatus
     */
    protected $ProviderReservationStatus = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ProviderReservationStatus $ProviderReservationStatus
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProviderReservationStatus = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProviderReservationStatus = $ProviderReservationStatus;
    }

    /**
     * @return ProviderReservationStatus
     */
    public function getProviderReservationStatus()
    {
      return $this->ProviderReservationStatus;
    }

    /**
     * @param ProviderReservationStatus $ProviderReservationStatus
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordCancelRsp
     */
    public function setProviderReservationStatus($ProviderReservationStatus)
    {
      $this->ProviderReservationStatus = $ProviderReservationStatus;
      return $this;
    }

}
