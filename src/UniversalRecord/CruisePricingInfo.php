<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CruisePricingInfo
{

    /**
     * @var Fare $Fare
     */
    protected $Fare = null;

    /**
     * @var Charges $Charges
     */
    protected $Charges = null;

    /**
     * @var Discount $Discount
     */
    protected $Discount = null;

    /**
     * @var Deposit $Deposit
     */
    protected $Deposit = null;

    /**
     * @var Balance $Balance
     */
    protected $Balance = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var CruiseFees $CruiseFees
     */
    protected $CruiseFees = null;

    /**
     * @var CruiseBookingTravelerRef $CruiseBookingTravelerRef
     */
    protected $CruiseBookingTravelerRef = null;

    /**
     * @var typeMoney $NetFare
     */
    protected $NetFare = null;

    /**
     * @var typeMoney $ReceivedAmount
     */
    protected $ReceivedAmount = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    protected $ApproximateBasePrice = null;

    /**
     * @var typeMoney $EquivalentBasePrice
     */
    protected $EquivalentBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    protected $Fees = null;

    /**
     * @var typeMoney $Services
     */
    protected $Services = null;

    /**
     * @var typeMoney $ApproximateTaxes
     */
    protected $ApproximateTaxes = null;

    /**
     * @var typeMoney $ApproximateFees
     */
    protected $ApproximateFees = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param Fare $Fare
     * @param Charges $Charges
     * @param Discount $Discount
     * @param Deposit $Deposit
     * @param Balance $Balance
     * @param Commission $Commission
     * @param CruiseFees $CruiseFees
     * @param CruiseBookingTravelerRef $CruiseBookingTravelerRef
     * @param typeMoney $NetFare
     * @param typeMoney $ReceivedAmount
     * @param typeMoney $TotalPrice
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateTotalPrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $EquivalentBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param typeMoney $Services
     * @param typeMoney $ApproximateTaxes
     * @param typeMoney $ApproximateFees
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($Fare = null, $Charges = null, $Discount = null, $Deposit = null, $Balance = null, $Commission = null, $CruiseFees = null, $CruiseBookingTravelerRef = null, $NetFare = null, $ReceivedAmount = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->Fare = $Fare;
      $this->Charges = $Charges;
      $this->Discount = $Discount;
      $this->Deposit = $Deposit;
      $this->Balance = $Balance;
      $this->Commission = $Commission;
      $this->CruiseFees = $CruiseFees;
      $this->CruiseBookingTravelerRef = $CruiseBookingTravelerRef;
      $this->NetFare = $NetFare;
      $this->ReceivedAmount = $ReceivedAmount;
      $this->TotalPrice = $TotalPrice;
      $this->BasePrice = $BasePrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Services = $Services;
      $this->ApproximateTaxes = $ApproximateTaxes;
      $this->ApproximateFees = $ApproximateFees;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return Fare
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param Fare $Fare
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return Charges
     */
    public function getCharges()
    {
      return $this->Charges;
    }

    /**
     * @param Charges $Charges
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setCharges($Charges)
    {
      $this->Charges = $Charges;
      return $this;
    }

    /**
     * @return Discount
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param Discount $Discount
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return Deposit
     */
    public function getDeposit()
    {
      return $this->Deposit;
    }

    /**
     * @param Deposit $Deposit
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setDeposit($Deposit)
    {
      $this->Deposit = $Deposit;
      return $this;
    }

    /**
     * @return Balance
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param Balance $Balance
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return CruiseFees
     */
    public function getCruiseFees()
    {
      return $this->CruiseFees;
    }

    /**
     * @param CruiseFees $CruiseFees
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setCruiseFees($CruiseFees)
    {
      $this->CruiseFees = $CruiseFees;
      return $this;
    }

    /**
     * @return CruiseBookingTravelerRef
     */
    public function getCruiseBookingTravelerRef()
    {
      return $this->CruiseBookingTravelerRef;
    }

    /**
     * @param CruiseBookingTravelerRef $CruiseBookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setCruiseBookingTravelerRef($CruiseBookingTravelerRef)
    {
      $this->CruiseBookingTravelerRef = $CruiseBookingTravelerRef;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getNetFare()
    {
      return $this->NetFare;
    }

    /**
     * @param typeMoney $NetFare
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setNetFare($NetFare)
    {
      $this->NetFare = $NetFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getReceivedAmount()
    {
      return $this->ReceivedAmount;
    }

    /**
     * @param typeMoney $ReceivedAmount
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setReceivedAmount($ReceivedAmount)
    {
      $this->ReceivedAmount = $ReceivedAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBasePrice()
    {
      return $this->EquivalentBasePrice;
    }

    /**
     * @param typeMoney $EquivalentBasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setEquivalentBasePrice($EquivalentBasePrice)
    {
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param typeMoney $Services
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTaxes()
    {
      return $this->ApproximateTaxes;
    }

    /**
     * @param typeMoney $ApproximateTaxes
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setApproximateTaxes($ApproximateTaxes)
    {
      $this->ApproximateTaxes = $ApproximateTaxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateFees()
    {
      return $this->ApproximateFees;
    }

    /**
     * @param typeMoney $ApproximateFees
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\UniversalRecord\CruisePricingInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
