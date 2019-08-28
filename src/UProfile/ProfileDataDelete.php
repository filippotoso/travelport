<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileDataDelete
{

    /**
     * @var typeProfileDataElementType $Element
     */
    protected $Element = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeProfileDataElementType $Element
     * @param typeRef $Key
     */
    public function __construct($Element = null, $Key = null)
    {
      $this->Element = $Element;
      $this->Key = $Key;
    }

    /**
     * @return typeProfileDataElementType
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeProfileDataElementType $Element
     * @return \FilippoToso\Travelport\UProfile\ProfileDataDelete
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
     * @return \FilippoToso\Travelport\UProfile\ProfileDataDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
