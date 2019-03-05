<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileModifyReq extends BaseReq
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
     * @var ProfileModifyCmd $ProfileModifyCmd
     */
    protected $ProfileModifyCmd = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var boolean $ReturnProfile
     */
    protected $ReturnProfile = null;

    /**
     * @var boolean $ShowDataUnmasked
     */
    protected $ShowDataUnmasked = null;

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
     * @param ProfileModifyCmd $ProfileModifyCmd
     * @param typeVersion $Version
     * @param boolean $ReturnProfile
     * @param boolean $ShowDataUnmasked
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileID = null, $ProvisioningCode = null, $UniqueProfileID = null, $ProfileModifyCmd = null, $Version = null, $ReturnProfile = null, $ShowDataUnmasked = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileID = $ProfileID;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->UniqueProfileID = $UniqueProfileID;
      $this->ProfileModifyCmd = $ProfileModifyCmd;
      $this->Version = $Version;
      $this->ReturnProfile = $ReturnProfile;
      $this->ShowDataUnmasked = $ShowDataUnmasked;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

    /**
     * @return ProfileModifyCmd
     */
    public function getProfileModifyCmd()
    {
      return $this->ProfileModifyCmd;
    }

    /**
     * @param ProfileModifyCmd $ProfileModifyCmd
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
     */
    public function setProfileModifyCmd($ProfileModifyCmd)
    {
      $this->ProfileModifyCmd = $ProfileModifyCmd;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeVersion $Version
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnProfile()
    {
      return $this->ReturnProfile;
    }

    /**
     * @param boolean $ReturnProfile
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
     */
    public function setReturnProfile($ReturnProfile)
    {
      $this->ReturnProfile = $ReturnProfile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowDataUnmasked()
    {
      return $this->ShowDataUnmasked;
    }

    /**
     * @param boolean $ShowDataUnmasked
     * @return \FilippoToso\Travelport\UProfile\ProfileModifyReq
     */
    public function setShowDataUnmasked($ShowDataUnmasked)
    {
      $this->ShowDataUnmasked = $ShowDataUnmasked;
      return $this;
    }

}
