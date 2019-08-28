<?php

namespace FilippoToso\Travelport\Terminal;

class AppliedProfile
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var string $TravelerName
     */
    protected $TravelerName = null;

    /**
     * @var string $AccountID
     */
    protected $AccountID = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var string $ImmediateParentID
     */
    protected $ImmediateParentID = null;

    /**
     * @var string $ImmediateParentName
     */
    protected $ImmediateParentName = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param string $TravelerID
     * @param string $TravelerName
     * @param string $AccountID
     * @param string $AccountName
     * @param string $ImmediateParentID
     * @param string $ImmediateParentName
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $TravelerID = null, $TravelerName = null, $AccountID = null, $AccountName = null, $ImmediateParentID = null, $ImmediateParentName = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->TravelerID = $TravelerID;
      $this->TravelerName = $TravelerName;
      $this->AccountID = $AccountID;
      $this->AccountName = $AccountName;
      $this->ImmediateParentID = $ImmediateParentID;
      $this->ImmediateParentName = $ImmediateParentName;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param string $TravelerID
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTravelerName()
    {
      return $this->TravelerName;
    }

    /**
     * @param string $TravelerName
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setTravelerName($TravelerName)
    {
      $this->TravelerName = $TravelerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param string $AccountID
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getImmediateParentID()
    {
      return $this->ImmediateParentID;
    }

    /**
     * @param string $ImmediateParentID
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setImmediateParentID($ImmediateParentID)
    {
      $this->ImmediateParentID = $ImmediateParentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getImmediateParentName()
    {
      return $this->ImmediateParentName;
    }

    /**
     * @param string $ImmediateParentName
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setImmediateParentName($ImmediateParentName)
    {
      $this->ImmediateParentName = $ImmediateParentName;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Terminal\AppliedProfile
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
