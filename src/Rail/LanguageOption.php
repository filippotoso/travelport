<?php

namespace FilippoToso\Travelport\Rail;

class LanguageOption
{

    /**
     * @var typeLanguage $Language
     */
    protected $Language = null;

    /**
     * @var typeCountry $Country
     */
    protected $Country = null;

    /**
     * @param typeLanguage $Language
     * @param typeCountry $Country
     */
    public function __construct($Language, $Country)
    {
      $this->Language = $Language;
      $this->Country = $Country;
    }

    /**
     * @return typeLanguage
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param typeLanguage $Language
     * @return \FilippoToso\Travelport\Rail\LanguageOption
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param typeCountry $Country
     * @return \FilippoToso\Travelport\Rail\LanguageOption
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
