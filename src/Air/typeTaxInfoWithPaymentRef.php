<?php

namespace FilippoToso\Travelport\Air;

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
    public function __construct($TaxDetail, $IncludedInBase, $Key, $Category, $CarrierDefinedCategory, $SegmentRef, $FlightDetailsRef, $CouponRef, $TaxExempted, $ProviderCode, $SupplierCode, $Text, $Amount, $OriginAirport, $DestinationAirport, $CountryCode, $FareInfoRef, $PaymentRef)
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
     * @return \FilippoToso\Travelport\Air\typeTaxInfoWithPaymentRef
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

}
