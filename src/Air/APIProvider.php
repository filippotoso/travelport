<?php

namespace FilippoToso\Travelport\Air;

class APIProvider
{

    /**
     * @var TransactionType $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var AvailablePseudoCityCode[] $AvailablePseudoCityCode
     */
    protected $AvailablePseudoCityCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeIATA $IATACode
     */
    protected $IATACode = null;

    /**
     * @param TransactionType $TransactionType
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeIATA $IATACode
     */
    public function __construct($TransactionType, $ProviderCode, $SupplierCode, $IATACode)
    {
      $this->TransactionType = $TransactionType;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->IATACode = $IATACode;
    }

    /**
     * @return TransactionType
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param TransactionType $TransactionType
     * @return \FilippoToso\Travelport\Air\APIProvider
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

    /**
     * @return AvailablePseudoCityCode[]
     */
    public function getAvailablePseudoCityCode()
    {
      return $this->AvailablePseudoCityCode;
    }

    /**
     * @param AvailablePseudoCityCode[] $AvailablePseudoCityCode
     * @return \FilippoToso\Travelport\Air\APIProvider
     */
    public function setAvailablePseudoCityCode(array $AvailablePseudoCityCode = null)
    {
      $this->AvailablePseudoCityCode = $AvailablePseudoCityCode;
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
     * @return \FilippoToso\Travelport\Air\APIProvider
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
     * @return \FilippoToso\Travelport\Air\APIProvider
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATACode()
    {
      return $this->IATACode;
    }

    /**
     * @param typeIATA $IATACode
     * @return \FilippoToso\Travelport\Air\APIProvider
     */
    public function setIATACode($IATACode)
    {
      $this->IATACode = $IATACode;
      return $this;
    }

}
