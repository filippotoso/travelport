<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Guarantee
{

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var OtherGuaranteeInfo $OtherGuaranteeInfo
     */
    protected $OtherGuaranteeInfo = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $ReuseFOP
     */
    protected $ReuseFOP = null;

    /**
     * @var typeExternalReference $ExternalReference
     */
    protected $ExternalReference = null;

    /**
     * @var boolean $Reusable
     */
    protected $Reusable = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param CreditCard $CreditCard
     * @param OtherGuaranteeInfo $OtherGuaranteeInfo
     * @param string $Type
     * @param typeRef $Key
     * @param typeRef $ReuseFOP
     * @param typeExternalReference $ExternalReference
     * @param boolean $Reusable
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CreditCard = null, $OtherGuaranteeInfo = null, $Type = null, $Key = null, $ReuseFOP = null, $ExternalReference = null, $Reusable = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CreditCard = $CreditCard;
      $this->OtherGuaranteeInfo = $OtherGuaranteeInfo;
      $this->Type = $Type;
      $this->Key = $Key;
      $this->ReuseFOP = $ReuseFOP;
      $this->ExternalReference = $ExternalReference;
      $this->Reusable = $Reusable;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return OtherGuaranteeInfo
     */
    public function getOtherGuaranteeInfo()
    {
      return $this->OtherGuaranteeInfo;
    }

    /**
     * @param OtherGuaranteeInfo $OtherGuaranteeInfo
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setOtherGuaranteeInfo($OtherGuaranteeInfo)
    {
      $this->OtherGuaranteeInfo = $OtherGuaranteeInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getReuseFOP()
    {
      return $this->ReuseFOP;
    }

    /**
     * @param typeRef $ReuseFOP
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setReuseFOP($ReuseFOP)
    {
      $this->ReuseFOP = $ReuseFOP;
      return $this;
    }

    /**
     * @return typeExternalReference
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param typeExternalReference $ExternalReference
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReusable()
    {
      return $this->Reusable;
    }

    /**
     * @param boolean $Reusable
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
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
     * @return \FilippoToso\Travelport\UniversalRecord\Guarantee
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
