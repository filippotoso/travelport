<?php

namespace FilippoToso\Travelport\Vehicle;

class typeOTAKeyword
{

    /**
     * @var typeOTASubKey[] $SubKey
     */
    protected $SubKey = null;

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var anonymous406 $Name
     */
    protected $Name = null;

    /**
     * @var UNKNOWN $Number
     */
    protected $Number = null;

    /**
     * @var UNKNOWN $Description
     */
    protected $Description = null;

    /**
     * @param anonymous406 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     */
    public function __construct($Name = null, $Number = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Number = $Number;
      $this->Description = $Description;
    }

    /**
     * @return typeOTASubKey[]
     */
    public function getSubKey()
    {
      return $this->SubKey;
    }

    /**
     * @param typeOTASubKey[] $SubKey
     * @return \FilippoToso\Travelport\Vehicle\typeOTAKeyword
     */
    public function setSubKey(array $SubKey = null)
    {
      $this->SubKey = $SubKey;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \FilippoToso\Travelport\Vehicle\typeOTAKeyword
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anonymous406
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous406 $Name
     * @return \FilippoToso\Travelport\Vehicle\typeOTAKeyword
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param UNKNOWN $Number
     * @return \FilippoToso\Travelport\Vehicle\typeOTAKeyword
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param UNKNOWN $Description
     * @return \FilippoToso\Travelport\Vehicle\typeOTAKeyword
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
