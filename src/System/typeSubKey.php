<?php

namespace FilippoToso\Travelport\System;

class typeSubKey
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var anonymous393 $Name
     */
    protected $Name = null;

    /**
     * @var UNKNOWN $Description
     */
    protected $Description = null;

    /**
     * @param anonymous393 $Name
     * @param UNKNOWN $Description
     */
    public function __construct($Name = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\System\typeSubKey
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return anonymous393
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous393 $Name
     * @return \FilippoToso\Travelport\System\typeSubKey
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\System\typeSubKey
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
