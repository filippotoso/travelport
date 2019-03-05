<?php

namespace FilippoToso\Travelport\Util;

class SsrType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Providers
     */
    protected $Providers = null;

    /**
     * @var string $Level
     */
    protected $Level = null;

    /**
     * @var string $FreeTextRequired
     */
    protected $FreeTextRequired = null;

    /**
     * @var string $Pattern
     */
    protected $Pattern = null;

    /**
     * @var string $HelpText
     */
    protected $HelpText = null;

    /**
     * @param string $Code
     * @param string $Description
     * @param string $Providers
     * @param string $Level
     * @param string $FreeTextRequired
     * @param string $Pattern
     * @param string $HelpText
     */
    public function __construct($Code = null, $Description = null, $Providers = null, $Level = null, $FreeTextRequired = null, $Pattern = null, $HelpText = null)
    {
      $this->Code = $Code;
      $this->Description = $Description;
      $this->Providers = $Providers;
      $this->Level = $Level;
      $this->FreeTextRequired = $FreeTextRequired;
      $this->Pattern = $Pattern;
      $this->HelpText = $HelpText;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviders()
    {
      return $this->Providers;
    }

    /**
     * @param string $Providers
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setProviders($Providers)
    {
      $this->Providers = $Providers;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param string $Level
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeTextRequired()
    {
      return $this->FreeTextRequired;
    }

    /**
     * @param string $FreeTextRequired
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setFreeTextRequired($FreeTextRequired)
    {
      $this->FreeTextRequired = $FreeTextRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getPattern()
    {
      return $this->Pattern;
    }

    /**
     * @param string $Pattern
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setPattern($Pattern)
    {
      $this->Pattern = $Pattern;
      return $this;
    }

    /**
     * @return string
     */
    public function getHelpText()
    {
      return $this->HelpText;
    }

    /**
     * @param string $HelpText
     * @return \FilippoToso\Travelport\Util\SsrType
     */
    public function setHelpText($HelpText)
    {
      $this->HelpText = $HelpText;
      return $this;
    }

}
