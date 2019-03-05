<?php

namespace FilippoToso\Travelport\UProfile;

class EndpointRef extends typeEndpointRef
{

    /**
     * @var typePurposeTypeCode $PurposeTypeCode
     */
    protected $PurposeTypeCode = null;

    /**
     * @var string $EndPointCode
     */
    protected $EndPointCode = null;

    /**
     * @param typeEndpointID $ID
     * @param typePurposeTypeCode $PurposeTypeCode
     * @param string $EndPointCode
     */
    public function __construct($ID = null, $PurposeTypeCode = null, $EndPointCode = null)
    {
      parent::__construct($ID);
      $this->PurposeTypeCode = $PurposeTypeCode;
      $this->EndPointCode = $EndPointCode;
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
     * @return \FilippoToso\Travelport\UProfile\EndpointRef
     */
    public function setPurposeTypeCode($PurposeTypeCode)
    {
      $this->PurposeTypeCode = $PurposeTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndPointCode()
    {
      return $this->EndPointCode;
    }

    /**
     * @param string $EndPointCode
     * @return \FilippoToso\Travelport\UProfile\EndpointRef
     */
    public function setEndPointCode($EndPointCode)
    {
      $this->EndPointCode = $EndPointCode;
      return $this;
    }

}
