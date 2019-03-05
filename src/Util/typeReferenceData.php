<?php

namespace FilippoToso\Travelport\Util;

class typeReferenceData
{

    /**
     * @var date $DeprecatedDate
     */
    protected $DeprecatedDate = null;

    /**
     * @var StringLength1to128 $Code
     */
    protected $Code = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @param date $DeprecatedDate
     * @param StringLength1to128 $Code
     * @param StringLength1to128 $Name
     * @param StringLength1to255 $Description
     */
    public function __construct($DeprecatedDate = null, $Code = null, $Name = null, $Description = null)
    {
      $this->DeprecatedDate = $DeprecatedDate;
      $this->Code = $Code;
      $this->Name = $Name;
      $this->Description = $Description;
    }

    /**
     * @return date
     */
    public function getDeprecatedDate()
    {
      return $this->DeprecatedDate;
    }

    /**
     * @param date $DeprecatedDate
     * @return \FilippoToso\Travelport\Util\typeReferenceData
     */
    public function setDeprecatedDate($DeprecatedDate)
    {
      $this->DeprecatedDate = $DeprecatedDate;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param StringLength1to128 $Code
     * @return \FilippoToso\Travelport\Util\typeReferenceData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\Util\typeReferenceData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\Util\typeReferenceData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
