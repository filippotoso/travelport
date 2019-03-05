<?php

namespace FilippoToso\Travelport\UProfile;

class EndpointAdd extends typeEditableEndpoint
{

    /**
     * @var typePurposeTypeCode $PurposeTypeCode
     */
    protected $PurposeTypeCode = null;

    /**
     * @param typeEndpointID $ID
     * @param typeFieldRef $FixedFieldRef
     * @param typeFieldRef $CustomFieldRef
     * @param typePurposeTypeCode $PurposeTypeCode
     */
    public function __construct($ID = null, $FixedFieldRef = null, $CustomFieldRef = null, $PurposeTypeCode = null)
    {
      parent::__construct($ID, $FixedFieldRef, $CustomFieldRef);
      $this->PurposeTypeCode = $PurposeTypeCode;
    }

    /**
     * @return typePurposeTypeCode
     */
    public function getPurposeTypeCode()
    {
      return $this->PurposeTypeCode;
    }

    /**
     * @param typePurposeTypeCode $PurposeTypeCode
     * @return \FilippoToso\Travelport\UProfile\EndpointAdd
     */
    public function setPurposeTypeCode($PurposeTypeCode)
    {
      $this->PurposeTypeCode = $PurposeTypeCode;
      return $this;
    }

}
