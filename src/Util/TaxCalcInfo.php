<?php

namespace FilippoToso\Travelport\Util;

class TaxCalcInfo
{

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeMoney $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var typeMoney $QSurcharge
     */
    protected $QSurcharge = null;

    /**
     * @var typeMoney $StopOverFee
     */
    protected $StopOverFee = null;

    /**
     * @var typeMoney $Tax
     */
    protected $Tax = null;

    /**
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeMoney $BaseFare
     * @param typeMoney $QSurcharge
     * @param typeMoney $StopOverFee
     * @param typeMoney $Tax
     */
    public function __construct($Origin = null, $Destination = null, $BaseFare = null, $QSurcharge = null, $StopOverFee = null, $Tax = null)
    {
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->BaseFare = $BaseFare;
      $this->QSurcharge = $QSurcharge;
      $this->StopOverFee = $StopOverFee;
      $this->Tax = $Tax;
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
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
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
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param typeMoney $BaseFare
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getQSurcharge()
    {
      return $this->QSurcharge;
    }

    /**
     * @param typeMoney $QSurcharge
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
     */
    public function setQSurcharge($QSurcharge)
    {
      $this->QSurcharge = $QSurcharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getStopOverFee()
    {
      return $this->StopOverFee;
    }

    /**
     * @param typeMoney $StopOverFee
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
     */
    public function setStopOverFee($StopOverFee)
    {
      $this->StopOverFee = $StopOverFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param typeMoney $Tax
     * @return \FilippoToso\Travelport\Util\TaxCalcInfo
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
