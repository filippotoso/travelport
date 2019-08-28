<?php

namespace FilippoToso\Travelport\Util;

class HostToken
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeProviderCode $Host
     */
    protected $Host = null;

    /**
     * @var UNKNOWN $Key
     */
    protected $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param string $_
     * @param typeProviderCode $Host
     * @param UNKNOWN $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($_ = null, $Host = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->_ = $_;
      $this->Host = $Host;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Util\HostToken
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getHost()
    {
      return $this->Host;
    }

    /**
     * @param typeProviderCode $Host
     * @return \FilippoToso\Travelport\Util\HostToken
     */
    public function setHost($Host)
    {
      $this->Host = $Host;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param UNKNOWN $Key
     * @return \FilippoToso\Travelport\Util\HostToken
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Util\HostToken
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Util\HostToken
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
