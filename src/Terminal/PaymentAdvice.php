<?php

namespace FilippoToso\Travelport\Terminal;

class PaymentAdvice
{

    /**
     * @var anonymous472 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous473 $DocumentNumber
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
     * @var anonymous474 $OriginalFOP
     */
    protected $OriginalFOP = null;

    /**
     * @param anonymous472 $Type
     * @param anonymous473 $DocumentNumber
     * @param date $IssueDate
     * @param typeIATACode $IssueCity
     * @param anonymous474 $OriginalFOP
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
     * @return anonymous472
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous472 $Type
     * @return \FilippoToso\Travelport\Terminal\PaymentAdvice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous473
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param anonymous473 $DocumentNumber
     * @return \FilippoToso\Travelport\Terminal\PaymentAdvice
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
     * @return \FilippoToso\Travelport\Terminal\PaymentAdvice
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
     * @return \FilippoToso\Travelport\Terminal\PaymentAdvice
     */
    public function setIssueCity($IssueCity)
    {
      $this->IssueCity = $IssueCity;
      return $this;
    }

    /**
     * @return anonymous474
     */
    public function getOriginalFOP()
    {
      return $this->OriginalFOP;
    }

    /**
     * @param anonymous474 $OriginalFOP
     * @return \FilippoToso\Travelport\Terminal\PaymentAdvice
     */
    public function setOriginalFOP($OriginalFOP)
    {
      $this->OriginalFOP = $OriginalFOP;
      return $this;
    }

}
