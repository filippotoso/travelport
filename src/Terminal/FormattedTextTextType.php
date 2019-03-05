<?php

namespace FilippoToso\Travelport\Terminal;

class FormattedTextTextType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var boolean $Formatted
     */
    protected $Formatted = null;

    /**
     * @var anonymous322 $TextFormat
     */
    protected $TextFormat = null;

    /**
     * @var language $Language
     */
    protected $Language = null;

    /**
     * @param string $_
     * @param boolean $Formatted
     * @param anonymous322 $TextFormat
     * @param language $Language
     */
    public function __construct($_ = null, $Formatted = null, $TextFormat = null, $Language = null)
    {
      $this->_ = $_;
      $this->Formatted = $Formatted;
      $this->TextFormat = $TextFormat;
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Terminal\FormattedTextTextType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFormatted()
    {
      return $this->Formatted;
    }

    /**
     * @param boolean $Formatted
     * @return \FilippoToso\Travelport\Terminal\FormattedTextTextType
     */
    public function setFormatted($Formatted)
    {
      $this->Formatted = $Formatted;
      return $this;
    }

    /**
     * @return anonymous322
     */
    public function getTextFormat()
    {
      return $this->TextFormat;
    }

    /**
     * @param anonymous322 $TextFormat
     * @return \FilippoToso\Travelport\Terminal\FormattedTextTextType
     */
    public function setTextFormat($TextFormat)
    {
      $this->TextFormat = $TextFormat;
      return $this;
    }

    /**
     * @return language
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param language $Language
     * @return \FilippoToso\Travelport\Terminal\FormattedTextTextType
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}
