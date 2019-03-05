<?php

namespace FilippoToso\Travelport\Air;

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
     * @var anonymous832 $FltKey
     */
    protected $FltKey = null;

    /**
     * @param int $SponsoredLNB
     * @param int $NeutralLNB
     * @param anonymous832 $FltKey
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
     * @return \FilippoToso\Travelport\Air\SponsoredFltInfo
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
     * @return \FilippoToso\Travelport\Air\SponsoredFltInfo
     */
    public function setNeutralLNB($NeutralLNB)
    {
      $this->NeutralLNB = $NeutralLNB;
      return $this;
    }

    /**
     * @return anonymous832
     */
    public function getFltKey()
    {
      return $this->FltKey;
    }

    /**
     * @param anonymous832 $FltKey
     * @return \FilippoToso\Travelport\Air\SponsoredFltInfo
     */
    public function setFltKey($FltKey)
    {
      $this->FltKey = $FltKey;
      return $this;
    }

}
