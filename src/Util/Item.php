<?php

namespace FilippoToso\Travelport\Util;

class Item extends typeReferenceData
{

    /**
     * @var AdditionalElement $AdditionalElement
     */
    protected $AdditionalElement = null;

    /**
     * @param date $DeprecatedDate
     * @param StringLength1to128 $Code
     * @param StringLength1to128 $Name
     * @param StringLength1to255 $Description
     * @param AdditionalElement $AdditionalElement
     */
    public function __construct($DeprecatedDate = null, $Code = null, $Name = null, $Description = null, $AdditionalElement = null)
    {
      parent::__construct($DeprecatedDate, $Code, $Name, $Description);
      $this->AdditionalElement = $AdditionalElement;
    }

    /**
     * @return AdditionalElement
     */
    public function getAdditionalElement()
    {
      return $this->AdditionalElement;
    }

    /**
     * @param AdditionalElement $AdditionalElement
     * @return \FilippoToso\Travelport\Util\Item
     */
    public function setAdditionalElement($AdditionalElement)
    {
      $this->AdditionalElement = $AdditionalElement;
      return $this;
    }

}
