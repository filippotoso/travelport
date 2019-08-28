<?php

namespace FilippoToso\Travelport\Util;

class FareFamilyDelete
{

    /**
     * @var typeRef $FareFamilyRef
     */
    protected $FareFamilyRef = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @param typeRef $FareFamilyRef
     * @param typeURVersion $Version
     */
    public function __construct($FareFamilyRef = null, $Version = null)
    {
      $this->FareFamilyRef = $FareFamilyRef;
      $this->Version = $Version;
    }

    /**
     * @return typeRef
     */
    public function getFareFamilyRef()
    {
      return $this->FareFamilyRef;
    }

    /**
     * @param typeRef $FareFamilyRef
     * @return \FilippoToso\Travelport\Util\FareFamilyDelete
     */
    public function setFareFamilyRef($FareFamilyRef)
    {
      $this->FareFamilyRef = $FareFamilyRef;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\Util\FareFamilyDelete
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
