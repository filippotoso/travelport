<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationDivideRsp extends BaseRsp
{

    /**
     * @var ParentProviderReservationInfo $ParentProviderReservationInfo
     */
    protected $ParentProviderReservationInfo = null;

    /**
     * @var ChildProviderReservationInfo $ChildProviderReservationInfo
     */
    protected $ChildProviderReservationInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ParentProviderReservationInfo $ParentProviderReservationInfo
     * @param ChildProviderReservationInfo $ChildProviderReservationInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ParentProviderReservationInfo = null, $ChildProviderReservationInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ParentProviderReservationInfo = $ParentProviderReservationInfo;
      $this->ChildProviderReservationInfo = $ChildProviderReservationInfo;
    }

    /**
     * @return ParentProviderReservationInfo
     */
    public function getParentProviderReservationInfo()
    {
      return $this->ParentProviderReservationInfo;
    }

    /**
     * @param ParentProviderReservationInfo $ParentProviderReservationInfo
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideRsp
     */
    public function setParentProviderReservationInfo($ParentProviderReservationInfo)
    {
      $this->ParentProviderReservationInfo = $ParentProviderReservationInfo;
      return $this;
    }

    /**
     * @return ChildProviderReservationInfo
     */
    public function getChildProviderReservationInfo()
    {
      return $this->ChildProviderReservationInfo;
    }

    /**
     * @param ChildProviderReservationInfo $ChildProviderReservationInfo
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDivideRsp
     */
    public function setChildProviderReservationInfo($ChildProviderReservationInfo)
    {
      $this->ChildProviderReservationInfo = $ChildProviderReservationInfo;
      return $this;
    }

}
