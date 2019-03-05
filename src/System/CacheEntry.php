<?php

namespace FilippoToso\Travelport\System;

class CacheEntry
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeCacheKey $Key
     */
    protected $Key = null;

    /**
     * @param string $_
     * @param typeCacheKey $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\System\CacheEntry
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return \FilippoToso\Travelport\System\CacheEntry
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
