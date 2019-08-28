<?php

namespace FilippoToso\Travelport\UProfile;

class ActionRef extends typeActionReference
{

    /**
     * @var EndpointRef $EndpointRef
     */
    protected $EndpointRef = null;

    /**
     * @param typeActionID $ID
     * @param string $ProfileActionCode
     * @param EndpointRef $EndpointRef
     */
    public function __construct($ID = null, $ProfileActionCode = null, $EndpointRef = null)
    {
      parent::__construct($ID, $ProfileActionCode);
      $this->EndpointRef = $EndpointRef;
    }

    /**
     * @return EndpointRef
     */
    public function getEndpointRef()
    {
      return $this->EndpointRef;
    }

    /**
     * @param EndpointRef $EndpointRef
     * @return \FilippoToso\Travelport\UProfile\ActionRef
     */
    public function setEndpointRef($EndpointRef)
    {
      $this->EndpointRef = $EndpointRef;
      return $this;
    }

}
