<?php

namespace FilippoToso\Travelport\System;

class RetrieveEntry
{

    /**
     * @var typeCacheKey $Key
     */
    protected $Key = null;

    /**
     * @param typeCacheKey $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return typeCacheKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeCacheKey $Key
     * @return \FilippoToso\Travelport\System\RetrieveEntry
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
