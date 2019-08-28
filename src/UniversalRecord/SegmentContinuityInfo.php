<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SegmentContinuityInfo
{

    /**
     * @var ArvlUnknSegment $ArvlUnknSegment
     */
    protected $ArvlUnknSegment = null;

    /**
     * @var ContinuityOverrideRemark $ContinuityOverrideRemark
     */
    protected $ContinuityOverrideRemark = null;

    /**
     * @var int $ArrivalUnknownSegmentCount
     */
    protected $ArrivalUnknownSegmentCount = null;

    /**
     * @param ArvlUnknSegment $ArvlUnknSegment
     * @param ContinuityOverrideRemark $ContinuityOverrideRemark
     * @param int $ArrivalUnknownSegmentCount
     */
    public function __construct($ArvlUnknSegment = null, $ContinuityOverrideRemark = null, $ArrivalUnknownSegmentCount = null)
    {
      $this->ArvlUnknSegment = $ArvlUnknSegment;
      $this->ContinuityOverrideRemark = $ContinuityOverrideRemark;
      $this->ArrivalUnknownSegmentCount = $ArrivalUnknownSegmentCount;
    }

    /**
     * @return ArvlUnknSegment
     */
    public function getArvlUnknSegment()
    {
      return $this->ArvlUnknSegment;
    }

    /**
     * @param ArvlUnknSegment $ArvlUnknSegment
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentContinuityInfo
     */
    public function setArvlUnknSegment($ArvlUnknSegment)
    {
      $this->ArvlUnknSegment = $ArvlUnknSegment;
      return $this;
    }

    /**
     * @return ContinuityOverrideRemark
     */
    public function getContinuityOverrideRemark()
    {
      return $this->ContinuityOverrideRemark;
    }

    /**
     * @param ContinuityOverrideRemark $ContinuityOverrideRemark
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentContinuityInfo
     */
    public function setContinuityOverrideRemark($ContinuityOverrideRemark)
    {
      $this->ContinuityOverrideRemark = $ContinuityOverrideRemark;
      return $this;
    }

    /**
     * @return int
     */
    public function getArrivalUnknownSegmentCount()
    {
      return $this->ArrivalUnknownSegmentCount;
    }

    /**
     * @param int $ArrivalUnknownSegmentCount
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentContinuityInfo
     */
    public function setArrivalUnknownSegmentCount($ArrivalUnknownSegmentCount)
    {
      $this->ArrivalUnknownSegmentCount = $ArrivalUnknownSegmentCount;
      return $this;
    }

}
