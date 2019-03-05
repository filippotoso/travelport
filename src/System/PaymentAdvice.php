<?php

namespace FilippoToso\Travelport\System;

class PaymentAdvice
{

    /**
     * @var anonymous473 $Type
     */
    protected $Type = null;

    /**
     * @var anonymous474 $DocumentNumber
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
     * @var anonymous475 $OriginalFOP
     */
    protected $OriginalFOP = null;

    /**
     * @param anonymous473 $Type
     * @param anonymous474 $DocumentNumber
     * @param date $IssueDate
     * @param typeIATACode $IssueCity
     * @param anonymous475 $OriginalFOP
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
     * @return anonymous473
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous473 $Type
     * @return \FilippoToso\Travelport\System\PaymentAdvice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous474
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param anonymous474 $DocumentNumber
     * @return \FilippoToso\Travelport\System\PaymentAdvice
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
     * @return \FilippoToso\Travelport\System\PaymentAdvice
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
     * @return \FilippoToso\Travelport\System\PaymentAdvice
     */
    public function setIssueCity($IssueCity)
    {
      $this->IssueCity = $IssueCity;
      return $this;
    }

    /**
     * @return anonymous475
     */
    public function getOriginalFOP()
    {
      return $this->OriginalFOP;
    }

    /**
     * @param anonymous475 $OriginalFOP
     * @return \FilippoToso\Travelport\System\PaymentAdvice
     */
    public function setOriginalFOP($OriginalFOP)
    {
      $this->OriginalFOP = $OriginalFOP;
      return $this;
    }

}
