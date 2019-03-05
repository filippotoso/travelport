<?php

namespace FilippoToso\Travelport\Util;

class RequestReferenceDataItem
{

    /**
     * @var RequestAmenity[] $RequestAmenity
     */
    protected $RequestAmenity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestAmenity[]
     */
    public function getRequestAmenity()
    {
      return $this->RequestAmenity;
    }

    /**
     * @param RequestAmenity[] $RequestAmenity
     * @return \FilippoToso\Travelport\Util\RequestReferenceDataItem
     */
    public function setRequestAmenity(array $RequestAmenity = null)
    {
      $this->RequestAmenity = $RequestAmenity;
      return $this;
    }

}
