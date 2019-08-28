<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BSPPayment
{

    /**
     * @var anonymous50 $BSPIdentifier
     */
    protected $BSPIdentifier = null;

    /**
     * @var anonymous51 $BSPPassword
     */
    protected $BSPPassword = null;

    /**
     * @param anonymous50 $BSPIdentifier
     * @param anonymous51 $BSPPassword
     */
    public function __construct($BSPIdentifier = null, $BSPPassword = null)
    {
      $this->BSPIdentifier = $BSPIdentifier;
      $this->BSPPassword = $BSPPassword;
    }

    /**
     * @return anonymous50
     */
    public function getBSPIdentifier()
    {
      return $this->BSPIdentifier;
    }

    /**
     * @param anonymous50 $BSPIdentifier
     * @return \FilippoToso\Travelport\UniversalRecord\BSPPayment
     */
    public function setBSPIdentifier($BSPIdentifier)
    {
      $this->BSPIdentifier = $BSPIdentifier;
      return $this;
    }

    /**
     * @return anonymous51
     */
    public function getBSPPassword()
    {
      return $this->BSPPassword;
    }

    /**
     * @param anonymous51 $BSPPassword
     * @return \FilippoToso\Travelport\UniversalRecord\BSPPayment
     */
    public function setBSPPassword($BSPPassword)
    {
      $this->BSPPassword = $BSPPassword;
      return $this;
    }

}
