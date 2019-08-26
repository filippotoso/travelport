<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PaymentInformation extends typePaymentInformation
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $BillingNumber
     * @param string $BillingReferenceNumber
     * @param anonymous1122 $PrePayment
     * @param typeRef $Key
     */
    public function __construct($BillingNumber, $BillingReferenceNumber, $PrePayment, $Key)
    {
      parent::__construct($BillingNumber, $BillingReferenceNumber, $PrePayment);
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UniversalRecord\PaymentInformation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
