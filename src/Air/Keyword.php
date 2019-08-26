<?php

namespace FilippoToso\Travelport\Air;

class Keyword extends typeKeyword
{

    /**
     * @param anonymous403 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     * @param language $LanguageCode
     */
    public function __construct($Name, $Number, $Description, $LanguageCode)
    {
      parent::__construct($Name, $Number, $Description, $LanguageCode);
    }

}
