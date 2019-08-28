<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PaymentAdvice
{

    /**
     * @var anonymous488 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous489 $DocumentNumber
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
     * @var anonymous490 $OriginalFOP
     */
    protected $OriginalFOP = null;

    /**
     * @param anonymous488 $Type
     * @param anonymous489 $DocumentNumber
     * @param date $IssueDate
     * @param typeIATACode $IssueCity
     * @param anonymous490 $OriginalFOP
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
     * @return anonymous488
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous488 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentAdvice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous489
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param anonymous489 $DocumentNumber
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentAdvice
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
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentAdvice
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
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentAdvice
     */
    public function setIssueCity($IssueCity)
    {
      $this->IssueCity = $IssueCity;
      return $this;
    }

    /**
     * @return anonymous490
     */
    public function getOriginalFOP()
    {
      return $this->OriginalFOP;
    }

    /**
     * @param anonymous490 $OriginalFOP
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentAdvice
     */
    public function setOriginalFOP($OriginalFOP)
    {
      $this->OriginalFOP = $OriginalFOP;
      return $this;
    }

}
