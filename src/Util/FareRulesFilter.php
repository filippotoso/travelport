<?php

namespace FilippoToso\Travelport\Util;

class FareRulesFilter
{

    /**
     * @var Refundability $Refundability
     */
    protected $Refundability = null;

    /**
     * @var \DateTime $LatestTicketingTime
     */
    protected $LatestTicketingTime = null;

    /**
     * @var CHGType $CHG
     */
    protected $CHG = null;

    /**
     * @var MINType $MIN
     */
    protected $MIN = null;

    /**
     * @var MAXType $MAX
     */
    protected $MAX = null;

    /**
     * @var ADVType $ADV
     */
    protected $ADV = null;

    /**
     * @var OTHType $OTH
     */
    protected $OTH = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Refundability
     */
    public function getRefundability()
    {
      return $this->Refundability;
    }

    /**
     * @param Refundability $Refundability
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setRefundability($Refundability)
    {
      $this->Refundability = $Refundability;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatestTicketingTime()
    {
      if ($this->LatestTicketingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LatestTicketingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LatestTicketingTime
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setLatestTicketingTime(\DateTime $LatestTicketingTime = null)
    {
      if ($LatestTicketingTime == null) {
       $this->LatestTicketingTime = null;
      } else {
        $this->LatestTicketingTime = $LatestTicketingTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return CHGType
     */
    public function getCHG()
    {
      return $this->CHG;
    }

    /**
     * @param CHGType $CHG
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setCHG($CHG)
    {
      $this->CHG = $CHG;
      return $this;
    }

    /**
     * @return MINType
     */
    public function getMIN()
    {
      return $this->MIN;
    }

    /**
     * @param MINType $MIN
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setMIN($MIN)
    {
      $this->MIN = $MIN;
      return $this;
    }

    /**
     * @return MAXType
     */
    public function getMAX()
    {
      return $this->MAX;
    }

    /**
     * @param MAXType $MAX
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setMAX($MAX)
    {
      $this->MAX = $MAX;
      return $this;
    }

    /**
     * @return ADVType
     */
    public function getADV()
    {
      return $this->ADV;
    }

    /**
     * @param ADVType $ADV
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setADV($ADV)
    {
      $this->ADV = $ADV;
      return $this;
    }

    /**
     * @return OTHType
     */
    public function getOTH()
    {
      return $this->OTH;
    }

    /**
     * @param OTHType $OTH
     * @return \FilippoToso\Travelport\Util\FareRulesFilter
     */
    public function setOTH($OTH)
    {
      $this->OTH = $OTH;
      return $this;
    }

}
