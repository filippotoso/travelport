<?php

namespace FilippoToso\Travelport\Air;

class AirMerchandisingOfferAvailabilityRsp extends BaseRsp
{

    /**
     * @var AirSolution $AirSolution
     */
    protected $AirSolution = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var EmbargoList $EmbargoList
     */
    protected $EmbargoList = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirSolution $AirSolution
     * @param Remark $Remark
     * @param OptionalServices $OptionalServices
     * @param EmbargoList $EmbargoList
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirSolution = null, $Remark = null, $OptionalServices = null, $EmbargoList = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirSolution = $AirSolution;
      $this->Remark = $Remark;
      $this->OptionalServices = $OptionalServices;
      $this->EmbargoList = $EmbargoList;
    }

    /**
     * @return AirSolution
     */
    public function getAirSolution()
    {
      return $this->AirSolution;
    }

    /**
     * @param AirSolution $AirSolution
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityRsp
     */
    public function setAirSolution($AirSolution)
    {
      $this->AirSolution = $AirSolution;
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
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityRsp
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityRsp
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return EmbargoList
     */
    public function getEmbargoList()
    {
      return $this->EmbargoList;
    }

    /**
     * @param EmbargoList $EmbargoList
     * @return \FilippoToso\Travelport\Air\AirMerchandisingOfferAvailabilityRsp
     */
    public function setEmbargoList($EmbargoList)
    {
      $this->EmbargoList = $EmbargoList;
      return $this;
    }

}
