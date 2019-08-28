<?php

namespace FilippoToso\Travelport\UProfile;

class typeKeyTaggedElement extends typeKeyElement
{

    /**
     * @var TagRef $TagRef
     */
    protected $TagRef = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     */
    public function __construct($Key = null, $TagRef = null)
    {
      parent::__construct($Key);
      $this->TagRef = $TagRef;
    }

    /**
     * @return TagRef
     */
    public function getTagRef()
    {
      return $this->TagRef;
    }

    /**
     * @param TagRef $TagRef
     * @return \FilippoToso\Travelport\UProfile\typeKeyTaggedElement
     */
    public function setTagRef($TagRef)
    {
      $this->TagRef = $TagRef;
      return $this;
    }

}
