<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellOfferSearchCriteria
{

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @param AccountCode $AccountCode
     * @param typeClassOfService $ClassOfService
     */
    public function __construct($AccountCode = null, $ClassOfService = null)
    {
      $this->AccountCode = $AccountCode;
      $this->ClassOfService = $ClassOfService;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Util\AirUpsellOfferSearchCriteria
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\Util\AirUpsellOfferSearchCriteria
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

}
