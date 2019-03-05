<?php

namespace FilippoToso\Travelport\Hotel;

class HotelDetailsRsp extends BaseRsp
{

    /**
     * @var NextResultReference $NextResultReference
     */
    protected $NextResultReference = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var RequestedHotelDetails $RequestedHotelDetails
     */
    protected $RequestedHotelDetails = null;

    /**
     * @var AggregatorHotelDetails[] $AggregatorHotelDetails
     */
    protected $AggregatorHotelDetails = null;

    /**
     * @var HotelAlternateProperties $HotelAlternateProperties
     */
    protected $HotelAlternateProperties = null;

    /**
     * @var GuestReviews $GuestReviews
     */
    protected $GuestReviews = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param HostToken $HostToken
     * @param RequestedHotelDetails $RequestedHotelDetails
     * @param HotelAlternateProperties $HotelAlternateProperties
     * @param GuestReviews $GuestReviews
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $HostToken = null, $RequestedHotelDetails = null, $HotelAlternateProperties = null, $GuestReviews = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->NextResultReference = $NextResultReference;
      $this->HostToken = $HostToken;
      $this->RequestedHotelDetails = $RequestedHotelDetails;
      $this->HotelAlternateProperties = $HotelAlternateProperties;
      $this->GuestReviews = $GuestReviews;
    }

    /**
     * @return NextResultReference
     */
    public function getNextResultReference()
    {
      return $this->NextResultReference;
    }

    /**
     * @param NextResultReference $NextResultReference
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setNextResultReference($NextResultReference)
    {
      $this->NextResultReference = $NextResultReference;
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
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return RequestedHotelDetails
     */
    public function getRequestedHotelDetails()
    {
      return $this->RequestedHotelDetails;
    }

    /**
     * @param RequestedHotelDetails $RequestedHotelDetails
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setRequestedHotelDetails($RequestedHotelDetails)
    {
      $this->RequestedHotelDetails = $RequestedHotelDetails;
      return $this;
    }

    /**
     * @return AggregatorHotelDetails[]
     */
    public function getAggregatorHotelDetails()
    {
      return $this->AggregatorHotelDetails;
    }

    /**
     * @param AggregatorHotelDetails[] $AggregatorHotelDetails
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setAggregatorHotelDetails(array $AggregatorHotelDetails = null)
    {
      $this->AggregatorHotelDetails = $AggregatorHotelDetails;
      return $this;
    }

    /**
     * @return HotelAlternateProperties
     */
    public function getHotelAlternateProperties()
    {
      return $this->HotelAlternateProperties;
    }

    /**
     * @param HotelAlternateProperties $HotelAlternateProperties
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setHotelAlternateProperties($HotelAlternateProperties)
    {
      $this->HotelAlternateProperties = $HotelAlternateProperties;
      return $this;
    }

    /**
     * @return GuestReviews
     */
    public function getGuestReviews()
    {
      return $this->GuestReviews;
    }

    /**
     * @param GuestReviews $GuestReviews
     * @return \FilippoToso\Travelport\Hotel\HotelDetailsRsp
     */
    public function setGuestReviews($GuestReviews)
    {
      $this->GuestReviews = $GuestReviews;
      return $this;
    }

}
