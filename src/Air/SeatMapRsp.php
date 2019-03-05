<?php

namespace FilippoToso\Travelport\Air;

class SeatMapRsp extends BaseRsp
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var CabinClass $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var SearchTraveler $SearchTraveler
     */
    protected $SearchTraveler = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var Rows $Rows
     */
    protected $Rows = null;

    /**
     * @var PaymentRestriction $PaymentRestriction
     */
    protected $PaymentRestriction = null;

    /**
     * @var SeatInformation $SeatInformation
     */
    protected $SeatInformation = null;

    /**
     * @var string $Copyright
     */
    protected $Copyright = null;

    /**
     * @var typeMoney $GroupSeatPrice
     */
    protected $GroupSeatPrice = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HostToken $HostToken
     * @param CabinClass $CabinClass
     * @param typeBaseAirSegment $AirSegment
     * @param SearchTraveler $SearchTraveler
     * @param OptionalServices $OptionalServices
     * @param Remark $Remark
     * @param Rows $Rows
     * @param PaymentRestriction $PaymentRestriction
     * @param SeatInformation $SeatInformation
     * @param typeMoney $GroupSeatPrice
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HostToken = null, $CabinClass = null, $AirSegment = null, $SearchTraveler = null, $OptionalServices = null, $Remark = null, $Rows = null, $PaymentRestriction = null, $SeatInformation = null, $GroupSeatPrice = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HostToken = $HostToken;
      $this->CabinClass = $CabinClass;
      $this->AirSegment = $AirSegment;
      $this->SearchTraveler = $SearchTraveler;
      $this->OptionalServices = $OptionalServices;
      $this->Remark = $Remark;
      $this->Rows = $Rows;
      $this->PaymentRestriction = $PaymentRestriction;
      $this->SeatInformation = $SeatInformation;
      $this->GroupSeatPrice = $GroupSeatPrice;
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
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return CabinClass
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param CabinClass $CabinClass
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return SearchTraveler
     */
    public function getSearchTraveler()
    {
      return $this->SearchTraveler;
    }

    /**
     * @param SearchTraveler $SearchTraveler
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setSearchTraveler($SearchTraveler)
    {
      $this->SearchTraveler = $SearchTraveler;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return Rows
     */
    public function getRows()
    {
      return $this->Rows;
    }

    /**
     * @param Rows $Rows
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setRows($Rows)
    {
      $this->Rows = $Rows;
      return $this;
    }

    /**
     * @return PaymentRestriction
     */
    public function getPaymentRestriction()
    {
      return $this->PaymentRestriction;
    }

    /**
     * @param PaymentRestriction $PaymentRestriction
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setPaymentRestriction($PaymentRestriction)
    {
      $this->PaymentRestriction = $PaymentRestriction;
      return $this;
    }

    /**
     * @return SeatInformation
     */
    public function getSeatInformation()
    {
      return $this->SeatInformation;
    }

    /**
     * @param SeatInformation $SeatInformation
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setSeatInformation($SeatInformation)
    {
      $this->SeatInformation = $SeatInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
      return $this->Copyright;
    }

    /**
     * @param string $Copyright
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setCopyright($Copyright)
    {
      $this->Copyright = $Copyright;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getGroupSeatPrice()
    {
      return $this->GroupSeatPrice;
    }

    /**
     * @param typeMoney $GroupSeatPrice
     * @return \FilippoToso\Travelport\Air\SeatMapRsp
     */
    public function setGroupSeatPrice($GroupSeatPrice)
    {
      $this->GroupSeatPrice = $GroupSeatPrice;
      return $this;
    }

}
