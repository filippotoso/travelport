<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProviderReservationDisplayDetailsRsp extends BaseRsp
{

    /**
     * @var DisplayDetails $DisplayDetails
     */
    protected $DisplayDetails = null;

    /**
     * @var TravelerNameNum $TravelerNameNum
     */
    protected $TravelerNameNum = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param DisplayDetails $DisplayDetails
     * @param TravelerNameNum $TravelerNameNum
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $DisplayDetails = null, $TravelerNameNum = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->DisplayDetails = $DisplayDetails;
      $this->TravelerNameNum = $TravelerNameNum;
    }

    /**
     * @return DisplayDetails
     */
    public function getDisplayDetails()
    {
      return $this->DisplayDetails;
    }

    /**
     * @param DisplayDetails $DisplayDetails
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsRsp
     */
    public function setDisplayDetails($DisplayDetails)
    {
      $this->DisplayDetails = $DisplayDetails;
      return $this;
    }

    /**
     * @return TravelerNameNum
     */
    public function getTravelerNameNum()
    {
      return $this->TravelerNameNum;
    }

    /**
     * @param TravelerNameNum $TravelerNameNum
     * @return \FilippoToso\Travelport\UniversalRecord\ProviderReservationDisplayDetailsRsp
     */
    public function setTravelerNameNum($TravelerNameNum)
    {
      $this->TravelerNameNum = $TravelerNameNum;
      return $this;
    }

}
