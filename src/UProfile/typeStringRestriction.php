<?php

namespace FilippoToso\Travelport\UProfile;

class typeStringRestriction
{

    /**
     * @var typeFieldEnumerationValue[] $Enumeration
     */
    protected $Enumeration = null;

    /**
     * @var int $MinLength
     */
    protected $MinLength = null;

    /**
     * @var int $MaxLength
     */
    protected $MaxLength = null;

    /**
     * @param int $MinLength
     * @param int $MaxLength
     */
    public function __construct($MinLength = null, $MaxLength = null)
    {
      $this->MinLength = $MinLength;
      $this->MaxLength = $MaxLength;
    }

    /**
     * @return typeFieldEnumerationValue[]
     */
    public function getEnumeration()
    {
      return $this->Enumeration;
    }

    /**
     * @param typeFieldEnumerationValue[] $Enumeration
     * @return \FilippoToso\Travelport\UProfile\typeStringRestriction
     */
    public function setEnumeration(array $Enumeration = null)
    {
      $this->Enumeration = $Enumeration;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinLength()
    {
      return $this->MinLength;
    }

    /**
     * @param int $MinLength
     * @return \FilippoToso\Travelport\UProfile\typeStringRestriction
     */
    public function setMinLength($MinLength)
    {
      $this->MinLength = $MinLength;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength()
    {
      return $this->MaxLength;
    }

    /**
     * @param int $MaxLength
     * @return \FilippoToso\Travelport\UProfile\typeStringRestriction
     */
    public function setMaxLength($MaxLength)
    {
      $this->MaxLength = $MaxLength;
      return $this;
    }

}
