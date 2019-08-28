<?php

namespace FilippoToso\Travelport\Hotel;

class PaymentAdvice
{

    /**
     * @var anonymous485 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous486 $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var date $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var typeIATACode $IssueCity
     */
    protected $IssueCity = null;

    /**
     * @var anonymous487 $OriginalFOP
     */
    protected $OriginalFOP = null;

    /**
     * @param anonymous485 $Type
     * @param anonymous486 $DocumentNumber
     * @param date $IssueDate
     * @param typeIATACode $IssueCity
     * @param anonymous487 $OriginalFOP
     */
    public function __construct($Type = null, $DocumentNumber = null, $IssueDate = null, $IssueCity = null, $OriginalFOP = null)
    {
      $this->Type = $Type;
      $this->DocumentNumber = $DocumentNumber;
      $this->IssueDate = $IssueDate;
      $this->IssueCity = $IssueCity;
      $this->OriginalFOP = $OriginalFOP;
    }

    /**
     * @return anonymous485
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous485 $Type
     * @return \FilippoToso\Travelport\Hotel\PaymentAdvice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous486
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param anonymous486 $DocumentNumber
     * @return \FilippoToso\Travelport\Hotel\PaymentAdvice
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getIssueDate()
    {
      return $this->IssueDate;
    }

    /**
     * @param date $IssueDate
     * @return \FilippoToso\Travelport\Hotel\PaymentAdvice
     */
    public function setIssueDate($IssueDate)
    {
      $this->IssueDate = $IssueDate;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getIssueCity()
    {
      return $this->IssueCity;
    }

    /**
     * @param typeIATACode $IssueCity
     * @return \FilippoToso\Travelport\Hotel\PaymentAdvice
     */
    public function setIssueCity($IssueCity)
    {
      $this->IssueCity = $IssueCity;
      return $this;
    }

    /**
     * @return anonymous487
     */
    public function getOriginalFOP()
    {
      return $this->OriginalFOP;
    }

    /**
     * @param anonymous487 $OriginalFOP
     * @return \FilippoToso\Travelport\Hotel\PaymentAdvice
     */
    public function setOriginalFOP($OriginalFOP)
    {
      $this->OriginalFOP = $OriginalFOP;
      return $this;
    }

}
