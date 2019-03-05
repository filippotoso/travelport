<?php

namespace FilippoToso\Travelport\GDSQueue;

class CHGSFRType
{

    /**
     * @var string $Voluntary
     */
    protected $Voluntary = null;

    /**
     * @var string $Involuntary
     */
    protected $Involuntary = null;

    /**
     * @var string $CancellationsRefunds
     */
    protected $CancellationsRefunds = null;

    /**
     * @var string $TktNonRef
     */
    protected $TktNonRef = null;

    /**
     * @var string $Cancellation
     */
    protected $Cancellation = null;

    /**
     * @var string $NoShowPenalty
     */
    protected $NoShowPenalty = null;

    /**
     * @var string $ChangeItinPenalty
     */
    protected $ChangeItinPenalty = null;

    /**
     * @var string $ReplacementPenalty
     */
    protected $ReplacementPenalty = null;

    /**
     * @var string $ChangesNoReissuePenalty
     */
    protected $ChangesNoReissuePenalty = null;

    /**
     * @var string $TktRefPenalty
     */
    protected $TktRefPenalty = null;

    /**
     * @var string $UntktPTAsPenalty
     */
    protected $UntktPTAsPenalty = null;

    /**
     * @var string $PenaltyCharges
     */
    protected $PenaltyCharges = null;

    /**
     * @var string $PortionOfTktPenalty
     */
    protected $PortionOfTktPenalty = null;

    /**
     * @var int $Amt1
     */
    protected $Amt1 = null;

    /**
     * @var string $Currency1
     */
    protected $Currency1 = null;

    /**
     * @var int $Decimal1
     */
    protected $Decimal1 = null;

    /**
     * @var int $Amt2
     */
    protected $Amt2 = null;

    /**
     * @var string $Currency2
     */
    protected $Currency2 = null;

    /**
     * @var int $Decimal2
     */
    protected $Decimal2 = null;

    /**
     * @var int $Percent
     */
    protected $Percent = null;

    /**
     * @var string $HighLow
     */
    protected $HighLow = null;

    /**
     * @var string $PaxDeathWaiver
     */
    protected $PaxDeathWaiver = null;

    /**
     * @var string $PaxIllWaiver
     */
    protected $PaxIllWaiver = null;

    /**
     * @var string $FamMemberDeathWaiver
     */
    protected $FamMemberDeathWaiver = null;

    /**
     * @var string $FamMemberIllWaiver
     */
    protected $FamMemberIllWaiver = null;

    /**
     * @var string $SchedChangeWaiver
     */
    protected $SchedChangeWaiver = null;

    /**
     * @var string $TktUpgradeWaiver
     */
    protected $TktUpgradeWaiver = null;

    /**
     * @param string $Voluntary
     * @param string $Involuntary
     * @param string $CancellationsRefunds
     * @param string $TktNonRef
     * @param string $Cancellation
     * @param string $NoShowPenalty
     * @param string $ChangeItinPenalty
     * @param string $ReplacementPenalty
     * @param string $ChangesNoReissuePenalty
     * @param string $TktRefPenalty
     * @param string $UntktPTAsPenalty
     * @param string $PenaltyCharges
     * @param string $PortionOfTktPenalty
     * @param int $Amt1
     * @param string $Currency1
     * @param int $Decimal1
     * @param int $Amt2
     * @param string $Currency2
     * @param int $Decimal2
     * @param int $Percent
     * @param string $HighLow
     * @param string $PaxDeathWaiver
     * @param string $PaxIllWaiver
     * @param string $FamMemberDeathWaiver
     * @param string $FamMemberIllWaiver
     * @param string $SchedChangeWaiver
     * @param string $TktUpgradeWaiver
     */
    public function __construct($Voluntary = null, $Involuntary = null, $CancellationsRefunds = null, $TktNonRef = null, $Cancellation = null, $NoShowPenalty = null, $ChangeItinPenalty = null, $ReplacementPenalty = null, $ChangesNoReissuePenalty = null, $TktRefPenalty = null, $UntktPTAsPenalty = null, $PenaltyCharges = null, $PortionOfTktPenalty = null, $Amt1 = null, $Currency1 = null, $Decimal1 = null, $Amt2 = null, $Currency2 = null, $Decimal2 = null, $Percent = null, $HighLow = null, $PaxDeathWaiver = null, $PaxIllWaiver = null, $FamMemberDeathWaiver = null, $FamMemberIllWaiver = null, $SchedChangeWaiver = null, $TktUpgradeWaiver = null)
    {
      $this->Voluntary = $Voluntary;
      $this->Involuntary = $Involuntary;
      $this->CancellationsRefunds = $CancellationsRefunds;
      $this->TktNonRef = $TktNonRef;
      $this->Cancellation = $Cancellation;
      $this->NoShowPenalty = $NoShowPenalty;
      $this->ChangeItinPenalty = $ChangeItinPenalty;
      $this->ReplacementPenalty = $ReplacementPenalty;
      $this->ChangesNoReissuePenalty = $ChangesNoReissuePenalty;
      $this->TktRefPenalty = $TktRefPenalty;
      $this->UntktPTAsPenalty = $UntktPTAsPenalty;
      $this->PenaltyCharges = $PenaltyCharges;
      $this->PortionOfTktPenalty = $PortionOfTktPenalty;
      $this->Amt1 = $Amt1;
      $this->Currency1 = $Currency1;
      $this->Decimal1 = $Decimal1;
      $this->Amt2 = $Amt2;
      $this->Currency2 = $Currency2;
      $this->Decimal2 = $Decimal2;
      $this->Percent = $Percent;
      $this->HighLow = $HighLow;
      $this->PaxDeathWaiver = $PaxDeathWaiver;
      $this->PaxIllWaiver = $PaxIllWaiver;
      $this->FamMemberDeathWaiver = $FamMemberDeathWaiver;
      $this->FamMemberIllWaiver = $FamMemberIllWaiver;
      $this->SchedChangeWaiver = $SchedChangeWaiver;
      $this->TktUpgradeWaiver = $TktUpgradeWaiver;
    }

    /**
     * @return string
     */
    public function getVoluntary()
    {
      return $this->Voluntary;
    }

    /**
     * @param string $Voluntary
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setVoluntary($Voluntary)
    {
      $this->Voluntary = $Voluntary;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoluntary()
    {
      return $this->Involuntary;
    }

    /**
     * @param string $Involuntary
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setInvoluntary($Involuntary)
    {
      $this->Involuntary = $Involuntary;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancellationsRefunds()
    {
      return $this->CancellationsRefunds;
    }

    /**
     * @param string $CancellationsRefunds
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setCancellationsRefunds($CancellationsRefunds)
    {
      $this->CancellationsRefunds = $CancellationsRefunds;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktNonRef()
    {
      return $this->TktNonRef;
    }

    /**
     * @param string $TktNonRef
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setTktNonRef($TktNonRef)
    {
      $this->TktNonRef = $TktNonRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancellation()
    {
      return $this->Cancellation;
    }

    /**
     * @param string $Cancellation
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setCancellation($Cancellation)
    {
      $this->Cancellation = $Cancellation;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoShowPenalty()
    {
      return $this->NoShowPenalty;
    }

    /**
     * @param string $NoShowPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setNoShowPenalty($NoShowPenalty)
    {
      $this->NoShowPenalty = $NoShowPenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getChangeItinPenalty()
    {
      return $this->ChangeItinPenalty;
    }

    /**
     * @param string $ChangeItinPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setChangeItinPenalty($ChangeItinPenalty)
    {
      $this->ChangeItinPenalty = $ChangeItinPenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getReplacementPenalty()
    {
      return $this->ReplacementPenalty;
    }

    /**
     * @param string $ReplacementPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setReplacementPenalty($ReplacementPenalty)
    {
      $this->ReplacementPenalty = $ReplacementPenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getChangesNoReissuePenalty()
    {
      return $this->ChangesNoReissuePenalty;
    }

    /**
     * @param string $ChangesNoReissuePenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setChangesNoReissuePenalty($ChangesNoReissuePenalty)
    {
      $this->ChangesNoReissuePenalty = $ChangesNoReissuePenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktRefPenalty()
    {
      return $this->TktRefPenalty;
    }

    /**
     * @param string $TktRefPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setTktRefPenalty($TktRefPenalty)
    {
      $this->TktRefPenalty = $TktRefPenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getUntktPTAsPenalty()
    {
      return $this->UntktPTAsPenalty;
    }

    /**
     * @param string $UntktPTAsPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setUntktPTAsPenalty($UntktPTAsPenalty)
    {
      $this->UntktPTAsPenalty = $UntktPTAsPenalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getPenaltyCharges()
    {
      return $this->PenaltyCharges;
    }

    /**
     * @param string $PenaltyCharges
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setPenaltyCharges($PenaltyCharges)
    {
      $this->PenaltyCharges = $PenaltyCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortionOfTktPenalty()
    {
      return $this->PortionOfTktPenalty;
    }

    /**
     * @param string $PortionOfTktPenalty
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setPortionOfTktPenalty($PortionOfTktPenalty)
    {
      $this->PortionOfTktPenalty = $PortionOfTktPenalty;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmt1()
    {
      return $this->Amt1;
    }

    /**
     * @param int $Amt1
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setAmt1($Amt1)
    {
      $this->Amt1 = $Amt1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency1()
    {
      return $this->Currency1;
    }

    /**
     * @param string $Currency1
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setCurrency1($Currency1)
    {
      $this->Currency1 = $Currency1;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimal1()
    {
      return $this->Decimal1;
    }

    /**
     * @param int $Decimal1
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setDecimal1($Decimal1)
    {
      $this->Decimal1 = $Decimal1;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmt2()
    {
      return $this->Amt2;
    }

    /**
     * @param int $Amt2
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setAmt2($Amt2)
    {
      $this->Amt2 = $Amt2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency2()
    {
      return $this->Currency2;
    }

    /**
     * @param string $Currency2
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setCurrency2($Currency2)
    {
      $this->Currency2 = $Currency2;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimal2()
    {
      return $this->Decimal2;
    }

    /**
     * @param int $Decimal2
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setDecimal2($Decimal2)
    {
      $this->Decimal2 = $Decimal2;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param int $Percent
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return string
     */
    public function getHighLow()
    {
      return $this->HighLow;
    }

    /**
     * @param string $HighLow
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setHighLow($HighLow)
    {
      $this->HighLow = $HighLow;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaxDeathWaiver()
    {
      return $this->PaxDeathWaiver;
    }

    /**
     * @param string $PaxDeathWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setPaxDeathWaiver($PaxDeathWaiver)
    {
      $this->PaxDeathWaiver = $PaxDeathWaiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaxIllWaiver()
    {
      return $this->PaxIllWaiver;
    }

    /**
     * @param string $PaxIllWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setPaxIllWaiver($PaxIllWaiver)
    {
      $this->PaxIllWaiver = $PaxIllWaiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamMemberDeathWaiver()
    {
      return $this->FamMemberDeathWaiver;
    }

    /**
     * @param string $FamMemberDeathWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setFamMemberDeathWaiver($FamMemberDeathWaiver)
    {
      $this->FamMemberDeathWaiver = $FamMemberDeathWaiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamMemberIllWaiver()
    {
      return $this->FamMemberIllWaiver;
    }

    /**
     * @param string $FamMemberIllWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setFamMemberIllWaiver($FamMemberIllWaiver)
    {
      $this->FamMemberIllWaiver = $FamMemberIllWaiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getSchedChangeWaiver()
    {
      return $this->SchedChangeWaiver;
    }

    /**
     * @param string $SchedChangeWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setSchedChangeWaiver($SchedChangeWaiver)
    {
      $this->SchedChangeWaiver = $SchedChangeWaiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getTktUpgradeWaiver()
    {
      return $this->TktUpgradeWaiver;
    }

    /**
     * @param string $TktUpgradeWaiver
     * @return \FilippoToso\Travelport\GDSQueue\CHGSFRType
     */
    public function setTktUpgradeWaiver($TktUpgradeWaiver)
    {
      $this->TktUpgradeWaiver = $TktUpgradeWaiver;
      return $this;
    }

}
