<?php

namespace FilippoToso\Travelport\System;

class Credentials
{

    /**
     * @var anonymous24 $UserId
     */
    protected $UserId = null;

    /**
     * @param anonymous24 $UserId
     */
    public function __construct($UserId = null)
    {
      $this->UserId = $UserId;
    }

    /**
     * @return anonymous24
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param anonymous24 $UserId
     * @return \FilippoToso\Travelport\System\Credentials
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

}
