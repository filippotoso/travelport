<?php

namespace FilippoToso\Travelport\UProfile;

class TagAdd
{

    /**
     * @var typeTaggableElement $Element
     */
    protected $Element = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeTagID $TagID
     */
    protected $TagID = null;

    /**
     * @param typeTaggableElement $Element
     * @param typeRef $Key
     * @param typeTagID $TagID
     */
    public function __construct($Element = null, $Key = null, $TagID = null)
    {
      $this->Element = $Element;
      $this->Key = $Key;
      $this->TagID = $TagID;
    }

    /**
     * @return typeTaggableElement
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeTaggableElement $Element
     * @return \FilippoToso\Travelport\UProfile\TagAdd
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
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
     * @return \FilippoToso\Travelport\UProfile\TagAdd
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeTagID
     */
    public function getTagID()
    {
      return $this->TagID;
    }

    /**
     * @param typeTagID $TagID
     * @return \FilippoToso\Travelport\UProfile\TagAdd
     */
    public function setTagID($TagID)
    {
      $this->TagID = $TagID;
      return $this;
    }

}
