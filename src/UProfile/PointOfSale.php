<?php

namespace FilippoToso\Travelport\UProfile;

class PointOfSale
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeIATA $IATA
     */
    protected $IATA = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     * @param typeRef $Key
     * @param typeIATA $IATA
     */
    public function __construct($ProviderCode = null, $PseudoCityCode = null, $Key = null, $IATA = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->Key = $Key;
      $this->IATA = $IATA;
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
     * @return \FilippoToso\Travelport\UProfile\PointOfSale
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\UProfile\PointOfSale
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\UProfile\PointOfSale
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATA()
    {
      return $this->IATA;
    }

    /**
     * @param typeIATA $IATA
     * @return \FilippoToso\Travelport\UProfile\PointOfSale
     */
    public function setIATA($IATA)
    {
      $this->IATA = $IATA;
      return $this;
    }

}
