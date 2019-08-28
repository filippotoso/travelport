<?php

namespace FilippoToso\Travelport\UProfile;

class typeEditableEndpoint extends typeEndpointRef
{

    /**
     * @var typeFieldRef $FixedFieldRef
     */
    protected $FixedFieldRef = null;

    /**
     * @var typeFieldRef $CustomFieldRef
     */
    protected $CustomFieldRef = null;

    /**
     * @param typeEndpointID $ID
     * @param typeFieldRef $FixedFieldRef
     * @param typeFieldRef $CustomFieldRef
     */
    public function __construct($ID = null, $FixedFieldRef = null, $CustomFieldRef = null)
    {
      parent::__construct($ID);
      $this->FixedFieldRef = $FixedFieldRef;
      $this->CustomFieldRef = $CustomFieldRef;
    }

    /**
     * @return typeFieldRef
     */
    public function getFixedFieldRef()
    {
      return $this->FixedFieldRef;
    }

    /**
     * @param typeFieldRef $FixedFieldRef
     * @return \FilippoToso\Travelport\UProfile\typeEditableEndpoint
     */
    public function setFixedFieldRef($FixedFieldRef)
    {
      $this->FixedFieldRef = $FixedFieldRef;
      return $this;
    }

    /**
     * @return typeFieldRef
     */
    public function getCustomFieldRef()
    {
      return $this->CustomFieldRef;
    }

    /**
     * @param typeFieldRef $CustomFieldRef
     * @return \FilippoToso\Travelport\UProfile\typeEditableEndpoint
     */
    public function setCustomFieldRef($CustomFieldRef)
    {
      $this->CustomFieldRef = $CustomFieldRef;
      return $this;
    }

}
