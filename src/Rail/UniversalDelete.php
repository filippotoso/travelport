<?php

namespace FilippoToso\Travelport\Rail;

class UniversalDelete
{

    /**
     * @var typeElement $Element
     */
    protected $Element = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeElement $Element
     * @param typeRef $Key
     */
    public function __construct($Element = null, $Key = null)
    {
      $this->Element = $Element;
      $this->Key = $Key;
    }

    /**
     * @return typeElement
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeElement $Element
     * @return \FilippoToso\Travelport\Rail\UniversalDelete
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
     * @return \FilippoToso\Travelport\Rail\UniversalDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
