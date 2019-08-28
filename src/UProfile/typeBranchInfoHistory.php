<?php

namespace FilippoToso\Travelport\UProfile;

class typeBranchInfoHistory extends typeProfileInfo
{

    /**
     * @var typeProviderInfoHistory[] $ProviderInfo
     */
    protected $ProviderInfo = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var typeGeoCityCode $GeoCityCode
     */
    protected $GeoCityCode = null;

    /**
     * @var boolean $Control
     */
    protected $Control = null;

    /**
     * @var typeProvisioningCode $BranchCode
     */
    protected $BranchCode = null;

    /**
     * @var typeCurrency $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $URSyncTo
     */
    protected $URSyncTo = null;

    /**
     * @var boolean $ProfileSyncTo
     */
    protected $ProfileSyncTo = null;

    /**
     * @var boolean $ProfileSyncFrom
     */
    protected $ProfileSyncFrom = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to128 $Name
     * @param typeGeoCityCode $GeoCityCode
     * @param boolean $Control
     * @param typeProvisioningCode $BranchCode
     * @param typeCurrency $Currency
     * @param boolean $URSyncTo
     * @param boolean $ProfileSyncTo
     * @param boolean $ProfileSyncFrom
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Name = null, $GeoCityCode = null, $Control = null, $BranchCode = null, $Currency = null, $URSyncTo = null, $ProfileSyncTo = null, $ProfileSyncFrom = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Name = $Name;
      $this->GeoCityCode = $GeoCityCode;
      $this->Control = $Control;
      $this->BranchCode = $BranchCode;
      $this->Currency = $Currency;
      $this->URSyncTo = $URSyncTo;
      $this->ProfileSyncTo = $ProfileSyncTo;
      $this->ProfileSyncFrom = $ProfileSyncFrom;
    }

    /**
     * @return typeProviderInfoHistory[]
     */
    public function getProviderInfo()
    {
      return $this->ProviderInfo;
    }

    /**
     * @param typeProviderInfoHistory[] $ProviderInfo
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setProviderInfo(array $ProviderInfo = null)
    {
      $this->ProviderInfo = $ProviderInfo;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeGeoCityCode
     */
    public function getGeoCityCode()
    {
      return $this->GeoCityCode;
    }

    /**
     * @param typeGeoCityCode $GeoCityCode
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setGeoCityCode($GeoCityCode)
    {
      $this->GeoCityCode = $GeoCityCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getControl()
    {
      return $this->Control;
    }

    /**
     * @param boolean $Control
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setControl($Control)
    {
      $this->Control = $Control;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getBranchCode()
    {
      return $this->BranchCode;
    }

    /**
     * @param typeProvisioningCode $BranchCode
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param typeCurrency $Currency
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getURSyncTo()
    {
      return $this->URSyncTo;
    }

    /**
     * @param boolean $URSyncTo
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setURSyncTo($URSyncTo)
    {
      $this->URSyncTo = $URSyncTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProfileSyncTo()
    {
      return $this->ProfileSyncTo;
    }

    /**
     * @param boolean $ProfileSyncTo
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setProfileSyncTo($ProfileSyncTo)
    {
      $this->ProfileSyncTo = $ProfileSyncTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProfileSyncFrom()
    {
      return $this->ProfileSyncFrom;
    }

    /**
     * @param boolean $ProfileSyncFrom
     * @return \FilippoToso\Travelport\UProfile\typeBranchInfoHistory
     */
    public function setProfileSyncFrom($ProfileSyncFrom)
    {
      $this->ProfileSyncFrom = $ProfileSyncFrom;
      return $this;
    }

}
