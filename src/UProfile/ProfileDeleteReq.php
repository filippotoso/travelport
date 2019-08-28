<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDeleteReq extends BaseReq
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var ProvisioningCode $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @var UniqueProfileID $UniqueProfileID
     */
    protected $UniqueProfileID = null;

    /**
     * @var boolean $Force
     */
    protected $Force = null;

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
     * @param typeProfileID $ProfileID
     * @param ProvisioningCode $ProvisioningCode
     * @param UniqueProfileID $UniqueProfileID
     * @param boolean $Force
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileID = null, $ProvisioningCode = null, $UniqueProfileID = null, $Force = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileID = $ProfileID;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->UniqueProfileID = $UniqueProfileID;
      $this->Force = $Force;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteReq
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return ProvisioningCode
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param ProvisioningCode $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteReq
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
    }

    /**
     * @return UniqueProfileID
     */
    public function getUniqueProfileID()
    {
      return $this->UniqueProfileID;
    }

    /**
     * @param UniqueProfileID $UniqueProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteReq
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForce()
    {
      return $this->Force;
    }

    /**
     * @param boolean $Force
     * @return \FilippoToso\Travelport\UProfile\ProfileDeleteReq
     */
    public function setForce($Force)
    {
      $this->Force = $Force;
      return $this;
    }

}
