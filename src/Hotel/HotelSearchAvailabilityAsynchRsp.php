<?php

namespace FilippoToso\Travelport\Hotel;

class HotelSearchAvailabilityAsynchRsp extends BaseHotelSearchRsp
{

    /**
     * @var BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     */
    protected $AsyncProviderSpecificResponse = null;

    /**
     * @var string $SearchId
     */
    protected $SearchId = null;

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
     * @param BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     * @param string $SearchId
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $HotelSearchResult = null, $MarketingInformation = null, $HostToken = null, $AddressSearchQuality = null, $AsyncProviderSpecificResponse = null, $SearchId = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $HotelSearchResult, $MarketingInformation, $HostToken, $AddressSearchQuality);
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
      $this->SearchId = $SearchId;
    }

    /**
     * @return BaseAsyncProviderSpecificResponse
     */
    public function getAsyncProviderSpecificResponse()
    {
      return $this->AsyncProviderSpecificResponse;
    }

    /**
     * @param BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     * @return \FilippoToso\Travelport\Hotel\HotelSearchAvailabilityAsynchRsp
     */
    public function setAsyncProviderSpecificResponse($AsyncProviderSpecificResponse)
    {
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchId()
    {
      return $this->SearchId;
    }

    /**
     * @param string $SearchId
     * @return \FilippoToso\Travelport\Hotel\HotelSearchAvailabilityAsynchRsp
     */
    public function setSearchId($SearchId)
    {
      $this->SearchId = $SearchId;
      return $this;
    }

}
