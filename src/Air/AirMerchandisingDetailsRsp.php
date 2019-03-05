<?php

namespace FilippoToso\Travelport\Air;

class AirMerchandisingDetailsRsp extends BaseRsp
{

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var Brand $Brand
     */
    protected $Brand = null;

    /**
     * @var UnassociatedBookingCodeList $UnassociatedBookingCodeList
     */
    protected $UnassociatedBookingCodeList = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param OptionalServices $OptionalServices
     * @param Brand $Brand
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $OptionalServices = null, $Brand = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->OptionalServices = $OptionalServices;
      $this->Brand = $Brand;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsRsp
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param Brand $Brand
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsRsp
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return UnassociatedBookingCodeList
     */
    public function getUnassociatedBookingCodeList()
    {
      return $this->UnassociatedBookingCodeList;
    }

    /**
     * @param UnassociatedBookingCodeList $UnassociatedBookingCodeList
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsRsp
     */
    public function setUnassociatedBookingCodeList($UnassociatedBookingCodeList)
    {
      $this->UnassociatedBookingCodeList = $UnassociatedBookingCodeList;
      return $this;
    }

}
