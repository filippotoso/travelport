<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleRulesRsp extends BaseSearchRsp
{

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @var string $OperationTime
     */
    protected $OperationTime = null;

    /**
     * @var StartEndTimes $StartEndTimes
     */
    protected $StartEndTimes = null;

    /**
     * @var RentalPeriodRules $RentalPeriodRules
     */
    protected $RentalPeriodRules = null;

    /**
     * @var PrePayCancelInfo[] $PrePayCancelInfo
     */
    protected $PrePayCancelInfo = null;

    /**
     * @var PaymentRule[] $PaymentRule
     */
    protected $PaymentRule = null;

    /**
     * @var PaymentCreditCard[] $PaymentCreditCard
     */
    protected $PaymentCreditCard = null;

    /**
     * @var typeVehicleCharge[] $VehicleCharge
     */
    protected $VehicleCharge = null;

    /**
     * @var MarketingInformation $MarketingInformation
     */
    protected $MarketingInformation = null;

    /**
     * @var typeKeyword $Policy
     */
    protected $Policy = null;

    /**
     * @var typeVehicleLocationInformation $PickupLocationInformation
     */
    protected $PickupLocationInformation = null;

    /**
     * @var typeVehicleLocationInformation $ReturnLocationInformation
     */
    protected $ReturnLocationInformation = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param Vehicle $Vehicle
     * @param string $OperationTime
     * @param MarketingInformation $MarketingInformation
     * @param typeKeyword $Policy
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $Vehicle = null, $OperationTime = null, $MarketingInformation = null, $Policy = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
      $this->Vehicle = $Vehicle;
      $this->OperationTime = $OperationTime;
      $this->MarketingInformation = $MarketingInformation;
      $this->Policy = $Policy;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationTime()
    {
      return $this->OperationTime;
    }

    /**
     * @param string $OperationTime
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setOperationTime($OperationTime)
    {
      $this->OperationTime = $OperationTime;
      return $this;
    }

    /**
     * @return StartEndTimes
     */
    public function getStartEndTimes()
    {
      return $this->StartEndTimes;
    }

    /**
     * @param StartEndTimes $StartEndTimes
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setStartEndTimes($StartEndTimes)
    {
      $this->StartEndTimes = $StartEndTimes;
      return $this;
    }

    /**
     * @return RentalPeriodRules
     */
    public function getRentalPeriodRules()
    {
      return $this->RentalPeriodRules;
    }

    /**
     * @param RentalPeriodRules $RentalPeriodRules
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setRentalPeriodRules($RentalPeriodRules)
    {
      $this->RentalPeriodRules = $RentalPeriodRules;
      return $this;
    }

    /**
     * @return PrePayCancelInfo[]
     */
    public function getPrePayCancelInfo()
    {
      return $this->PrePayCancelInfo;
    }

    /**
     * @param PrePayCancelInfo[] $PrePayCancelInfo
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setPrePayCancelInfo(array $PrePayCancelInfo = null)
    {
      $this->PrePayCancelInfo = $PrePayCancelInfo;
      return $this;
    }

    /**
     * @return PaymentRule[]
     */
    public function getPaymentRule()
    {
      return $this->PaymentRule;
    }

    /**
     * @param PaymentRule[] $PaymentRule
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setPaymentRule(array $PaymentRule = null)
    {
      $this->PaymentRule = $PaymentRule;
      return $this;
    }

    /**
     * @return PaymentCreditCard[]
     */
    public function getPaymentCreditCard()
    {
      return $this->PaymentCreditCard;
    }

    /**
     * @param PaymentCreditCard[] $PaymentCreditCard
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setPaymentCreditCard(array $PaymentCreditCard = null)
    {
      $this->PaymentCreditCard = $PaymentCreditCard;
      return $this;
    }

    /**
     * @return typeVehicleCharge[]
     */
    public function getVehicleCharge()
    {
      return $this->VehicleCharge;
    }

    /**
     * @param typeVehicleCharge[] $VehicleCharge
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setVehicleCharge(array $VehicleCharge = null)
    {
      $this->VehicleCharge = $VehicleCharge;
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
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setMarketingInformation($MarketingInformation)
    {
      $this->MarketingInformation = $MarketingInformation;
      return $this;
    }

    /**
     * @return typeKeyword
     */
    public function getPolicy()
    {
      return $this->Policy;
    }

    /**
     * @param typeKeyword $Policy
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setPolicy($Policy)
    {
      $this->Policy = $Policy;
      return $this;
    }

    /**
     * @return typeVehicleLocationInformation
     */
    public function getPickupLocationInformation()
    {
      return $this->PickupLocationInformation;
    }

    /**
     * @param typeVehicleLocationInformation $PickupLocationInformation
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setPickupLocationInformation($PickupLocationInformation)
    {
      $this->PickupLocationInformation = $PickupLocationInformation;
      return $this;
    }

    /**
     * @return typeVehicleLocationInformation
     */
    public function getReturnLocationInformation()
    {
      return $this->ReturnLocationInformation;
    }

    /**
     * @param typeVehicleLocationInformation $ReturnLocationInformation
     * @return \FilippoToso\Travelport\Vehicle\VehicleRulesRsp
     */
    public function setReturnLocationInformation($ReturnLocationInformation)
    {
      $this->ReturnLocationInformation = $ReturnLocationInformation;
      return $this;
    }

}
