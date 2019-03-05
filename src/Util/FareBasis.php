<?php

namespace FilippoToso\Travelport\Util;

class FareBasis
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @param string $Code
     * @param typeRef $SegmentRef
     */
    public function __construct($Code = null, $SegmentRef = null)
    {
      $this->Code = $Code;
      $this->SegmentRef = $SegmentRef;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Util\FareBasis
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\Util\FareBasis
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
