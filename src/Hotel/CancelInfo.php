<?php

namespace FilippoToso\Travelport\Hotel;

class CancelInfo
{

    /**
     * @var string $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var typeTrinary $NonRefundableStayIndicator
     */
    protected $NonRefundableStayIndicator = null;

    /**
     * @var \DateTime $CancelDeadline
     */
    protected $CancelDeadline = null;

    /**
     * @var boolean $TaxInclusive
     */
    protected $TaxInclusive = null;

    /**
     * @var boolean $FeeInclusive
     */
    protected $FeeInclusive = null;

    /**
     * @var typeMoney $CancelPenaltyAmount
     */
    protected $CancelPenaltyAmount = null;

    /**
     * @var int $NumberOfNights
     */
    protected $NumberOfNights = null;

    /**
     * @var float $CancelPenaltyPercent
     */
    protected $CancelPenaltyPercent = null;

    /**
     * @var string $CancelPenaltyPercentAppliesTo
     */
    protected $CancelPenaltyPercentAppliesTo = null;

    /**
     * @var string $Method
     */
    protected $Method = null;

    /**
     * @var boolean $Supported
     */
    protected $Supported = null;

    /**
     * @var string $URL
     */
    protected $URL = null;

    /**
     * @var StringLength1to16 $OffsetTimeUnit
     */
    protected $OffsetTimeUnit = null;

    /**
     * @var Numeric0to999 $OffsetUnitMultiplier
     */
    protected $OffsetUnitMultiplier = null;

    /**
     * @var StringLength1to20 $OffsetDropTime
     */
    protected $OffsetDropTime = null;

    /**
     * @param typeTrinary $NonRefundableStayIndicator
     * @param \DateTime $CancelDeadline
     * @param boolean $TaxInclusive
     * @param boolean $FeeInclusive
     * @param typeMoney $CancelPenaltyAmount
     * @param int $NumberOfNights
     * @param float $CancelPenaltyPercent
     * @param string $CancelPenaltyPercentAppliesTo
     * @param string $Method
     * @param boolean $Supported
     * @param string $URL
     * @param StringLength1to16 $OffsetTimeUnit
     * @param Numeric0to999 $OffsetUnitMultiplier
     * @param StringLength1to20 $OffsetDropTime
     */
    public function __construct($NonRefundableStayIndicator = null, \DateTime $CancelDeadline = null, $TaxInclusive = null, $FeeInclusive = null, $CancelPenaltyAmount = null, $NumberOfNights = null, $CancelPenaltyPercent = null, $CancelPenaltyPercentAppliesTo = null, $Method = null, $Supported = null, $URL = null, $OffsetTimeUnit = null, $OffsetUnitMultiplier = null, $OffsetDropTime = null)
    {
      $this->NonRefundableStayIndicator = $NonRefundableStayIndicator;
      $this->CancelDeadline = $CancelDeadline ? $CancelDeadline->format(\DateTime::ATOM) : null;
      $this->TaxInclusive = $TaxInclusive;
      $this->FeeInclusive = $FeeInclusive;
      $this->CancelPenaltyAmount = $CancelPenaltyAmount;
      $this->NumberOfNights = $NumberOfNights;
      $this->CancelPenaltyPercent = $CancelPenaltyPercent;
      $this->CancelPenaltyPercentAppliesTo = $CancelPenaltyPercentAppliesTo;
      $this->Method = $Method;
      $this->Supported = $Supported;
      $this->URL = $URL;
      $this->OffsetTimeUnit = $OffsetTimeUnit;
      $this->OffsetUnitMultiplier = $OffsetUnitMultiplier;
      $this->OffsetDropTime = $OffsetDropTime;
    }

    /**
     * @return string
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param string $CancellationPolicy
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getNonRefundableStayIndicator()
    {
      return $this->NonRefundableStayIndicator;
    }

    /**
     * @param typeTrinary $NonRefundableStayIndicator
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setNonRefundableStayIndicator($NonRefundableStayIndicator)
    {
      $this->NonRefundableStayIndicator = $NonRefundableStayIndicator;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelDeadline()
    {
      if ($this->CancelDeadline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CancelDeadline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CancelDeadline
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setCancelDeadline(\DateTime $CancelDeadline)
    {
      $this->CancelDeadline = $CancelDeadline->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxInclusive()
    {
      return $this->TaxInclusive;
    }

    /**
     * @param boolean $TaxInclusive
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setTaxInclusive($TaxInclusive)
    {
      $this->TaxInclusive = $TaxInclusive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFeeInclusive()
    {
      return $this->FeeInclusive;
    }

    /**
     * @param boolean $FeeInclusive
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setFeeInclusive($FeeInclusive)
    {
      $this->FeeInclusive = $FeeInclusive;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCancelPenaltyAmount()
    {
      return $this->CancelPenaltyAmount;
    }

    /**
     * @param typeMoney $CancelPenaltyAmount
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setCancelPenaltyAmount($CancelPenaltyAmount)
    {
      $this->CancelPenaltyAmount = $CancelPenaltyAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNights()
    {
      return $this->NumberOfNights;
    }

    /**
     * @param int $NumberOfNights
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setNumberOfNights($NumberOfNights)
    {
      $this->NumberOfNights = $NumberOfNights;
      return $this;
    }

    /**
     * @return float
     */
    public function getCancelPenaltyPercent()
    {
      return $this->CancelPenaltyPercent;
    }

    /**
     * @param float $CancelPenaltyPercent
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setCancelPenaltyPercent($CancelPenaltyPercent)
    {
      $this->CancelPenaltyPercent = $CancelPenaltyPercent;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelPenaltyPercentAppliesTo()
    {
      return $this->CancelPenaltyPercentAppliesTo;
    }

    /**
     * @param string $CancelPenaltyPercentAppliesTo
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setCancelPenaltyPercentAppliesTo($CancelPenaltyPercentAppliesTo)
    {
      $this->CancelPenaltyPercentAppliesTo = $CancelPenaltyPercentAppliesTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->Method;
    }

    /**
     * @param string $Method
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setMethod($Method)
    {
      $this->Method = $Method;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSupported()
    {
      return $this->Supported;
    }

    /**
     * @param boolean $Supported
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setSupported($Supported)
    {
      $this->Supported = $Supported;
      return $this;
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getOffsetTimeUnit()
    {
      return $this->OffsetTimeUnit;
    }

    /**
     * @param StringLength1to16 $OffsetTimeUnit
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setOffsetTimeUnit($OffsetTimeUnit)
    {
      $this->OffsetTimeUnit = $OffsetTimeUnit;
      return $this;
    }

    /**
     * @return Numeric0to999
     */
    public function getOffsetUnitMultiplier()
    {
      return $this->OffsetUnitMultiplier;
    }

    /**
     * @param Numeric0to999 $OffsetUnitMultiplier
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setOffsetUnitMultiplier($OffsetUnitMultiplier)
    {
      $this->OffsetUnitMultiplier = $OffsetUnitMultiplier;
      return $this;
    }

    /**
     * @return StringLength1to20
     */
    public function getOffsetDropTime()
    {
      return $this->OffsetDropTime;
    }

    /**
     * @param StringLength1to20 $OffsetDropTime
     * @return \FilippoToso\Travelport\Hotel\CancelInfo
     */
    public function setOffsetDropTime($OffsetDropTime)
    {
      $this->OffsetDropTime = $OffsetDropTime;
      return $this;
    }

}
