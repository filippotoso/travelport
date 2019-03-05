<?php

namespace FilippoToso\Travelport\Util;

class ServiceAssociations
{

    /**
     * @var ApplicableSegment[] $ApplicableSegment
     */
    protected $ApplicableSegment = null;

    /**
     * @param ApplicableSegment[] $ApplicableSegment
     */
    public function __construct(array $ApplicableSegment = null)
    {
      $this->ApplicableSegment = $ApplicableSegment;
    }

    /**
     * @return ApplicableSegment[]
     */
    public function getApplicableSegment()
    {
      return $this->ApplicableSegment;
    }

    /**
     * @param ApplicableSegment[] $ApplicableSegment
     * @return \FilippoToso\Travelport\Util\ServiceAssociations
     */
    public function setApplicableSegment(array $ApplicableSegment)
    {
      $this->ApplicableSegment = $ApplicableSegment;
      return $this;
    }

}
