<?php

namespace FilippoToso\Travelport\GDSQueue;

class EMDSummary
{

    /**
     * @var EMDCoupon $EMDCoupon
     */
    protected $EMDCoupon = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeEMDNumber $Number
     */
    protected $Number = null;

    /**
     * @var boolean $PrimaryDocumentIndicator
     */
    protected $PrimaryDocumentIndicator = null;

    /**
     * @var typeEMDNumber $InConjunctionWith
     */
    protected $InConjunctionWith = null;

    /**
     * @var typeTicketNumber $AssociatedTicketNumber
     */
    protected $AssociatedTicketNumber = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var \DateTime $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param EMDCoupon $EMDCoupon
     * @param typeRef $Key
     * @param typeEMDNumber $Number
     * @param boolean $PrimaryDocumentIndicator
     * @param typeEMDNumber $InConjunctionWith
     * @param typeTicketNumber $AssociatedTicketNumber
     * @param typeCarrier $PlatingCarrier
     * @param \DateTime $IssueDate
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($EMDCoupon = null, $Key = null, $Number = null, $PrimaryDocumentIndicator = null, $InConjunctionWith = null, $AssociatedTicketNumber = null, $PlatingCarrier = null, \DateTime $IssueDate = null, $ElStat = null, $KeyOverride = null)
    {
      $this->EMDCoupon = $EMDCoupon;
      $this->Key = $Key;
      $this->Number = $Number;
      $this->PrimaryDocumentIndicator = $PrimaryDocumentIndicator;
      $this->InConjunctionWith = $InConjunctionWith;
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->IssueDate = $IssueDate ? $IssueDate->format(\DateTime::ATOM) : null;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return EMDCoupon
     */
    public function getEMDCoupon()
    {
      return $this->EMDCoupon;
    }

    /**
     * @param EMDCoupon $EMDCoupon
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setEMDCoupon($EMDCoupon)
    {
      $this->EMDCoupon = $EMDCoupon;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeEMDNumber $Number
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimaryDocumentIndicator()
    {
      return $this->PrimaryDocumentIndicator;
    }

    /**
     * @param boolean $PrimaryDocumentIndicator
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setPrimaryDocumentIndicator($PrimaryDocumentIndicator)
    {
      $this->PrimaryDocumentIndicator = $PrimaryDocumentIndicator;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getInConjunctionWith()
    {
      return $this->InConjunctionWith;
    }

    /**
     * @param typeEMDNumber $InConjunctionWith
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setInConjunctionWith($InConjunctionWith)
    {
      $this->InConjunctionWith = $InConjunctionWith;
      return $this;
    }

    /**
     * @return typeTicketNumber
     */
    public function getAssociatedTicketNumber()
    {
      return $this->AssociatedTicketNumber;
    }

    /**
     * @param typeTicketNumber $AssociatedTicketNumber
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setAssociatedTicketNumber($AssociatedTicketNumber)
    {
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\GDSQueue\EMDSummary
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
