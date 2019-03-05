<?php

namespace FilippoToso\Travelport\Hotel;

class Keyword extends typeKeyword
{

    /**
     * @param anonymous400 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     * @param language $LanguageCode
     */
    public function __construct($Name = null, $Number = null, $Description = null, $LanguageCode = null)
    {
      parent::__construct($Name, $Number, $Description, $LanguageCode);
    }

}
