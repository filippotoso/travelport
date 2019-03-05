<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellDelete
{

    /**
     * @var typeRef $QualifyRef
     */
    protected $QualifyRef = null;

    /**
     * @var typeRef $OfferRef
     */
    protected $OfferRef = null;

    /**
     * @param typeRef $QualifyRef
     * @param typeRef $OfferRef
     */
    public function __construct($QualifyRef = null, $OfferRef = null)
    {
      $this->QualifyRef = $QualifyRef;
      $this->OfferRef = $OfferRef;
    }

    /**
     * @return typeRef
     */
    public function getQualifyRef()
    {
      return $this->QualifyRef;
    }

    /**
     * @param typeRef $QualifyRef
     * @return \FilippoToso\Travelport\Util\VehicleUpsellDelete
     */
    public function setQualifyRef($QualifyRef)
    {
      $this->QualifyRef = $QualifyRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \FilippoToso\Travelport\Util\VehicleUpsellDelete
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
      return $this;
    }

}
