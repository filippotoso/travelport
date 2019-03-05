<?php

namespace FilippoToso\Travelport\Rail;

class typeTaxInfoWithPaymentRef extends typeTaxInfo
{

    /**
     * @var PaymentRef $PaymentRef
     */
    protected $PaymentRef = null;

    /**
     * @param TaxDetail $TaxDetail
     * @param IncludedInBase $IncludedInBase
     * @param typeRef $Key
     * @param string $Category
     * @param string $CarrierDefinedCategory
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailsRef
     * @param typeRef $CouponRef
     * @param boolean $TaxExempted
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param StringLength1to128 $Text
     * @param typeMoney $Amount
     * @param typeAirport $OriginAirport
     * @param typeAirport $DestinationAirport
     * @param string $CountryCode
     * @param typeRef $FareInfoRef
     * @param PaymentRef $PaymentRef
     */
    public function __construct($TaxDetail = null, $IncludedInBase = null, $Key = null, $Category = null, $CarrierDefinedCategory = null, $SegmentRef = null, $FlightDetailsRef = null, $CouponRef = null, $TaxExempted = null, $ProviderCode = null, $SupplierCode = null, $Text = null, $Amount = null, $OriginAirport = null, $DestinationAirport = null, $CountryCode = null, $FareInfoRef = null, $PaymentRef = null)
    {
      parent::__construct($TaxDetail, $IncludedInBase, $Key, $Category, $CarrierDefinedCategory, $SegmentRef, $FlightDetailsRef, $CouponRef, $TaxExempted, $ProviderCode, $SupplierCode, $Text, $Amount, $OriginAirport, $DestinationAirport, $CountryCode, $FareInfoRef);
      $this->PaymentRef = $PaymentRef;
    }

    /**
     * @return PaymentRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param PaymentRef $PaymentRef
     * @return \FilippoToso\Travelport\Rail\typeTaxInfoWithPaymentRef
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

}
