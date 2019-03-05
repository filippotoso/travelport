<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleSearchAvailabilityRsp extends BaseVehicleSearchAvailabilityRsp
{

    /**
     * @var MarketingInformation $MarketingInformation
     */
    protected $MarketingInformation = null;

    /**
     * @var string $MediaLinksSearchId
     */
    protected $MediaLinksSearchId = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param VehicleDateLocation $VehicleDateLocation
     * @param Vehicle $Vehicle
     * @param MarketingInformation $MarketingInformation
     * @param string $MediaLinksSearchId
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $VehicleDateLocation = null, $Vehicle = null, $MarketingInformation = null, $MediaLinksSearchId = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $VehicleDateLocation, $Vehicle);
      $this->MarketingInformation = $MarketingInformation;
      $this->MediaLinksSearchId = $MediaLinksSearchId;
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
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityRsp
     */
    public function setMarketingInformation($MarketingInformation)
    {
      $this->MarketingInformation = $MarketingInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaLinksSearchId()
    {
      return $this->MediaLinksSearchId;
    }

    /**
     * @param string $MediaLinksSearchId
     * @return \FilippoToso\Travelport\Vehicle\VehicleSearchAvailabilityRsp
     */
    public function setMediaLinksSearchId($MediaLinksSearchId)
    {
      $this->MediaLinksSearchId = $MediaLinksSearchId;
      return $this;
    }

}
