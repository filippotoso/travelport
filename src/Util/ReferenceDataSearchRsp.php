<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataSearchRsp extends BaseRsp
{

    /**
     * @var Airport[] $Airport
     */
    protected $Airport = null;

    /**
     * @var Carrier[] $Carrier
     */
    protected $Carrier = null;

    /**
     * @var City[] $City
     */
    protected $City = null;

    /**
     * @var Country[] $Country
     */
    protected $Country = null;

    /**
     * @var Currency[] $Currency
     */
    protected $Currency = null;

    /**
     * @var Equipment[] $Equipment
     */
    protected $Equipment = null;

    /**
     * @var PassengerType[] $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var State[] $State
     */
    protected $State = null;

    /**
     * @var SsrType[] $SsrType
     */
    protected $SsrType = null;

    /**
     * @var TaxCategory[] $TaxCategory
     */
    protected $TaxCategory = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
    }

    /**
     * @return Airport[]
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport[] $Airport
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setAirport(array $Airport = null)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return Carrier[]
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier[] $Carrier
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setCarrier(array $Carrier = null)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return City[]
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City[] $City
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setCity(array $City = null)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return Country[]
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country[] $Country
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setCountry(array $Country = null)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return Currency[]
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param Currency[] $Currency
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setCurrency(array $Currency = null)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return Equipment[]
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param Equipment[] $Equipment
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setEquipment(array $Equipment = null)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return PassengerType[]
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerType[] $PassengerType
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setPassengerType(array $PassengerType = null)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return State[]
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param State[] $State
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setState(array $State = null)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return SsrType[]
     */
    public function getSsrType()
    {
      return $this->SsrType;
    }

    /**
     * @param SsrType[] $SsrType
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setSsrType(array $SsrType = null)
    {
      $this->SsrType = $SsrType;
      return $this;
    }

    /**
     * @return TaxCategory[]
     */
    public function getTaxCategory()
    {
      return $this->TaxCategory;
    }

    /**
     * @param TaxCategory[] $TaxCategory
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchRsp
     */
    public function setTaxCategory(array $TaxCategory = null)
    {
      $this->TaxCategory = $TaxCategory;
      return $this;
    }

}
