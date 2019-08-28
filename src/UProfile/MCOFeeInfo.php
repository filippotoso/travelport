<?php

namespace FilippoToso\Travelport\UProfile;

class MCOFeeInfo
{

    /**
     * @var anonymous168 $FeeAppliesToInd
     */
    protected $FeeAppliesToInd = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @param anonymous168 $FeeAppliesToInd
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     */
    public function __construct($FeeAppliesToInd = null, $Amount = null, $Percentage = null)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
    }

    /**
     * @return anonymous168
     */
    public function getFeeAppliesToInd()
    {
      return $this->FeeAppliesToInd;
    }

    /**
     * @param anonymous168 $FeeAppliesToInd
     * @return \FilippoToso\Travelport\UProfile\MCOFeeInfo
     */
    public function setFeeAppliesToInd($FeeAppliesToInd)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UProfile\MCOFeeInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\UProfile\MCOFeeInfo
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
