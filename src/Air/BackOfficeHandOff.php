<?php

namespace FilippoToso\Travelport\Air;

class BackOfficeHandOff
{

    /**
     * @var typeBackOffice $Type
     */
    protected $Type = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @param typeBackOffice $Type
     * @param string $Location
     * @param typePCC $PseudoCityCode
     */
    public function __construct($Type = null, $Location = null, $PseudoCityCode = null)
    {
      $this->Type = $Type;
      $this->Location = $Location;
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return typeBackOffice
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeBackOffice $Type
     * @return \FilippoToso\Travelport\Air\BackOfficeHandOff
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \FilippoToso\Travelport\Air\BackOfficeHandOff
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Air\BackOfficeHandOff
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
