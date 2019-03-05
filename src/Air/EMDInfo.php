<?php

namespace FilippoToso\Travelport\Air;

class EMDInfo
{

    /**
     * @var EMDTravelerInfo $EMDTravelerInfo
     */
    protected $EMDTravelerInfo = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var ElectronicMiscDocument $ElectronicMiscDocument
     */
    protected $ElectronicMiscDocument = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var EMDPricingInfo $EMDPricingInfo
     */
    protected $EMDPricingInfo = null;

    /**
     * @var EMDEndorsement $EMDEndorsement
     */
    protected $EMDEndorsement = null;

    /**
     * @var string $FareCalc
     */
    protected $FareCalc = null;

    /**
     * @var EMDCommission $EMDCommission
     */
    protected $EMDCommission = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @param SupplierLocator $SupplierLocator
     * @param ElectronicMiscDocument $ElectronicMiscDocument
     * @param Payment $Payment
     * @param FormOfPayment $FormOfPayment
     * @param EMDPricingInfo $EMDPricingInfo
     * @param EMDEndorsement $EMDEndorsement
     * @param string $FareCalc
     * @param EMDCommission $EMDCommission
     * @param typeRef $Key
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($EMDTravelerInfo = null, $SupplierLocator = null, $ElectronicMiscDocument = null, $Payment = null, $FormOfPayment = null, $EMDPricingInfo = null, $EMDEndorsement = null, $FareCalc = null, $EMDCommission = null, $Key = null, $ProviderCode = null, $ProviderLocatorCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->EMDTravelerInfo = $EMDTravelerInfo;
      $this->SupplierLocator = $SupplierLocator;
      $this->ElectronicMiscDocument = $ElectronicMiscDocument;
      $this->Payment = $Payment;
      $this->FormOfPayment = $FormOfPayment;
      $this->EMDPricingInfo = $EMDPricingInfo;
      $this->EMDEndorsement = $EMDEndorsement;
      $this->FareCalc = $FareCalc;
      $this->EMDCommission = $EMDCommission;
      $this->Key = $Key;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return EMDTravelerInfo
     */
    public function getEMDTravelerInfo()
    {
      return $this->EMDTravelerInfo;
    }

    /**
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setEMDTravelerInfo($EMDTravelerInfo)
    {
      $this->EMDTravelerInfo = $EMDTravelerInfo;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return ElectronicMiscDocument
     */
    public function getElectronicMiscDocument()
    {
      return $this->ElectronicMiscDocument;
    }

    /**
     * @param ElectronicMiscDocument $ElectronicMiscDocument
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setElectronicMiscDocument($ElectronicMiscDocument)
    {
      $this->ElectronicMiscDocument = $ElectronicMiscDocument;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return EMDPricingInfo
     */
    public function getEMDPricingInfo()
    {
      return $this->EMDPricingInfo;
    }

    /**
     * @param EMDPricingInfo $EMDPricingInfo
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setEMDPricingInfo($EMDPricingInfo)
    {
      $this->EMDPricingInfo = $EMDPricingInfo;
      return $this;
    }

    /**
     * @return EMDEndorsement
     */
    public function getEMDEndorsement()
    {
      return $this->EMDEndorsement;
    }

    /**
     * @param EMDEndorsement $EMDEndorsement
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setEMDEndorsement($EMDEndorsement)
    {
      $this->EMDEndorsement = $EMDEndorsement;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalc()
    {
      return $this->FareCalc;
    }

    /**
     * @param string $FareCalc
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setFareCalc($FareCalc)
    {
      $this->FareCalc = $FareCalc;
      return $this;
    }

    /**
     * @return EMDCommission
     */
    public function getEMDCommission()
    {
      return $this->EMDCommission;
    }

    /**
     * @param EMDCommission $EMDCommission
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setEMDCommission($EMDCommission)
    {
      $this->EMDCommission = $EMDCommission;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\EMDInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
