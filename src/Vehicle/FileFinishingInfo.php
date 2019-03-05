<?php

namespace FilippoToso\Travelport\Vehicle;

class FileFinishingInfo
{

    /**
     * @var ShopInformation $ShopInformation
     */
    protected $ShopInformation = null;

    /**
     * @var PolicyInformation $PolicyInformation
     */
    protected $PolicyInformation = null;

    /**
     * @var AccountInformation $AccountInformation
     */
    protected $AccountInformation = null;

    /**
     * @var AgencyInformation $AgencyInformation
     */
    protected $AgencyInformation = null;

    /**
     * @var TravelerInformation $TravelerInformation
     */
    protected $TravelerInformation = null;

    /**
     * @var CustomProfileInformation $CustomProfileInformation
     */
    protected $CustomProfileInformation = null;

    /**
     * @param ShopInformation $ShopInformation
     * @param PolicyInformation $PolicyInformation
     * @param AccountInformation $AccountInformation
     * @param AgencyInformation $AgencyInformation
     * @param TravelerInformation $TravelerInformation
     * @param CustomProfileInformation $CustomProfileInformation
     */
    public function __construct($ShopInformation = null, $PolicyInformation = null, $AccountInformation = null, $AgencyInformation = null, $TravelerInformation = null, $CustomProfileInformation = null)
    {
      $this->ShopInformation = $ShopInformation;
      $this->PolicyInformation = $PolicyInformation;
      $this->AccountInformation = $AccountInformation;
      $this->AgencyInformation = $AgencyInformation;
      $this->TravelerInformation = $TravelerInformation;
      $this->CustomProfileInformation = $CustomProfileInformation;
    }

    /**
     * @return ShopInformation
     */
    public function getShopInformation()
    {
      return $this->ShopInformation;
    }

    /**
     * @param ShopInformation $ShopInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setShopInformation($ShopInformation)
    {
      $this->ShopInformation = $ShopInformation;
      return $this;
    }

    /**
     * @return PolicyInformation
     */
    public function getPolicyInformation()
    {
      return $this->PolicyInformation;
    }

    /**
     * @param PolicyInformation $PolicyInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setPolicyInformation($PolicyInformation)
    {
      $this->PolicyInformation = $PolicyInformation;
      return $this;
    }

    /**
     * @return AccountInformation
     */
    public function getAccountInformation()
    {
      return $this->AccountInformation;
    }

    /**
     * @param AccountInformation $AccountInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setAccountInformation($AccountInformation)
    {
      $this->AccountInformation = $AccountInformation;
      return $this;
    }

    /**
     * @return AgencyInformation
     */
    public function getAgencyInformation()
    {
      return $this->AgencyInformation;
    }

    /**
     * @param AgencyInformation $AgencyInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setAgencyInformation($AgencyInformation)
    {
      $this->AgencyInformation = $AgencyInformation;
      return $this;
    }

    /**
     * @return TravelerInformation
     */
    public function getTravelerInformation()
    {
      return $this->TravelerInformation;
    }

    /**
     * @param TravelerInformation $TravelerInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setTravelerInformation($TravelerInformation)
    {
      $this->TravelerInformation = $TravelerInformation;
      return $this;
    }

    /**
     * @return CustomProfileInformation
     */
    public function getCustomProfileInformation()
    {
      return $this->CustomProfileInformation;
    }

    /**
     * @param CustomProfileInformation $CustomProfileInformation
     * @return \FilippoToso\Travelport\Vehicle\FileFinishingInfo
     */
    public function setCustomProfileInformation($CustomProfileInformation)
    {
      $this->CustomProfileInformation = $CustomProfileInformation;
      return $this;
    }

}
