<?php

namespace FilippoToso\Travelport\Util;

class StructuredFareRules
{

    /**
     * @var ADVSFRType[] $ADV
     */
    protected $ADV = null;

    /**
     * @var MINSFRType[] $MIN
     */
    protected $MIN = null;

    /**
     * @var MAXSFRType[] $MAX
     */
    protected $MAX = null;

    /**
     * @var STP[] $STP
     */
    protected $STP = null;

    /**
     * @var CHGSFRType[] $CHG
     */
    protected $CHG = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ADVSFRType[]
     */
    public function getADV()
    {
      return $this->ADV;
    }

    /**
     * @param ADVSFRType[] $ADV
     * @return \FilippoToso\Travelport\Util\StructuredFareRules
     */
    public function setADV(array $ADV = null)
    {
      $this->ADV = $ADV;
      return $this;
    }

    /**
     * @return MINSFRType[]
     */
    public function getMIN()
    {
      return $this->MIN;
    }

    /**
     * @param MINSFRType[] $MIN
     * @return \FilippoToso\Travelport\Util\StructuredFareRules
     */
    public function setMIN(array $MIN = null)
    {
      $this->MIN = $MIN;
      return $this;
    }

    /**
     * @return MAXSFRType[]
     */
    public function getMAX()
    {
      return $this->MAX;
    }

    /**
     * @param MAXSFRType[] $MAX
     * @return \FilippoToso\Travelport\Util\StructuredFareRules
     */
    public function setMAX(array $MAX = null)
    {
      $this->MAX = $MAX;
      return $this;
    }

    /**
     * @return STP[]
     */
    public function getSTP()
    {
      return $this->STP;
    }

    /**
     * @param STP[] $STP
     * @return \FilippoToso\Travelport\Util\StructuredFareRules
     */
    public function setSTP(array $STP = null)
    {
      $this->STP = $STP;
      return $this;
    }

    /**
     * @return CHGSFRType[]
     */
    public function getCHG()
    {
      return $this->CHG;
    }

    /**
     * @param CHGSFRType[] $CHG
     * @return \FilippoToso\Travelport\Util\StructuredFareRules
     */
    public function setCHG(array $CHG = null)
    {
      $this->CHG = $CHG;
      return $this;
    }

}
