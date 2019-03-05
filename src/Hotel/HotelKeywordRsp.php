<?php

namespace FilippoToso\Travelport\Hotel;

class HotelKeywordRsp extends BaseRsp
{

    /**
     * @var MarketingInformation $MarketingInformation
     */
    protected $MarketingInformation = null;

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param MarketingInformation $MarketingInformation
     * @param Keyword $Keyword
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $MarketingInformation = null, $Keyword = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->MarketingInformation = $MarketingInformation;
      $this->Keyword = $Keyword;
    }

    /**
     * @return MarketingInformation
     */
    public function getMarketingInformation()
    {
      return $this->MarketingInformation;
    }

    /**
     * @param MarketingInformation $MarketingInformation
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordRsp
     */
    public function setMarketingInformation($MarketingInformation)
    {
      $this->MarketingInformation = $MarketingInformation;
      return $this;
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword $Keyword
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordRsp
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

}
