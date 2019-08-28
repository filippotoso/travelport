<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileChildSearchReq extends BaseReq
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
     * @var typeWildcard $OrganizationName
     */
    protected $OrganizationName = null;

    /**
     * @var typeWildcard $GivenName
     */
    protected $GivenName = null;

    /**
     * @var typeWildcard $Surname
     */
    protected $Surname = null;

    /**
     * @var ProfileSearchModifiers $ProfileSearchModifiers
     */
    protected $ProfileSearchModifiers = null;

    /**
     * @var anonymous978 $HierarchyType
     */
    protected $HierarchyType = null;

    /**
     * @var boolean $IncludeAgentsAndTravelers
     */
    protected $IncludeAgentsAndTravelers = null;

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
     * @param typeWildcard $OrganizationName
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @param anonymous978 $HierarchyType
     * @param boolean $IncludeAgentsAndTravelers
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ProfileID = null, $ProvisioningCode = null, $UniqueProfileID = null, $OrganizationName = null, $ProfileSearchModifiers = null, $HierarchyType = null, $IncludeAgentsAndTravelers = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ProfileID = $ProfileID;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->UniqueProfileID = $UniqueProfileID;
      $this->OrganizationName = $OrganizationName;
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
      $this->HierarchyType = $HierarchyType;
      $this->IncludeAgentsAndTravelers = $IncludeAgentsAndTravelers;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
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
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getOrganizationName()
    {
      return $this->OrganizationName;
    }

    /**
     * @param typeWildcard $OrganizationName
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setOrganizationName($OrganizationName)
    {
      $this->OrganizationName = $OrganizationName;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param typeWildcard $GivenName
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param typeWildcard $Surname
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return ProfileSearchModifiers
     */
    public function getProfileSearchModifiers()
    {
      return $this->ProfileSearchModifiers;
    }

    /**
     * @param ProfileSearchModifiers $ProfileSearchModifiers
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setProfileSearchModifiers($ProfileSearchModifiers)
    {
      $this->ProfileSearchModifiers = $ProfileSearchModifiers;
      return $this;
    }

    /**
     * @return anonymous978
     */
    public function getHierarchyType()
    {
      return $this->HierarchyType;
    }

    /**
     * @param anonymous978 $HierarchyType
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setHierarchyType($HierarchyType)
    {
      $this->HierarchyType = $HierarchyType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAgentsAndTravelers()
    {
      return $this->IncludeAgentsAndTravelers;
    }

    /**
     * @param boolean $IncludeAgentsAndTravelers
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchReq
     */
    public function setIncludeAgentsAndTravelers($IncludeAgentsAndTravelers)
    {
      $this->IncludeAgentsAndTravelers = $IncludeAgentsAndTravelers;
      return $this;
    }

}
