<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellQualifySearchCriteria extends UpsellSearchCriteria
{

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @param EffectiveDate $EffectiveDate
     * @param ExpirationDate $ExpirationDate
     * @param AccountCode $AccountCode
     * @param typeCarrier $Carrier
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     */
    public function __construct($EffectiveDate = null, $ExpirationDate = null, $AccountCode = null, $Carrier = null, $Origin = null, $Destination = null)
    {
      parent::__construct($EffectiveDate, $ExpirationDate);
      $this->AccountCode = $AccountCode;
      $this->Carrier = $Carrier;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Util\AirUpsellQualifySearchCriteria
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\AirUpsellQualifySearchCriteria
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Util\AirUpsellQualifySearchCriteria
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Util\AirUpsellQualifySearchCriteria
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

}
