<?php

namespace FilippoToso\Travelport\Util;

class SponsoredFltInfo
{

    /**
     * @var int $SponsoredLNB
     */
    protected $SponsoredLNB = null;

    /**
     * @var int $NeutralLNB
     */
    protected $NeutralLNB = null;

    /**
     * @var anonymous763 $FltKey
     */
    protected $FltKey = null;

    /**
     * @param int $SponsoredLNB
     * @param int $NeutralLNB
     * @param anonymous763 $FltKey
     */
    public function __construct($SponsoredLNB = null, $NeutralLNB = null, $FltKey = null)
    {
      $this->SponsoredLNB = $SponsoredLNB;
      $this->NeutralLNB = $NeutralLNB;
      $this->FltKey = $FltKey;
    }

    /**
     * @return int
     */
    public function getSponsoredLNB()
    {
      return $this->SponsoredLNB;
    }

    /**
     * @param int $SponsoredLNB
     * @return \FilippoToso\Travelport\Util\SponsoredFltInfo
     */
    public function setSponsoredLNB($SponsoredLNB)
    {
      $this->SponsoredLNB = $SponsoredLNB;
      return $this;
    }

    /**
     * @return int
     */
    public function getNeutralLNB()
    {
      return $this->NeutralLNB;
    }

    /**
     * @param int $NeutralLNB
     * @return \FilippoToso\Travelport\Util\SponsoredFltInfo
     */
    public function setNeutralLNB($NeutralLNB)
    {
      $this->NeutralLNB = $NeutralLNB;
      return $this;
    }

    /**
     * @return anonymous763
     */
    public function getFltKey()
    {
      return $this->FltKey;
    }

    /**
     * @param anonymous763 $FltKey
     * @return \FilippoToso\Travelport\Util\SponsoredFltInfo
     */
    public function setFltKey($FltKey)
    {
      $this->FltKey = $FltKey;
      return $this;
    }

}
