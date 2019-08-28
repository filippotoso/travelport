<?php

namespace FilippoToso\Travelport\Util;

class FaxDetails
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var TermConditions $TermConditions
     */
    protected $TermConditions = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var boolean $IncludeCoverSheet
     */
    protected $IncludeCoverSheet = null;

    /**
     * @var string $To
     */
    protected $To = null;

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $DeptBillingCode
     */
    protected $DeptBillingCode = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param TermConditions $TermConditions
     * @param Remark $Remark
     * @param boolean $IncludeCoverSheet
     * @param string $To
     * @param string $From
     * @param string $DeptBillingCode
     * @param string $InvoiceNumber
     */
    public function __construct($PhoneNumber = null, $TermConditions = null, $Remark = null, $IncludeCoverSheet = null, $To = null, $From = null, $DeptBillingCode = null, $InvoiceNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->TermConditions = $TermConditions;
      $this->Remark = $Remark;
      $this->IncludeCoverSheet = $IncludeCoverSheet;
      $this->To = $To;
      $this->From = $From;
      $this->DeptBillingCode = $DeptBillingCode;
      $this->InvoiceNumber = $InvoiceNumber;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return TermConditions
     */
    public function getTermConditions()
    {
      return $this->TermConditions;
    }

    /**
     * @param TermConditions $TermConditions
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setTermConditions($TermConditions)
    {
      $this->TermConditions = $TermConditions;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCoverSheet()
    {
      return $this->IncludeCoverSheet;
    }

    /**
     * @param boolean $IncludeCoverSheet
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setIncludeCoverSheet($IncludeCoverSheet)
    {
      $this->IncludeCoverSheet = $IncludeCoverSheet;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeptBillingCode()
    {
      return $this->DeptBillingCode;
    }

    /**
     * @param string $DeptBillingCode
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setDeptBillingCode($DeptBillingCode)
    {
      $this->DeptBillingCode = $DeptBillingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \FilippoToso\Travelport\Util\FaxDetails
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

}
