<?php

namespace FilippoToso\Travelport\Hotel;

class AcceptedPayment
{

    /**
     * @var typeCardMerchantType $PaymentCode
     */
    protected $PaymentCode = null;

    /**
     * @param typeCardMerchantType $PaymentCode
     */
    public function __construct($PaymentCode = null)
    {
      $this->PaymentCode = $PaymentCode;
    }

    /**
     * @return typeCardMerchantType
     */
    public function getPaymentCode()
    {
      return $this->PaymentCode;
    }

    /**
     * @param typeCardMerchantType $PaymentCode
     * @return \FilippoToso\Travelport\Hotel\AcceptedPayment
     */
    public function setPaymentCode($PaymentCode)
    {
      $this->PaymentCode = $PaymentCode;
      return $this;
    }

}
