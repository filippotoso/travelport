<?php

namespace FilippoToso\Travelport\UProfile;

class typeAgencyInfoHistory extends typeProfileInfo
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to8 $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @var typeProvisioningCode $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @var boolean $UsesTemplate
     */
    protected $UsesTemplate = null;

    /**
     * @var anonymous716 $URSyncData
     */
    protected $URSyncData = null;

    /**
     * @var boolean $URSyncTo
     */
    protected $URSyncTo = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to128 $Name
     * @param StringLength1to8 $IataNumber
     * @param typeProvisioningCode $AgencyCode
     * @param boolean $UsesTemplate
     * @param anonymous716 $URSyncData
     * @param boolean $URSyncTo
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Name = null, $IataNumber = null, $AgencyCode = null, $UsesTemplate = null, $URSyncData = null, $URSyncTo = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Name = $Name;
      $this->IataNumber = $IataNumber;
      $this->AgencyCode = $AgencyCode;
      $this->UsesTemplate = $UsesTemplate;
      $this->URSyncData = $URSyncData;
      $this->URSyncTo = $URSyncTo;
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
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param StringLength1to8 $IataNumber
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param typeProvisioningCode $AgencyCode
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsesTemplate()
    {
      return $this->UsesTemplate;
    }

    /**
     * @param boolean $UsesTemplate
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setUsesTemplate($UsesTemplate)
    {
      $this->UsesTemplate = $UsesTemplate;
      return $this;
    }

    /**
     * @return anonymous716
     */
    public function getURSyncData()
    {
      return $this->URSyncData;
    }

    /**
     * @param anonymous716 $URSyncData
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setURSyncData($URSyncData)
    {
      $this->URSyncData = $URSyncData;
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
     * @return \FilippoToso\Travelport\UProfile\typeAgencyInfoHistory
     */
    public function setURSyncTo($URSyncTo)
    {
      $this->URSyncTo = $URSyncTo;
      return $this;
    }

}
