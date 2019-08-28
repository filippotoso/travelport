<?php

namespace FilippoToso\Travelport\GDSQueue;

class OptionalServiceModifier
{

    /**
     * @var typeMerchandisingService $Type
     */
    protected $Type = null;

    /**
     * @var typeMerchandisingService $SecondaryType
     */
    protected $SecondaryType = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @var date $TravelDate
     */
    protected $TravelDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param typeMerchandisingService $Type
     * @param typeMerchandisingService $SecondaryType
     * @param typeSupplierCode $SupplierCode
     * @param string $ServiceSubCode
     * @param date $TravelDate
     * @param string $Description
     */
    public function __construct($Type = null, $SecondaryType = null, $SupplierCode = null, $ServiceSubCode = null, $TravelDate = null, $Description = null)
    {
      $this->Type = $Type;
      $this->SecondaryType = $SecondaryType;
      $this->SupplierCode = $SupplierCode;
      $this->ServiceSubCode = $ServiceSubCode;
      $this->TravelDate = $TravelDate;
      $this->Description = $Description;
    }

    /**
     * @return typeMerchandisingService
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMerchandisingService $Type
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeMerchandisingService
     */
    public function getSecondaryType()
    {
      return $this->SecondaryType;
    }

    /**
     * @param typeMerchandisingService $SecondaryType
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setSecondaryType($SecondaryType)
    {
      $this->SecondaryType = $SecondaryType;
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
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param string $ServiceSubCode
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param date $TravelDate
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\GDSQueue\OptionalServiceModifier
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
