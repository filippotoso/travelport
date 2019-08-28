<?php

namespace FilippoToso\Travelport\Util;

class McoSearchReq extends BaseReq
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var Carrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeTimeRange $McoCreateDate
     */
    protected $McoCreateDate = null;

    /**
     * @var McoSearchModifiers $McoSearchModifiers
     */
    protected $McoSearchModifiers = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param Name $Name
     * @param Carrier $Carrier
     * @param Airport $Airport
     * @param StringLength1to13 $TicketNumber
     * @param typeTimeRange $McoCreateDate
     * @param McoSearchModifiers $McoSearchModifiers
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Name = null, $Carrier = null, $Airport = null, $TicketNumber = null, $McoCreateDate = null, $McoSearchModifiers = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Name = $Name;
      $this->Carrier = $Carrier;
      $this->Airport = $Airport;
      $this->TicketNumber = $TicketNumber;
      $this->McoCreateDate = $McoCreateDate;
      $this->McoSearchModifiers = $McoSearchModifiers;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier $Carrier
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return typeTimeRange
     */
    public function getMcoCreateDate()
    {
      return $this->McoCreateDate;
    }

    /**
     * @param typeTimeRange $McoCreateDate
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setMcoCreateDate($McoCreateDate)
    {
      $this->McoCreateDate = $McoCreateDate;
      return $this;
    }

    /**
     * @return McoSearchModifiers
     */
    public function getMcoSearchModifiers()
    {
      return $this->McoSearchModifiers;
    }

    /**
     * @param McoSearchModifiers $McoSearchModifiers
     * @return \FilippoToso\Travelport\Util\McoSearchReq
     */
    public function setMcoSearchModifiers($McoSearchModifiers)
    {
      $this->McoSearchModifiers = $McoSearchModifiers;
      return $this;
    }

}
