<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeTextElement
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var language $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @param string $_
     * @param string $Type
     * @param language $LanguageCode
     */
    public function __construct($_ = null, $Type = null, $LanguageCode = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->LanguageCode = $LanguageCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\typeTextElement
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\GDSQueue\typeTextElement
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\GDSQueue\typeTextElement
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
