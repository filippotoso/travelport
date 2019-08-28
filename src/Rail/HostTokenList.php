<?php

namespace FilippoToso\Travelport\Rail;

class HostTokenList
{

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @param HostToken $HostToken
     */
    public function __construct($HostToken = null)
    {
      $this->HostToken = $HostToken;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Rail\HostTokenList
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

}
