<?php

namespace FilippoToso\Travelport\Air;

class MetaData
{

    /**
     * @var anonymous188 $Key
     */
    protected $Key = null;

    /**
     * @var anonymous189 $Value
     */
    protected $Value = null;

    /**
     * @param anonymous188 $Key
     * @param anonymous189 $Value
     */
    public function __construct($Key = null, $Value = null)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return anonymous188
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param anonymous188 $Key
     * @return \FilippoToso\Travelport\Air\MetaData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous189
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous189 $Value
     * @return \FilippoToso\Travelport\Air\MetaData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
