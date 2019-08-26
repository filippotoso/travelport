<?php

namespace FilippoToso\Travelport\Vehicle;

class PreferredSupplier
{

    /**
     * @var boolean $Preferred
     */
    protected $Preferred = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param boolean $Preferred
     * @param typeProfileType $ProfileType
     */
    public function __construct($Preferred, $ProfileType)
    {
      $this->Preferred = $Preferred;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return boolean
     */
    public function getPreferred()
    {
      return $this->Preferred;
    }

    /**
     * @param boolean $Preferred
     * @return \FilippoToso\Travelport\Vehicle\PreferredSupplier
     */
    public function setPreferred($Preferred)
    {
      $this->Preferred = $Preferred;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\Vehicle\PreferredSupplier
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
