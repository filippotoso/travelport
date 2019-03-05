<?php

namespace FilippoToso\Travelport\Terminal;

class PolicyInformation
{

    /**
     * @var ReasonCode $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @var typePolicy $Type
     */
    protected $Type = null;

    /**
     * @var UNKNOWN $Name
     */
    protected $Name = null;

    /**
     * @var boolean $OutOfPolicy
     */
    protected $OutOfPolicy = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @param typePolicy $Type
     * @param UNKNOWN $Name
     * @param typeRef $SegmentRef
     */
    public function __construct($Type = null, $Name = null, $SegmentRef = null)
    {
      $this->Type = $Type;
      $this->Name = $Name;
      $this->SegmentRef = $SegmentRef;
    }

    /**
     * @return ReasonCode
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param ReasonCode $ReasonCode
     * @return \FilippoToso\Travelport\Terminal\PolicyInformation
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

    /**
     * @return typePolicy
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typePolicy $Type
     * @return \FilippoToso\Travelport\Terminal\PolicyInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param UNKNOWN $Name
     * @return \FilippoToso\Travelport\Terminal\PolicyInformation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOutOfPolicy()
    {
      return $this->OutOfPolicy;
    }

    /**
     * @param boolean $OutOfPolicy
     * @return \FilippoToso\Travelport\Terminal\PolicyInformation
     */
    public function setOutOfPolicy($OutOfPolicy)
    {
      $this->OutOfPolicy = $OutOfPolicy;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Terminal\PolicyInformation
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
