<?php

namespace FilippoToso\Travelport\Util;

class FareFamilyCriteria
{

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFareFamily $Label
     */
    protected $Label = null;

    /**
     * @var typeFareBasisCode $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @param typeCarrier $Carrier
     * @param typeFareFamily $Label
     * @param typeFareBasisCode $FareBasis
     */
    public function __construct($Carrier = null, $Label = null, $FareBasis = null)
    {
      $this->Carrier = $Carrier;
      $this->Label = $Label;
      $this->FareBasis = $FareBasis;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\FareFamilyCriteria
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeFareFamily
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param typeFareFamily $Label
     * @return \FilippoToso\Travelport\Util\FareFamilyCriteria
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return typeFareBasisCode
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param typeFareBasisCode $FareBasis
     * @return \FilippoToso\Travelport\Util\FareFamilyCriteria
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

}
