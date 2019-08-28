<?php

namespace FilippoToso\Travelport\Hotel;

class RetrieveHotelSearchAvailabilityRsp extends BaseHotelSearchRsp
{

    /**
     * @var BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     */
    protected $AsyncProviderSpecificResponse = null;

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
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $HotelSearchResult = null, $MarketingInformation = null, $HostToken = null, $AddressSearchQuality = null, $AsyncProviderSpecificResponse = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $HotelSearchResult, $MarketingInformation, $HostToken, $AddressSearchQuality);
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
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
     * @return \FilippoToso\Travelport\Hotel\RetrieveHotelSearchAvailabilityRsp
     */
    public function setAsyncProviderSpecificResponse($AsyncProviderSpecificResponse)
    {
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
      return $this;
    }

}
