<?php

namespace FilippoToso\Travelport\Air;

class EMDCoupon
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $SvcDescription
     */
    protected $SvcDescription = null;

    /**
     * @var boolean $ConsumedAtIssuanceInd
     */
    protected $ConsumedAtIssuanceInd = null;

    /**
     * @var anonymous1061 $RFIC
     */
    protected $RFIC = null;

    /**
     * @var anonymous1062 $RFISC
     */
    protected $RFISC = null;

    /**
     * @var anonymous1063 $RFIDescription
     */
    protected $RFIDescription = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var anonymous1064 $PresentTo
     */
    protected $PresentTo = null;

    /**
     * @var anonymous1065 $PresentAt
     */
    protected $PresentAt = null;

    /**
     * @var boolean $NonRefundableInd
     */
    protected $NonRefundableInd = null;

    /**
     * @var typeCarrier $MarketingCarrier
     */
    protected $MarketingCarrier = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param int $Number
     * @param string $Status
     * @param string $SvcDescription
     * @param boolean $ConsumedAtIssuanceInd
     * @param anonymous1061 $RFIC
     * @param anonymous1062 $RFISC
     * @param anonymous1063 $RFIDescription
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeFlightNumber $FlightNumber
     * @param anonymous1064 $PresentTo
     * @param anonymous1065 $PresentAt
     * @param boolean $NonRefundableInd
     * @param typeCarrier $MarketingCarrier
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Number = null, $Status = null, $SvcDescription = null, $ConsumedAtIssuanceInd = null, $RFIC = null, $RFISC = null, $RFIDescription = null, $Origin = null, $Destination = null, $FlightNumber = null, $PresentTo = null, $PresentAt = null, $NonRefundableInd = null, $MarketingCarrier = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Number = $Number;
      $this->Status = $Status;
      $this->SvcDescription = $SvcDescription;
      $this->ConsumedAtIssuanceInd = $ConsumedAtIssuanceInd;
      $this->RFIC = $RFIC;
      $this->RFISC = $RFISC;
      $this->RFIDescription = $RFIDescription;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->FlightNumber = $FlightNumber;
      $this->PresentTo = $PresentTo;
      $this->PresentAt = $PresentAt;
      $this->NonRefundableInd = $NonRefundableInd;
      $this->MarketingCarrier = $MarketingCarrier;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getSvcDescription()
    {
      return $this->SvcDescription;
    }

    /**
     * @param string $SvcDescription
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setSvcDescription($SvcDescription)
    {
      $this->SvcDescription = $SvcDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConsumedAtIssuanceInd()
    {
      return $this->ConsumedAtIssuanceInd;
    }

    /**
     * @param boolean $ConsumedAtIssuanceInd
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setConsumedAtIssuanceInd($ConsumedAtIssuanceInd)
    {
      $this->ConsumedAtIssuanceInd = $ConsumedAtIssuanceInd;
      return $this;
    }

    /**
     * @return anonymous1061
     */
    public function getRFIC()
    {
      return $this->RFIC;
    }

    /**
     * @param anonymous1061 $RFIC
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setRFIC($RFIC)
    {
      $this->RFIC = $RFIC;
      return $this;
    }

    /**
     * @return anonymous1062
     */
    public function getRFISC()
    {
      return $this->RFISC;
    }

    /**
     * @param anonymous1062 $RFISC
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setRFISC($RFISC)
    {
      $this->RFISC = $RFISC;
      return $this;
    }

    /**
     * @return anonymous1063
     */
    public function getRFIDescription()
    {
      return $this->RFIDescription;
    }

    /**
     * @param anonymous1063 $RFIDescription
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setRFIDescription($RFIDescription)
    {
      $this->RFIDescription = $RFIDescription;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return anonymous1064
     */
    public function getPresentTo()
    {
      return $this->PresentTo;
    }

    /**
     * @param anonymous1064 $PresentTo
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setPresentTo($PresentTo)
    {
      $this->PresentTo = $PresentTo;
      return $this;
    }

    /**
     * @return anonymous1065
     */
    public function getPresentAt()
    {
      return $this->PresentAt;
    }

    /**
     * @param anonymous1065 $PresentAt
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setPresentAt($PresentAt)
    {
      $this->PresentAt = $PresentAt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonRefundableInd()
    {
      return $this->NonRefundableInd;
    }

    /**
     * @param boolean $NonRefundableInd
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setNonRefundableInd($NonRefundableInd)
    {
      $this->NonRefundableInd = $NonRefundableInd;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getMarketingCarrier()
    {
      return $this->MarketingCarrier;
    }

    /**
     * @param typeCarrier $MarketingCarrier
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setMarketingCarrier($MarketingCarrier)
    {
      $this->MarketingCarrier = $MarketingCarrier;
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
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\EMDCoupon
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
