<?php

namespace FilippoToso\Travelport\Terminal;

class LoyaltyCard
{

    /**
     * @var typeProviderReservationSpecificInfo[] $ProviderReservationSpecificInfo
     */
    protected $ProviderReservationSpecificInfo = null;

    /**
     * @var typeCardNumber $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $MembershipStatus
     */
    protected $MembershipStatus = null;

    /**
     * @var string $FreeText
     */
    protected $FreeText = null;

    /**
     * @var typeProduct $SupplierType
     */
    protected $SupplierType = null;

    /**
     * @var anonymous128 $Level
     */
    protected $Level = null;

    /**
     * @var typePriorityCode $PriorityCode
     */
    protected $PriorityCode = null;

    /**
     * @var string $VendorLocationRef
     */
    protected $VendorLocationRef = null;

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
     * @param typeCardNumber $CardNumber
     * @param string $Status
     * @param string $MembershipStatus
     * @param string $FreeText
     * @param typeProduct $SupplierType
     * @param anonymous128 $Level
     * @param typePriorityCode $PriorityCode
     * @param string $VendorLocationRef
     * @param typeRef $Key
     * @param typeCarrier $SupplierCode
     * @param string $AllianceLevel
     * @param StringLength1to32 $MembershipProgram
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CardNumber = null, $Status = null, $MembershipStatus = null, $FreeText = null, $SupplierType = null, $Level = null, $PriorityCode = null, $VendorLocationRef = null, $Key = null, $SupplierCode = null, $AllianceLevel = null, $MembershipProgram = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CardNumber = $CardNumber;
      $this->Status = $Status;
      $this->MembershipStatus = $MembershipStatus;
      $this->FreeText = $FreeText;
      $this->SupplierType = $SupplierType;
      $this->Level = $Level;
      $this->PriorityCode = $PriorityCode;
      $this->VendorLocationRef = $VendorLocationRef;
      $this->Key = $Key;
      $this->SupplierCode = $SupplierCode;
      $this->AllianceLevel = $AllianceLevel;
      $this->MembershipProgram = $MembershipProgram;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeProviderReservationSpecificInfo[]
     */
    public function getProviderReservationSpecificInfo()
    {
      return $this->ProviderReservationSpecificInfo;
    }

    /**
     * @param typeProviderReservationSpecificInfo[] $ProviderReservationSpecificInfo
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setProviderReservationSpecificInfo(array $ProviderReservationSpecificInfo = null)
    {
      $this->ProviderReservationSpecificInfo = $ProviderReservationSpecificInfo;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param typeCardNumber $CardNumber
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMembershipStatus()
    {
      return $this->MembershipStatus;
    }

    /**
     * @param string $MembershipStatus
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setMembershipStatus($MembershipStatus)
    {
      $this->MembershipStatus = $MembershipStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param string $FreeText
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return typeProduct
     */
    public function getSupplierType()
    {
      return $this->SupplierType;
    }

    /**
     * @param typeProduct $SupplierType
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return anonymous128
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param anonymous128 $Level
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return typePriorityCode
     */
    public function getPriorityCode()
    {
      return $this->PriorityCode;
    }

    /**
     * @param typePriorityCode $PriorityCode
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setPriorityCode($PriorityCode)
    {
      $this->PriorityCode = $PriorityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorLocationRef()
    {
      return $this->VendorLocationRef;
    }

    /**
     * @param string $VendorLocationRef
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setVendorLocationRef($VendorLocationRef)
    {
      $this->VendorLocationRef = $VendorLocationRef;
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
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
     * @return \FilippoToso\Travelport\Terminal\LoyaltyCard
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
