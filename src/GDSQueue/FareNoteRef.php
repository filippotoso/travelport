<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareNoteRef
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\GDSQueue\FareNoteRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
