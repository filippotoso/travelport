<?php

namespace FilippoToso\Travelport\Util;

class FindEmployeesOnFlightReq extends BaseReq
{

    /**
     * @var FlightCriteria $FlightCriteria
     */
    protected $FlightCriteria = null;

    /**
     * @var typeAccountID $AccountID
     */
    protected $AccountID = null;

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
     * @param FlightCriteria $FlightCriteria
     * @param typeAccountID $AccountID
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $FlightCriteria = null, $AccountID = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->FlightCriteria = $FlightCriteria;
      $this->AccountID = $AccountID;
    }

    /**
     * @return FlightCriteria
     */
    public function getFlightCriteria()
    {
      return $this->FlightCriteria;
    }

    /**
     * @param FlightCriteria $FlightCriteria
     * @return \FilippoToso\Travelport\Util\FindEmployeesOnFlightReq
     */
    public function setFlightCriteria($FlightCriteria)
    {
      $this->FlightCriteria = $FlightCriteria;
      return $this;
    }

    /**
     * @return typeAccountID
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param typeAccountID $AccountID
     * @return \FilippoToso\Travelport\Util\FindEmployeesOnFlightReq
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
      return $this;
    }

}
