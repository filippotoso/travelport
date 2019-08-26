<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TicketAdvisory
{

    /**
     * @var StringLength1to500 $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var language $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @param StringLength1to500 $_
     * @param typeRef $Key
     * @param language $LanguageCode
     */
    public function __construct($_, $Key, $LanguageCode)
    {
      $this->_ = $_;
      $this->Key = $Key;
      $this->LanguageCode = $LanguageCode;
    }

    /**
     * @return StringLength1to500
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength1to500 $_
     * @return \FilippoToso\Travelport\UniversalRecord\TicketAdvisory
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UniversalRecord\TicketAdvisory
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TicketAdvisory
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
