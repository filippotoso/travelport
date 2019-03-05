<?php

namespace FilippoToso\Travelport\UProfile;

class typeAgencyPayment
{

    /**
     * @var anonymous54 $AgencyBillingIdentifier
     */
    protected $AgencyBillingIdentifier = null;

    /**
     * @var anonymous55 $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

    /**
     * @var anonymous56 $AgencyBillingPassword
     */
    protected $AgencyBillingPassword = null;

    /**
     * @param anonymous54 $AgencyBillingIdentifier
     * @param anonymous55 $AgencyBillingNumber
     * @param anonymous56 $AgencyBillingPassword
     */
    public function __construct($AgencyBillingIdentifier = null, $AgencyBillingNumber = null, $AgencyBillingPassword = null)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      $this->AgencyBillingPassword = $AgencyBillingPassword;
    }

    /**
     * @return anonymous54
     */
    public function getAgencyBillingIdentifier()
    {
      return $this->AgencyBillingIdentifier;
    }

    /**
     * @param anonymous54 $AgencyBillingIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPayment
     */
    public function setAgencyBillingIdentifier($AgencyBillingIdentifier)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      return $this;
    }

    /**
     * @return anonymous55
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param anonymous55 $AgencyBillingNumber
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPayment
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return anonymous56
     */
    public function getAgencyBillingPassword()
    {
      return $this->AgencyBillingPassword;
    }

    /**
     * @param anonymous56 $AgencyBillingPassword
     * @return \FilippoToso\Travelport\UProfile\typeAgencyPayment
     */
    public function setAgencyBillingPassword($AgencyBillingPassword)
    {
      $this->AgencyBillingPassword = $AgencyBillingPassword;
      return $this;
    }

}
