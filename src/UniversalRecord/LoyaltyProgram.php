<?php

namespace FilippoToso\Travelport\UniversalRecord;

class LoyaltyProgram
{

    /**
     * @var UNKNOWN $Level
     */
    protected $Level = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeCarrier $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $AllianceLevel
     */
    protected $AllianceLevel = null;

    /**
     * @var StringLength1to32 $MembershipProgram
     */
    protected $MembershipProgram = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param UNKNOWN $Level
     * @param typeRef $Key
     * @param typeCarrier $SupplierCode
     * @param string $AllianceLevel
     * @param StringLength1to32 $MembershipProgram
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Level = null, $Key = null, $SupplierCode = null, $AllianceLevel = null, $MembershipProgram = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Level = $Level;
      $this->Key = $Key;
      $this->SupplierCode = $SupplierCode;
      $this->AllianceLevel = $AllianceLevel;
      $this->MembershipProgram = $MembershipProgram;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return UNKNOWN
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param UNKNOWN $Level
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeCarrier $SupplierCode
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllianceLevel()
    {
      return $this->AllianceLevel;
    }

    /**
     * @param string $AllianceLevel
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setAllianceLevel($AllianceLevel)
    {
      $this->AllianceLevel = $AllianceLevel;
      return $this;
    }

    /**
     * @return StringLength1to32
     */
    public function getMembershipProgram()
    {
      return $this->MembershipProgram;
    }

    /**
     * @param StringLength1to32 $MembershipProgram
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setMembershipProgram($MembershipProgram)
    {
      $this->MembershipProgram = $MembershipProgram;
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
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
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
     * @return \FilippoToso\Travelport\UniversalRecord\LoyaltyProgram
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
