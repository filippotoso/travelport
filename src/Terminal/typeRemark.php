<?php

namespace FilippoToso\Travelport\Terminal;

class typeRemark
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param string $_
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($_ = null, $ProviderReservationInfoRef = null, $ProviderCode = null)
    {
      $this->_ = $_;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Terminal\typeRemark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Terminal\typeRemark
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Terminal\typeRemark
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
