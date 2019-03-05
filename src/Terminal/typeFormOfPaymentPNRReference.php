<?php

namespace FilippoToso\Travelport\Terminal;

class typeFormOfPaymentPNRReference
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $ProviderReservationLevel
     */
    protected $ProviderReservationLevel = null;

    /**
     * @param typeRef $Key
     * @param boolean $ProviderReservationLevel
     */
    public function __construct($Key = null, $ProviderReservationLevel = null)
    {
      $this->Key = $Key;
      $this->ProviderReservationLevel = $ProviderReservationLevel;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Terminal\typeFormOfPaymentPNRReference
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProviderReservationLevel()
    {
      return $this->ProviderReservationLevel;
    }

    /**
     * @param boolean $ProviderReservationLevel
     * @return \FilippoToso\Travelport\Terminal\typeFormOfPaymentPNRReference
     */
    public function setProviderReservationLevel($ProviderReservationLevel)
    {
      $this->ProviderReservationLevel = $ProviderReservationLevel;
      return $this;
    }

}
