<?php

namespace FilippoToso\Travelport\Air;

class TermConditions
{

    /**
     * @var LanguageOption $LanguageOption
     */
    protected $LanguageOption = null;

    /**
     * @var boolean $IncludeTermConditions
     */
    protected $IncludeTermConditions = null;

    /**
     * @param LanguageOption $LanguageOption
     * @param boolean $IncludeTermConditions
     */
    public function __construct($LanguageOption = null, $IncludeTermConditions = null)
    {
      $this->LanguageOption = $LanguageOption;
      $this->IncludeTermConditions = $IncludeTermConditions;
    }

    /**
     * @return LanguageOption
     */
    public function getLanguageOption()
    {
      return $this->LanguageOption;
    }

    /**
     * @param LanguageOption $LanguageOption
     * @return \FilippoToso\Travelport\Air\TermConditions
     */
    public function setLanguageOption($LanguageOption)
    {
      $this->LanguageOption = $LanguageOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeTermConditions()
    {
      return $this->IncludeTermConditions;
    }

    /**
     * @param boolean $IncludeTermConditions
     * @return \FilippoToso\Travelport\Air\TermConditions
     */
    public function setIncludeTermConditions($IncludeTermConditions)
    {
      $this->IncludeTermConditions = $IncludeTermConditions;
      return $this;
    }

}
