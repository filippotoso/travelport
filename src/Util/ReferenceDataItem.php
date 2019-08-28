<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataItem
{

    /**
     * @var AdditionalInfo[] $AdditionalInfo
     */
    protected $AdditionalInfo = null;

    /**
     * @var boolean $Deprecated
     */
    protected $Deprecated = null;

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
     * @param boolean $Deprecated
     * @param StringLength1to128 $Code
     * @param StringLength1to128 $Name
     * @param StringLength1to255 $Description
     */
    public function __construct($Deprecated = null, $Code = null, $Name = null, $Description = null)
    {
      $this->Deprecated = $Deprecated;
      $this->Code = $Code;
      $this->Name = $Name;
      $this->Description = $Description;
    }

    /**
     * @return AdditionalInfo[]
     */
    public function getAdditionalInfo()
    {
      return $this->AdditionalInfo;
    }

    /**
     * @param AdditionalInfo[] $AdditionalInfo
     * @return \FilippoToso\Travelport\Util\ReferenceDataItem
     */
    public function setAdditionalInfo(array $AdditionalInfo = null)
    {
      $this->AdditionalInfo = $AdditionalInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeprecated()
    {
      return $this->Deprecated;
    }

    /**
     * @param boolean $Deprecated
     * @return \FilippoToso\Travelport\Util\ReferenceDataItem
     */
    public function setDeprecated($Deprecated)
    {
      $this->Deprecated = $Deprecated;
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataItem
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataItem
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
