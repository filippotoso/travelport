<?php

namespace FilippoToso\Travelport\Rail;

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
    public function __construct($Preferred = null, $ProfileType = null)
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
     * @return \FilippoToso\Travelport\Rail\PreferredSupplier
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
     * @return \FilippoToso\Travelport\Rail\PreferredSupplier
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
