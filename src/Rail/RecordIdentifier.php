<?php

namespace FilippoToso\Travelport\Rail;

class RecordIdentifier
{

    /**
     * @var typeLocatorCode $UniversalLocatorCode
     */
    protected $UniversalLocatorCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param typeLocatorCode $UniversalLocatorCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($UniversalLocatorCode = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      $this->UniversalLocatorCode = $UniversalLocatorCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalLocatorCode()
    {
      return $this->UniversalLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalLocatorCode
     * @return \FilippoToso\Travelport\Rail\RecordIdentifier
     */
    public function setUniversalLocatorCode($UniversalLocatorCode)
    {
      $this->UniversalLocatorCode = $UniversalLocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\RecordIdentifier
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
     * @return \FilippoToso\Travelport\Rail\RecordIdentifier
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
