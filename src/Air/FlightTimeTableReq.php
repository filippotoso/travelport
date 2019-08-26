<?php

namespace FilippoToso\Travelport\Air;

class FlightTimeTableReq extends BaseSearchReq
{

    /**
     * @var FlightTimeTableCriteria $FlightTimeTableCriteria
     */
    protected $FlightTimeTableCriteria = null;

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
     * @param NextResultReference $NextResultReference
     * @param FlightTimeTableCriteria $FlightTimeTableCriteria
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $FlightTimeTableCriteria)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->FlightTimeTableCriteria = $FlightTimeTableCriteria;
    }

    /**
     * @return FlightTimeTableCriteria
     */
    public function getFlightTimeTableCriteria()
    {
      return $this->FlightTimeTableCriteria;
    }

    /**
     * @param FlightTimeTableCriteria $FlightTimeTableCriteria
     * @return \FilippoToso\Travelport\Air\FlightTimeTableReq
     */
    public function setFlightTimeTableCriteria($FlightTimeTableCriteria)
    {
      $this->FlightTimeTableCriteria = $FlightTimeTableCriteria;
      return $this;
    }

}
