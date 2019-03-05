<?php

namespace FilippoToso\Travelport\Rail;

class typePaymentInformation
{

    /**
     * @var typeVoucherInformation $Voucher
     */
    protected $Voucher = null;

    /**
     * @var string $BillingNumber
     */
    protected $BillingNumber = null;

    /**
     * @var string $BillingReferenceNumber
     */
    protected $BillingReferenceNumber = null;

    /**
     * @var anonymous582 $PrePayment
     */
    protected $PrePayment = null;

    /**
     * @param string $BillingNumber
     * @param string $BillingReferenceNumber
     * @param anonymous582 $PrePayment
     */
    public function __construct($BillingNumber = null, $BillingReferenceNumber = null, $PrePayment = null)
    {
      $this->BillingNumber = $BillingNumber;
      $this->BillingReferenceNumber = $BillingReferenceNumber;
      $this->PrePayment = $PrePayment;
    }

    /**
     * @return typeVoucherInformation
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param typeVoucherInformation $Voucher
     * @return \FilippoToso\Travelport\Rail\typePaymentInformation
     */
    public function setVoucher($Voucher)
    {
      $this->Voucher = $Voucher;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingNumber()
    {
      return $this->BillingNumber;
    }

    /**
     * @param string $BillingNumber
     * @return \FilippoToso\Travelport\Rail\typePaymentInformation
     */
    public function setBillingNumber($BillingNumber)
    {
      $this->BillingNumber = $BillingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingReferenceNumber()
    {
      return $this->BillingReferenceNumber;
    }

    /**
     * @param string $BillingReferenceNumber
     * @return \FilippoToso\Travelport\Rail\typePaymentInformation
     */
    public function setBillingReferenceNumber($BillingReferenceNumber)
    {
      $this->BillingReferenceNumber = $BillingReferenceNumber;
      return $this;
    }

    /**
     * @return anonymous582
     */
    public function getPrePayment()
    {
      return $this->PrePayment;
    }

    /**
     * @param anonymous582 $PrePayment
     * @return \FilippoToso\Travelport\Rail\typePaymentInformation
     */
    public function setPrePayment($PrePayment)
    {
      $this->PrePayment = $PrePayment;
      return $this;
    }

}
