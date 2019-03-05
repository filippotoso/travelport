<?php

namespace FilippoToso\Travelport\Air;

class DetailRetrieve
{

    /**
     * @var typeProviderReservationDetail $ProviderReservationDetail
     */
    protected $ProviderReservationDetail = null;

    /**
     * @var typeEMDNumber $EMDNumber
     */
    protected $EMDNumber = null;

    /**
     * @param typeProviderReservationDetail $ProviderReservationDetail
     * @param typeEMDNumber $EMDNumber
     */
    public function __construct($ProviderReservationDetail = null, $EMDNumber = null)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      $this->EMDNumber = $EMDNumber;
    }

    /**
     * @return typeProviderReservationDetail
     */
    public function getProviderReservationDetail()
    {
      return $this->ProviderReservationDetail;
    }

    /**
     * @param typeProviderReservationDetail $ProviderReservationDetail
     * @return \FilippoToso\Travelport\Air\DetailRetrieve
     */
    public function setProviderReservationDetail($ProviderReservationDetail)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getEMDNumber()
    {
      return $this->EMDNumber;
    }

    /**
     * @param typeEMDNumber $EMDNumber
     * @return \FilippoToso\Travelport\Air\DetailRetrieve
     */
    public function setEMDNumber($EMDNumber)
    {
      $this->EMDNumber = $EMDNumber;
      return $this;
    }

}
