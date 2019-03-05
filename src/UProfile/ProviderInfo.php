<?php

namespace FilippoToso\Travelport\UProfile;

class ProviderInfo extends typeKeyElement
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
     * @var typeIATA $IATACode
     */
    protected $IATACode = null;

    /**
     * @param typeRef $Key
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     * @param typeIATA $IATACode
     */
    public function __construct($Key = null, $ProviderCode = null, $PseudoCityCode = null, $IATACode = null)
    {
      parent::__construct($Key);
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->IATACode = $IATACode;
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
     * @return \FilippoToso\Travelport\UProfile\ProviderInfo
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
     * @return \FilippoToso\Travelport\UProfile\ProviderInfo
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\UProfile\ProviderInfo
     */
    public function setIATACode($IATACode)
    {
      $this->IATACode = $IATACode;
      return $this;
    }

}
