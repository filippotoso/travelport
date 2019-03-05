<?php

namespace FilippoToso\Travelport\Air;

class FlightInformationReq extends BaseReq
{

    /**
     * @var FlightInfoCriteria $FlightInfoCriteria
     */
    protected $FlightInfoCriteria = null;

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
     * @param FlightInfoCriteria $FlightInfoCriteria
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FlightInfoCriteria = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FlightInfoCriteria = $FlightInfoCriteria;
    }

    /**
     * @return FlightInfoCriteria
     */
    public function getFlightInfoCriteria()
    {
      return $this->FlightInfoCriteria;
    }

    /**
     * @param FlightInfoCriteria $FlightInfoCriteria
     * @return \FilippoToso\Travelport\Air\FlightInformationReq
     */
    public function setFlightInfoCriteria($FlightInfoCriteria)
    {
      $this->FlightInfoCriteria = $FlightInfoCriteria;
      return $this;
    }

}
