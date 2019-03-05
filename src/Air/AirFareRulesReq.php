<?php

namespace FilippoToso\Travelport\Air;

class AirFareRulesReq extends BaseReq
{

    /**
     * @var AirReservationSelector $AirReservationSelector
     */
    protected $AirReservationSelector = null;

    /**
     * @var FareRuleLookup $FareRuleLookup
     */
    protected $FareRuleLookup = null;

    /**
     * @var FareRuleKey $FareRuleKey
     */
    protected $FareRuleKey = null;

    /**
     * @var AirFareDisplayRuleKey $AirFareDisplayRuleKey
     */
    protected $AirFareDisplayRuleKey = null;

    /**
     * @var AirFareRulesModifier $AirFareRulesModifier
     */
    protected $AirFareRulesModifier = null;

    /**
     * @var FareRulesFilterCategory[] $FareRulesFilterCategory
     */
    protected $FareRulesFilterCategory = null;

    /**
     * @var typeFareRuleType $FareRuleType
     */
    protected $FareRuleType = null;

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
     * @param AirReservationSelector $AirReservationSelector
     * @param FareRuleLookup $FareRuleLookup
     * @param FareRuleKey $FareRuleKey
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @param AirFareRulesModifier $AirFareRulesModifier
     * @param typeFareRuleType $FareRuleType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $AirReservationSelector = null, $FareRuleLookup = null, $FareRuleKey = null, $AirFareDisplayRuleKey = null, $AirFareRulesModifier = null, $FareRuleType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->AirReservationSelector = $AirReservationSelector;
      $this->FareRuleLookup = $FareRuleLookup;
      $this->FareRuleKey = $FareRuleKey;
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      $this->AirFareRulesModifier = $AirFareRulesModifier;
      $this->FareRuleType = $FareRuleType;
    }

    /**
     * @return AirReservationSelector
     */
    public function getAirReservationSelector()
    {
      return $this->AirReservationSelector;
    }

    /**
     * @param AirReservationSelector $AirReservationSelector
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setAirReservationSelector($AirReservationSelector)
    {
      $this->AirReservationSelector = $AirReservationSelector;
      return $this;
    }

    /**
     * @return FareRuleLookup
     */
    public function getFareRuleLookup()
    {
      return $this->FareRuleLookup;
    }

    /**
     * @param FareRuleLookup $FareRuleLookup
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setFareRuleLookup($FareRuleLookup)
    {
      $this->FareRuleLookup = $FareRuleLookup;
      return $this;
    }

    /**
     * @return FareRuleKey
     */
    public function getFareRuleKey()
    {
      return $this->FareRuleKey;
    }

    /**
     * @param FareRuleKey $FareRuleKey
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setFareRuleKey($FareRuleKey)
    {
      $this->FareRuleKey = $FareRuleKey;
      return $this;
    }

    /**
     * @return AirFareDisplayRuleKey
     */
    public function getAirFareDisplayRuleKey()
    {
      return $this->AirFareDisplayRuleKey;
    }

    /**
     * @param AirFareDisplayRuleKey $AirFareDisplayRuleKey
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setAirFareDisplayRuleKey($AirFareDisplayRuleKey)
    {
      $this->AirFareDisplayRuleKey = $AirFareDisplayRuleKey;
      return $this;
    }

    /**
     * @return AirFareRulesModifier
     */
    public function getAirFareRulesModifier()
    {
      return $this->AirFareRulesModifier;
    }

    /**
     * @param AirFareRulesModifier $AirFareRulesModifier
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setAirFareRulesModifier($AirFareRulesModifier)
    {
      $this->AirFareRulesModifier = $AirFareRulesModifier;
      return $this;
    }

    /**
     * @return FareRulesFilterCategory[]
     */
    public function getFareRulesFilterCategory()
    {
      return $this->FareRulesFilterCategory;
    }

    /**
     * @param FareRulesFilterCategory[] $FareRulesFilterCategory
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setFareRulesFilterCategory(array $FareRulesFilterCategory = null)
    {
      $this->FareRulesFilterCategory = $FareRulesFilterCategory;
      return $this;
    }

    /**
     * @return typeFareRuleType
     */
    public function getFareRuleType()
    {
      return $this->FareRuleType;
    }

    /**
     * @param typeFareRuleType $FareRuleType
     * @return \FilippoToso\Travelport\Air\AirFareRulesReq
     */
    public function setFareRuleType($FareRuleType)
    {
      $this->FareRuleType = $FareRuleType;
      return $this;
    }

}
