<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CruiseBookingTravelerRef
{

    /**
     * @var LoyaltyCardRef $LoyaltyCardRef
     */
    protected $LoyaltyCardRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $WaiverIndicator
     */
    protected $WaiverIndicator = null;

    /**
     * @param LoyaltyCardRef $LoyaltyCardRef
     * @param typeRef $Key
     * @param boolean $WaiverIndicator
     */
    public function __construct($LoyaltyCardRef = null, $Key = null, $WaiverIndicator = null)
    {
      $this->LoyaltyCardRef = $LoyaltyCardRef;
      $this->Key = $Key;
      $this->WaiverIndicator = $WaiverIndicator;
    }

    /**
     * @return LoyaltyCardRef
     */
    public function getLoyaltyCardRef()
    {
      return $this->LoyaltyCardRef;
    }

    /**
     * @param LoyaltyCardRef $LoyaltyCardRef
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseBookingTravelerRef
     */
    public function setLoyaltyCardRef($LoyaltyCardRef)
    {
      $this->LoyaltyCardRef = $LoyaltyCardRef;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseBookingTravelerRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWaiverIndicator()
    {
      return $this->WaiverIndicator;
    }

    /**
     * @param boolean $WaiverIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseBookingTravelerRef
     */
    public function setWaiverIndicator($WaiverIndicator)
    {
      $this->WaiverIndicator = $WaiverIndicator;
      return $this;
    }

}
