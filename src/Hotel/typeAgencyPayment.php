<?php

namespace FilippoToso\Travelport\Hotel;

class typeAgencyPayment
{

    /**
     * @var anonymous61 $AgencyBillingIdentifier
     */
    protected $AgencyBillingIdentifier = null;

    /**
     * @var anonymous62 $AgencyBillingNumber
     */
    protected $AgencyBillingNumber = null;

    /**
     * @var anonymous63 $AgencyBillingPassword
     */
    protected $AgencyBillingPassword = null;

    /**
     * @param anonymous61 $AgencyBillingIdentifier
     * @param anonymous62 $AgencyBillingNumber
     * @param anonymous63 $AgencyBillingPassword
     */
    public function __construct($AgencyBillingIdentifier = null, $AgencyBillingNumber = null, $AgencyBillingPassword = null)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      $this->AgencyBillingPassword = $AgencyBillingPassword;
    }

    /**
     * @return anonymous61
     */
    public function getAgencyBillingIdentifier()
    {
      return $this->AgencyBillingIdentifier;
    }

    /**
     * @param anonymous61 $AgencyBillingIdentifier
     * @return \FilippoToso\Travelport\Hotel\typeAgencyPayment
     */
    public function setAgencyBillingIdentifier($AgencyBillingIdentifier)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      return $this;
    }

    /**
     * @return anonymous62
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param anonymous62 $AgencyBillingNumber
     * @return \FilippoToso\Travelport\Hotel\typeAgencyPayment
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return anonymous63
     */
    public function getAgencyBillingPassword()
    {
      return $this->AgencyBillingPassword;
    }

    /**
     * @param anonymous63 $AgencyBillingPassword
     * @return \FilippoToso\Travelport\Hotel\typeAgencyPayment
     */
    public function setAgencyBillingPassword($AgencyBillingPassword)
    {
      $this->AgencyBillingPassword = $AgencyBillingPassword;
      return $this;
    }

}
