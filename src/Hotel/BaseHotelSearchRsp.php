<?php

namespace FilippoToso\Travelport\Hotel;

class BaseHotelSearchRsp extends BaseSearchRsp
{

    /**
     * @var typeHotelReferencePoint $ReferencePoint
     */
    protected $ReferencePoint = null;

    /**
     * @var HotelSearchResult $HotelSearchResult
     */
    protected $HotelSearchResult = null;

    /**
     * @var MarketingInformation $MarketingInformation
     */
    protected $MarketingInformation = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var int $AddressSearchQuality
     */
    protected $AddressSearchQuality = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param HotelSearchResult $HotelSearchResult
     * @param MarketingInformation $MarketingInformation
     * @param HostToken $HostToken
     * @param int $AddressSearchQuality
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $HotelSearchResult = null, $MarketingInformation = null, $HostToken = null, $AddressSearchQuality = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
      $this->HotelSearchResult = $HotelSearchResult;
      $this->MarketingInformation = $MarketingInformation;
      $this->HostToken = $HostToken;
      $this->AddressSearchQuality = $AddressSearchQuality;
    }

    /**
     * @return typeHotelReferencePoint
     */
    public function getReferencePoint()
    {
      return $this->ReferencePoint;
    }

    /**
     * @param typeHotelReferencePoint $ReferencePoint
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchRsp
     */
    public function setReferencePoint($ReferencePoint)
    {
      $this->ReferencePoint = $ReferencePoint;
      return $this;
    }

    /**
     * @return HotelSearchResult
     */
    public function getHotelSearchResult()
    {
      return $this->HotelSearchResult;
    }

    /**
     * @param HotelSearchResult $HotelSearchResult
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchRsp
     */
    public function setHotelSearchResult($HotelSearchResult)
    {
      $this->HotelSearchResult = $HotelSearchResult;
      return $this;
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
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchRsp
     */
    public function setMarketingInformation($MarketingInformation)
    {
      $this->MarketingInformation = $MarketingInformation;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchRsp
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddressSearchQuality()
    {
      return $this->AddressSearchQuality;
    }

    /**
     * @param int $AddressSearchQuality
     * @return \FilippoToso\Travelport\Hotel\BaseHotelSearchRsp
     */
    public function setAddressSearchQuality($AddressSearchQuality)
    {
      $this->AddressSearchQuality = $AddressSearchQuality;
      return $this;
    }

}
