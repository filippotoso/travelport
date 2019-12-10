<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataSearchItem
{

    /**
     * @var Code $Code
     */
    protected $Code = null;

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var anonymous1149 $Type
     */
    protected $Type = null;

    /**
     * @param anonymous1149 $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return Code
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param Code $Code
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous1149
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1149 $Type
     * @return \FilippoToso\Travelport\Util\ReferenceDataSearchItem
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
