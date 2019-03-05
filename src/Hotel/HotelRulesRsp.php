<?php

namespace FilippoToso\Travelport\Hotel;

class HotelRulesRsp extends BaseRsp
{

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    protected $HotelRateDetail = null;

    /**
     * @var HotelRuleItem $HotelRuleItem
     */
    protected $HotelRuleItem = null;

    /**
     * @var HotelType $HotelType
     */
    protected $HotelType = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HotelRateDetail $HotelRateDetail
     * @param HotelRuleItem $HotelRuleItem
     * @param HotelType $HotelType
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HotelRateDetail = null, $HotelRuleItem = null, $HotelType = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HotelRateDetail = $HotelRateDetail;
      $this->HotelRuleItem = $HotelRuleItem;
      $this->HotelType = $HotelType;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\Hotel\HotelRulesRsp
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return HotelRuleItem
     */
    public function getHotelRuleItem()
    {
      return $this->HotelRuleItem;
    }

    /**
     * @param HotelRuleItem $HotelRuleItem
     * @return \FilippoToso\Travelport\Hotel\HotelRulesRsp
     */
    public function setHotelRuleItem($HotelRuleItem)
    {
      $this->HotelRuleItem = $HotelRuleItem;
      return $this;
    }

    /**
     * @return HotelType
     */
    public function getHotelType()
    {
      return $this->HotelType;
    }

    /**
     * @param HotelType $HotelType
     * @return \FilippoToso\Travelport\Hotel\HotelRulesRsp
     */
    public function setHotelType($HotelType)
    {
      $this->HotelType = $HotelType;
      return $this;
    }

}
