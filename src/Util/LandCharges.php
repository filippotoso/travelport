<?php

namespace FilippoToso\Travelport\Util;

class LandCharges
{

    /**
     * @var Tax $Tax
     */
    protected $Tax = null;

    /**
     * @var typeMoney $Base
     */
    protected $Base = null;

    /**
     * @var typeMoney $Total
     */
    protected $Total = null;

    /**
     * @var typeMoney $Miscellaneous
     */
    protected $Miscellaneous = null;

    /**
     * @var typeMoney $PrePaid
     */
    protected $PrePaid = null;

    /**
     * @var typeMoney $Deposit
     */
    protected $Deposit = null;

    /**
     * @param Tax $Tax
     * @param typeMoney $Base
     * @param typeMoney $Total
     * @param typeMoney $Miscellaneous
     * @param typeMoney $PrePaid
     * @param typeMoney $Deposit
     */
    public function __construct($Tax = null, $Base = null, $Total = null, $Miscellaneous = null, $PrePaid = null, $Deposit = null)
    {
      $this->Tax = $Tax;
      $this->Base = $Base;
      $this->Total = $Total;
      $this->Miscellaneous = $Miscellaneous;
      $this->PrePaid = $PrePaid;
      $this->Deposit = $Deposit;
    }

    /**
     * @return Tax
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax $Tax
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param typeMoney $Base
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param typeMoney $Total
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMiscellaneous()
    {
      return $this->Miscellaneous;
    }

    /**
     * @param typeMoney $Miscellaneous
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setMiscellaneous($Miscellaneous)
    {
      $this->Miscellaneous = $Miscellaneous;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPrePaid()
    {
      return $this->PrePaid;
    }

    /**
     * @param typeMoney $PrePaid
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setPrePaid($PrePaid)
    {
      $this->PrePaid = $PrePaid;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getDeposit()
    {
      return $this->Deposit;
    }

    /**
     * @param typeMoney $Deposit
     * @return \FilippoToso\Travelport\Util\LandCharges
     */
    public function setDeposit($Deposit)
    {
      $this->Deposit = $Deposit;
      return $this;
    }

}
