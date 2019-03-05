<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeKeyword
{

    /**
     * @var typeSubKey[] $SubKey
     */
    protected $SubKey = null;

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var anonymous400 $Name
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
     * @var language $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @param anonymous400 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     * @param language $LanguageCode
     */
    public function __construct($Name = null, $Number = null, $Description = null, $LanguageCode = null)
    {
      $this->Name = $Name;
      $this->Number = $Number;
      $this->Description = $Description;
      $this->LanguageCode = $LanguageCode;
    }

    /**
     * @return typeSubKey[]
     */
    public function getSubKey()
    {
      return $this->SubKey;
    }

    /**
     * @param typeSubKey[] $SubKey
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
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
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anonymous400
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous400 $Name
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
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
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
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
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return language
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param language $LanguageCode
     * @return \FilippoToso\Travelport\GDSQueue\typeKeyword
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
