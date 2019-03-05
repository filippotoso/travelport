<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirSegmentTicketingModifiers
{

    /**
     * @var typeRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var StringLength1to10 $BrandTier
     */
    protected $BrandTier = null;

    /**
     * @param typeRef $AirSegmentRef
     * @param StringLength1to10 $BrandTier
     */
    public function __construct($AirSegmentRef = null, $BrandTier = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->BrandTier = $BrandTier;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentTicketingModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBrandTier()
    {
      return $this->BrandTier;
    }

    /**
     * @param StringLength1to10 $BrandTier
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentTicketingModifiers
     */
    public function setBrandTier($BrandTier)
    {
      $this->BrandTier = $BrandTier;
      return $this;
    }

}
