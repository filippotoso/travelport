<?php

namespace FilippoToso\Travelport\Vehicle;

class CreditCard
{

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $ProfileID
     * @param typeRef $Key
     */
    public function __construct($ProfileID = null, $Key = null)
    {
      $this->ProfileID = $ProfileID;
      $this->Key = $Key;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \FilippoToso\Travelport\Vehicle\CreditCard
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
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
     * @return \FilippoToso\Travelport\Vehicle\CreditCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
