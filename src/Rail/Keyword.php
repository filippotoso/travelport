<?php

namespace FilippoToso\Travelport\Rail;

class Keyword extends typeKeyword
{

    /**
     * @param anonymous400 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     * @param language $LanguageCode
     */
    public function __construct($Name, $Number, $Description, $LanguageCode)
    {
      parent::__construct($Name, $Number, $Description, $LanguageCode);
    }

}
