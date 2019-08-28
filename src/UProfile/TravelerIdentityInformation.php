<?php

namespace FilippoToso\Travelport\UProfile;

class TravelerIdentityInformation extends typeKeyElement
{

    /**
     * @var StringLength1to50 $SecondaryIdCode
     */
    protected $SecondaryIdCode = null;

    /**
     * @var typeMasked $MaskSecondaryIdCode
     */
    protected $MaskSecondaryIdCode = null;

    /**
     * @var StringLength1to128 $SecurityQuestion1
     */
    protected $SecurityQuestion1 = null;

    /**
     * @var StringLength1to128 $SecurityAnswer1
     */
    protected $SecurityAnswer1 = null;

    /**
     * @var StringLength1to128 $SecurityQuestion2
     */
    protected $SecurityQuestion2 = null;

    /**
     * @var StringLength1to128 $SecurityAnswer2
     */
    protected $SecurityAnswer2 = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to50 $SecondaryIdCode
     * @param typeMasked $MaskSecondaryIdCode
     * @param StringLength1to128 $SecurityQuestion1
     * @param StringLength1to128 $SecurityAnswer1
     * @param StringLength1to128 $SecurityQuestion2
     * @param StringLength1to128 $SecurityAnswer2
     */
    public function __construct($Key = null, $SecondaryIdCode = null, $MaskSecondaryIdCode = null, $SecurityQuestion1 = null, $SecurityAnswer1 = null, $SecurityQuestion2 = null, $SecurityAnswer2 = null)
    {
      parent::__construct($Key);
      $this->SecondaryIdCode = $SecondaryIdCode;
      $this->MaskSecondaryIdCode = $MaskSecondaryIdCode;
      $this->SecurityQuestion1 = $SecurityQuestion1;
      $this->SecurityAnswer1 = $SecurityAnswer1;
      $this->SecurityQuestion2 = $SecurityQuestion2;
      $this->SecurityAnswer2 = $SecurityAnswer2;
    }

    /**
     * @return StringLength1to50
     */
    public function getSecondaryIdCode()
    {
      return $this->SecondaryIdCode;
    }

    /**
     * @param StringLength1to50 $SecondaryIdCode
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setSecondaryIdCode($SecondaryIdCode)
    {
      $this->SecondaryIdCode = $SecondaryIdCode;
      return $this;
    }

    /**
     * @return typeMasked
     */
    public function getMaskSecondaryIdCode()
    {
      return $this->MaskSecondaryIdCode;
    }

    /**
     * @param typeMasked $MaskSecondaryIdCode
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setMaskSecondaryIdCode($MaskSecondaryIdCode)
    {
      $this->MaskSecondaryIdCode = $MaskSecondaryIdCode;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSecurityQuestion1()
    {
      return $this->SecurityQuestion1;
    }

    /**
     * @param StringLength1to128 $SecurityQuestion1
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setSecurityQuestion1($SecurityQuestion1)
    {
      $this->SecurityQuestion1 = $SecurityQuestion1;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSecurityAnswer1()
    {
      return $this->SecurityAnswer1;
    }

    /**
     * @param StringLength1to128 $SecurityAnswer1
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setSecurityAnswer1($SecurityAnswer1)
    {
      $this->SecurityAnswer1 = $SecurityAnswer1;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSecurityQuestion2()
    {
      return $this->SecurityQuestion2;
    }

    /**
     * @param StringLength1to128 $SecurityQuestion2
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setSecurityQuestion2($SecurityQuestion2)
    {
      $this->SecurityQuestion2 = $SecurityQuestion2;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSecurityAnswer2()
    {
      return $this->SecurityAnswer2;
    }

    /**
     * @param StringLength1to128 $SecurityAnswer2
     * @return \FilippoToso\Travelport\UProfile\TravelerIdentityInformation
     */
    public function setSecurityAnswer2($SecurityAnswer2)
    {
      $this->SecurityAnswer2 = $SecurityAnswer2;
      return $this;
    }

}
