<?php

namespace FilippoToso\Travelport\Rail;

class TravelerCriteria
{

    /**
     * @var NameCriteria $NameCriteria
     */
    protected $NameCriteria = null;

    /**
     * @var AppliedProfileCriteria $AppliedProfileCriteria
     */
    protected $AppliedProfileCriteria = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var boolean $VIPOnly
     */
    protected $VIPOnly = null;

    /**
     * @param NameCriteria $NameCriteria
     * @param AppliedProfileCriteria $AppliedProfileCriteria
     * @param string $PhoneNumber
     * @param boolean $VIPOnly
     */
    public function __construct($NameCriteria = null, $AppliedProfileCriteria = null, $PhoneNumber = null, $VIPOnly = null)
    {
      $this->NameCriteria = $NameCriteria;
      $this->AppliedProfileCriteria = $AppliedProfileCriteria;
      $this->PhoneNumber = $PhoneNumber;
      $this->VIPOnly = $VIPOnly;
    }

    /**
     * @return NameCriteria
     */
    public function getNameCriteria()
    {
      return $this->NameCriteria;
    }

    /**
     * @param NameCriteria $NameCriteria
     * @return \FilippoToso\Travelport\Rail\TravelerCriteria
     */
    public function setNameCriteria($NameCriteria)
    {
      $this->NameCriteria = $NameCriteria;
      return $this;
    }

    /**
     * @return AppliedProfileCriteria
     */
    public function getAppliedProfileCriteria()
    {
      return $this->AppliedProfileCriteria;
    }

    /**
     * @param AppliedProfileCriteria $AppliedProfileCriteria
     * @return \FilippoToso\Travelport\Rail\TravelerCriteria
     */
    public function setAppliedProfileCriteria($AppliedProfileCriteria)
    {
      $this->AppliedProfileCriteria = $AppliedProfileCriteria;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \FilippoToso\Travelport\Rail\TravelerCriteria
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVIPOnly()
    {
      return $this->VIPOnly;
    }

    /**
     * @param boolean $VIPOnly
     * @return \FilippoToso\Travelport\Rail\TravelerCriteria
     */
    public function setVIPOnly($VIPOnly)
    {
      $this->VIPOnly = $VIPOnly;
      return $this;
    }

}
