<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileParentAdd
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
     * @param typeProfileID $ProfileID
     * @param ProvisioningCode $ProvisioningCode
     * @param UniqueProfileID $UniqueProfileID
     */
    public function __construct($ProfileID = null, $ProvisioningCode = null, $UniqueProfileID = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->UniqueProfileID = $UniqueProfileID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentAdd
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
     * @return \FilippoToso\Travelport\UProfile\ProfileParentAdd
     */
    public function setUniqueProfileID($UniqueProfileID)
    {
      $this->UniqueProfileID = $UniqueProfileID;
      return $this;
    }

}
