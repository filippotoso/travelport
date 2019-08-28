<?php

namespace FilippoToso\Travelport\Util;

class BSPPayment
{

    /**
     * @var anonymous47 $BSPIdentifier
     */
    protected $BSPIdentifier = null;

    /**
     * @var anonymous48 $BSPPassword
     */
    protected $BSPPassword = null;

    /**
     * @param anonymous47 $BSPIdentifier
     * @param anonymous48 $BSPPassword
     */
    public function __construct($BSPIdentifier = null, $BSPPassword = null)
    {
      $this->BSPIdentifier = $BSPIdentifier;
      $this->BSPPassword = $BSPPassword;
    }

    /**
     * @return anonymous47
     */
    public function getBSPIdentifier()
    {
      return $this->BSPIdentifier;
    }

    /**
     * @param anonymous47 $BSPIdentifier
     * @return \FilippoToso\Travelport\Util\BSPPayment
     */
    public function setBSPIdentifier($BSPIdentifier)
    {
      $this->BSPIdentifier = $BSPIdentifier;
      return $this;
    }

    /**
     * @return anonymous48
     */
    public function getBSPPassword()
    {
      return $this->BSPPassword;
    }

    /**
     * @param anonymous48 $BSPPassword
     * @return \FilippoToso\Travelport\Util\BSPPayment
     */
    public function setBSPPassword($BSPPassword)
    {
      $this->BSPPassword = $BSPPassword;
      return $this;
    }

}
