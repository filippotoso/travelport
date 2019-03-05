<?php

namespace FilippoToso\Travelport\Air;

class typeAssociatedRemarkWithSegmentRef extends typeAssociatedRemark
{

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @param string $RemarkData
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param typeRef $SegmentRef
     */
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null, $ElStat = null, $KeyOverride = null, $SegmentRef = null)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride);
      $this->SegmentRef = $SegmentRef;
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
     * @return \FilippoToso\Travelport\Air\typeAssociatedRemarkWithSegmentRef
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
