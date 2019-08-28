<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ARCPayment
{

    /**
     * @var anonymous53 $ARCIdentifier
     */
    protected $ARCIdentifier = null;

    /**
     * @var anonymous54 $ARCPassword
     */
    protected $ARCPassword = null;

    /**
     * @param anonymous53 $ARCIdentifier
     * @param anonymous54 $ARCPassword
     */
    public function __construct($ARCIdentifier = null, $ARCPassword = null)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      $this->ARCPassword = $ARCPassword;
    }

    /**
     * @return anonymous53
     */
    public function getARCIdentifier()
    {
      return $this->ARCIdentifier;
    }

    /**
     * @param anonymous53 $ARCIdentifier
     * @return \FilippoToso\Travelport\UniversalRecord\ARCPayment
     */
    public function setARCIdentifier($ARCIdentifier)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      return $this;
    }

    /**
     * @return anonymous54
     */
    public function getARCPassword()
    {
      return $this->ARCPassword;
    }

    /**
     * @param anonymous54 $ARCPassword
     * @return \FilippoToso\Travelport\UniversalRecord\ARCPayment
     */
    public function setARCPassword($ARCPassword)
    {
      $this->ARCPassword = $ARCPassword;
      return $this;
    }

}
