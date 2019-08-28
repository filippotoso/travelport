<?php

namespace FilippoToso\Travelport\Air;

class AirMerchandisingDetailsReq extends BaseReq
{

    /**
     * @var MerchandisingDetails $MerchandisingDetails
     */
    protected $MerchandisingDetails = null;

    /**
     * @var OptionalServiceModifiers $OptionalServiceModifiers
     */
    protected $OptionalServiceModifiers = null;

    /**
     * @var MerchandisingAvailabilityDetails $MerchandisingAvailabilityDetails
     */
    protected $MerchandisingAvailabilityDetails = null;

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
     * @param MerchandisingDetails $MerchandisingDetails
     * @param OptionalServiceModifiers $OptionalServiceModifiers
     * @param MerchandisingAvailabilityDetails $MerchandisingAvailabilityDetails
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $MerchandisingDetails = null, $OptionalServiceModifiers = null, $MerchandisingAvailabilityDetails = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->MerchandisingDetails = $MerchandisingDetails;
      $this->OptionalServiceModifiers = $OptionalServiceModifiers;
      $this->MerchandisingAvailabilityDetails = $MerchandisingAvailabilityDetails;
    }

    /**
     * @return MerchandisingDetails
     */
    public function getMerchandisingDetails()
    {
      return $this->MerchandisingDetails;
    }

    /**
     * @param MerchandisingDetails $MerchandisingDetails
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsReq
     */
    public function setMerchandisingDetails($MerchandisingDetails)
    {
      $this->MerchandisingDetails = $MerchandisingDetails;
      return $this;
    }

    /**
     * @return OptionalServiceModifiers
     */
    public function getOptionalServiceModifiers()
    {
      return $this->OptionalServiceModifiers;
    }

    /**
     * @param OptionalServiceModifiers $OptionalServiceModifiers
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsReq
     */
    public function setOptionalServiceModifiers($OptionalServiceModifiers)
    {
      $this->OptionalServiceModifiers = $OptionalServiceModifiers;
      return $this;
    }

    /**
     * @return MerchandisingAvailabilityDetails
     */
    public function getMerchandisingAvailabilityDetails()
    {
      return $this->MerchandisingAvailabilityDetails;
    }

    /**
     * @param MerchandisingAvailabilityDetails $MerchandisingAvailabilityDetails
     * @return \FilippoToso\Travelport\Air\AirMerchandisingDetailsReq
     */
    public function setMerchandisingAvailabilityDetails($MerchandisingAvailabilityDetails)
    {
      $this->MerchandisingAvailabilityDetails = $MerchandisingAvailabilityDetails;
      return $this;
    }

}
