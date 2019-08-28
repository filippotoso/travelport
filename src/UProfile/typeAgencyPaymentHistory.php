<?php

namespace FilippoToso\Travelport\UProfile;

class typeAgencyPaymentHistory
{

    /**
     * @var anonymous920 $AgencyBillingIdentifier
     */
    protected $AgencyBillingIdentifier = null;

    /**
     * @var anonymous921 $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

    /**
     * @var anonymous922 $AgencyBillingPassword
     */
    protected $AgencyBillingPassword = null;

    /**
     * @param anonymous920 $AgencyBillingIdentifier
     * @param anonymous921 $AgencyBillingNumber
     * @param anonymous922 $AgencyBillingPassword
     */
    public function __construct($AgencyBillingIdentifier = null, $AgencyBillingNumber = null, $AgencyBillingPassword = null)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      $this->AgencyBillingPassword = $AgencyBillingPassword;
    }

    /**
     * @return anonymous920
     */
    public function getAgencyBillingIdentifier()
    {
      return $this->AgencyBillingIdentifier;
    }

    /**
     * @param anonymous920 $AgencyBillingIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPaymentHistory
     */
    public function setAgencyBillingIdentifier($AgencyBillingIdentifier)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      return $this;
    }

    /**
     * @return anonymous921
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param anonymous921 $AgencyBillingNumber
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPaymentHistory
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return anonymous922
     */
    public function getAgencyBillingPassword()
    {
      return $this->AgencyBillingPassword;
    }

    /**
     * @param anonymous922 $AgencyBillingPassword
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPaymentHistory
     */
    public function setAgencyBillingPassword($AgencyBillingPassword)
    {
      $this->AgencyBillingPassword = $AgencyBillingPassword;
      return $this;
    }

}
