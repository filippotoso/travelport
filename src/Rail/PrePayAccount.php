<?php

namespace FilippoToso\Travelport\Rail;

class PrePayAccount
{

    /**
     * @var CreditSummary $CreditSummary
     */
    protected $CreditSummary = null;

    /**
     * @var PrePayPriceInfo $PrePayPriceInfo
     */
    protected $PrePayPriceInfo = null;

    /**
     * @var string $ProgramTitle
     */
    protected $ProgramTitle = null;

    /**
     * @var string $CertificateNumber
     */
    protected $CertificateNumber = null;

    /**
     * @var string $ProgramName
     */
    protected $ProgramName = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var date $ExpireDate
     */
    protected $ExpireDate = null;

    /**
     * @param CreditSummary $CreditSummary
     * @param PrePayPriceInfo $PrePayPriceInfo
     * @param string $ProgramTitle
     * @param string $CertificateNumber
     * @param string $ProgramName
     * @param date $EffectiveDate
     * @param date $ExpireDate
     */
    public function __construct($CreditSummary = null, $PrePayPriceInfo = null, $ProgramTitle = null, $CertificateNumber = null, $ProgramName = null, $EffectiveDate = null, $ExpireDate = null)
    {
      $this->CreditSummary = $CreditSummary;
      $this->PrePayPriceInfo = $PrePayPriceInfo;
      $this->ProgramTitle = $ProgramTitle;
      $this->CertificateNumber = $CertificateNumber;
      $this->ProgramName = $ProgramName;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpireDate = $ExpireDate;
    }

    /**
     * @return CreditSummary
     */
    public function getCreditSummary()
    {
      return $this->CreditSummary;
    }

    /**
     * @param CreditSummary $CreditSummary
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setCreditSummary($CreditSummary)
    {
      $this->CreditSummary = $CreditSummary;
      return $this;
    }

    /**
     * @return PrePayPriceInfo
     */
    public function getPrePayPriceInfo()
    {
      return $this->PrePayPriceInfo;
    }

    /**
     * @param PrePayPriceInfo $PrePayPriceInfo
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setPrePayPriceInfo($PrePayPriceInfo)
    {
      $this->PrePayPriceInfo = $PrePayPriceInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramTitle()
    {
      return $this->ProgramTitle;
    }

    /**
     * @param string $ProgramTitle
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setProgramTitle($ProgramTitle)
    {
      $this->ProgramTitle = $ProgramTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getCertificateNumber()
    {
      return $this->CertificateNumber;
    }

    /**
     * @param string $CertificateNumber
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setCertificateNumber($CertificateNumber)
    {
      $this->CertificateNumber = $CertificateNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
      return $this->ProgramName;
    }

    /**
     * @param string $ProgramName
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setProgramName($ProgramName)
    {
      $this->ProgramName = $ProgramName;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param date $ExpireDate
     * @return \FilippoToso\Travelport\Rail\PrePayAccount
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

}
