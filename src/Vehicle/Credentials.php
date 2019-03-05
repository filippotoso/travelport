<?php

namespace FilippoToso\Travelport\Vehicle;

class Credentials
{

    /**
     * @var anonymous28 $UserId
     */
    protected $UserId = null;

    /**
     * @param anonymous28 $UserId
     */
    public function __construct($UserId = null)
    {
      $this->UserId = $UserId;
    }

    /**
     * @return anonymous28
     */
    public function getUserId()
    {
      return $this->UserId;
    }

    /**
     * @param anonymous28 $UserId
     * @return \FilippoToso\Travelport\Vehicle\Credentials
     */
    public function setUserId($UserId)
    {
      $this->UserId = $UserId;
      return $this;
    }

}
