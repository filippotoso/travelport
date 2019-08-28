<?php

namespace FilippoToso\Travelport\Vehicle;

class SupplierRate extends typeVehicleRates
{

    /**
     * @var typeMoney $DiscountAmount
     */
    protected $DiscountAmount = null;

    /**
     * @var typeMoney $MandatoryChargeTotal
     */
    protected $MandatoryChargeTotal = null;

    /**
     * @var typeMoney $ApproximateTotal
     */
    protected $ApproximateTotal = null;

    /**
     * @param typeMoney $EstimatedTotalAmount
     * @param typeMoney $BaseRate
     * @param typeMoney $RateForPeriod
     * @param typeMoney $DropOffCharge
     * @param typeMoney $YoungDriverCharge
     * @param typeMoney $SeniorDriverCharge
     * @param typeMoney $FuelSurcharge
     * @param typeMoney $ExtraMileageCharge
     * @param typeMoney $PayNow
     * @param typeMoney $PayLater
     * @param typeMoney $DiscountAmount
     * @param typeMoney $MandatoryChargeTotal
     * @param typeMoney $ApproximateTotal
     */
    public function __construct($EstimatedTotalAmount = null, $BaseRate = null, $RateForPeriod = null, $DropOffCharge = null, $YoungDriverCharge = null, $SeniorDriverCharge = null, $FuelSurcharge = null, $ExtraMileageCharge = null, $PayNow = null, $PayLater = null, $DiscountAmount = null, $MandatoryChargeTotal = null, $ApproximateTotal = null)
    {
      parent::__construct($EstimatedTotalAmount, $BaseRate, $RateForPeriod, $DropOffCharge, $YoungDriverCharge, $SeniorDriverCharge, $FuelSurcharge, $ExtraMileageCharge, $PayNow, $PayLater);
      $this->DiscountAmount = $DiscountAmount;
      $this->MandatoryChargeTotal = $MandatoryChargeTotal;
      $this->ApproximateTotal = $ApproximateTotal;
    }

    /**
     * @return typeMoney
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param typeMoney $DiscountAmount
     * @return \FilippoToso\Travelport\Vehicle\SupplierRate
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMandatoryChargeTotal()
    {
      return $this->MandatoryChargeTotal;
    }

    /**
     * @param typeMoney $MandatoryChargeTotal
     * @return \FilippoToso\Travelport\Vehicle\SupplierRate
     */
    public function setMandatoryChargeTotal($MandatoryChargeTotal)
    {
      $this->MandatoryChargeTotal = $MandatoryChargeTotal;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotal()
    {
      return $this->ApproximateTotal;
    }

    /**
     * @param typeMoney $ApproximateTotal
     * @return \FilippoToso\Travelport\Vehicle\SupplierRate
     */
    public function setApproximateTotal($ApproximateTotal)
    {
      $this->ApproximateTotal = $ApproximateTotal;
      return $this;
    }

}
