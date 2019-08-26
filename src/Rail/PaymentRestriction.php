<?php

namespace FilippoToso\Travelport\Rail;

class PaymentRestriction
{

    /**
     * @var CardRestriction $CardRestriction
     */
    protected $CardRestriction = null;

    /**
     * @var AddressRestriction $AddressRestriction
     */
    protected $AddressRestriction = null;

    /**
     * @param CardRestriction $CardRestriction
     * @param AddressRestriction $AddressRestriction
     */
    public function __construct($CardRestriction, $AddressRestriction)
    {
      $this->CardRestriction = $CardRestriction;
      $this->AddressRestriction = $AddressRestriction;
    }

    /**
     * @return CardRestriction
     */
    public function getCardRestriction()
    {
      return $this->CardRestriction;
    }

    /**
     * @param CardRestriction $CardRestriction
     * @return \FilippoToso\Travelport\Rail\PaymentRestriction
     */
    public function setCardRestriction($CardRestriction)
    {
      $this->CardRestriction = $CardRestriction;
      return $this;
    }

    /**
     * @return AddressRestriction
     */
    public function getAddressRestriction()
    {
      return $this->AddressRestriction;
    }

    /**
     * @param AddressRestriction $AddressRestriction
     * @return \FilippoToso\Travelport\Rail\PaymentRestriction
     */
    public function setAddressRestriction($AddressRestriction)
    {
      $this->AddressRestriction = $AddressRestriction;
      return $this;
    }

}
