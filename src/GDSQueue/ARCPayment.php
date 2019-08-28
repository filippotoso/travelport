<?php

namespace FilippoToso\Travelport\GDSQueue;

class ARCPayment
{

    /**
     * @var anonymous50 $ARCIdentifier
     */
    protected $ARCIdentifier = null;

    /**
     * @var anonymous51 $ARCPassword
     */
    protected $ARCPassword = null;

    /**
     * @param anonymous50 $ARCIdentifier
     * @param anonymous51 $ARCPassword
     */
    public function __construct($ARCIdentifier = null, $ARCPassword = null)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      $this->ARCPassword = $ARCPassword;
    }

    /**
     * @return anonymous50
     */
    public function getARCIdentifier()
    {
      return $this->ARCIdentifier;
    }

    /**
     * @param anonymous50 $ARCIdentifier
     * @return \FilippoToso\Travelport\GDSQueue\ARCPayment
     */
    public function setARCIdentifier($ARCIdentifier)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      return $this;
    }

    /**
     * @return anonymous51
     */
    public function getARCPassword()
    {
      return $this->ARCPassword;
    }

    /**
     * @param anonymous51 $ARCPassword
     * @return \FilippoToso\Travelport\GDSQueue\ARCPayment
     */
    public function setARCPassword($ARCPassword)
    {
      $this->ARCPassword = $ARCPassword;
      return $this;
    }

}
