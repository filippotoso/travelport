<?php

namespace FilippoToso\Travelport\GDSQueue;

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
     * @var anonymous837 $FltKey
     */
    protected $FltKey = null;

    /**
     * @param int $SponsoredLNB
     * @param int $NeutralLNB
     * @param anonymous837 $FltKey
     */
    public function __construct($SponsoredLNB, $NeutralLNB, $FltKey)
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
     * @return \FilippoToso\Travelport\GDSQueue\SponsoredFltInfo
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
     * @return \FilippoToso\Travelport\GDSQueue\SponsoredFltInfo
     */
    public function setNeutralLNB($NeutralLNB)
    {
      $this->NeutralLNB = $NeutralLNB;
      return $this;
    }

    /**
     * @return anonymous837
     */
    public function getFltKey()
    {
      return $this->FltKey;
    }

    /**
     * @param anonymous837 $FltKey
     * @return \FilippoToso\Travelport\GDSQueue\SponsoredFltInfo
     */
    public function setFltKey($FltKey)
    {
      $this->FltKey = $FltKey;
      return $this;
    }

}
