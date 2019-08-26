<?php

namespace FilippoToso\Travelport\Vehicle;

class CollectionAddress extends typeStructuredAddress
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param PhoneNumber $PhoneNumber
     */
    public function __construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride, $PhoneNumber)
    {
      parent::__construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride);
      $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\Vehicle\CollectionAddress
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
