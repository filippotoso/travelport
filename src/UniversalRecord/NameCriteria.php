<?php

namespace FilippoToso\Travelport\UniversalRecord;

class NameCriteria
{

    /**
     * @var anonymous1412 $FirstName
     */
    protected $FirstName = null;

    /**
     * @var anonymous1413 $LastName
     */
    protected $LastName = null;

    /**
     * @param anonymous1412 $FirstName
     * @param anonymous1413 $LastName
     */
    public function __construct($FirstName = null, $LastName = null)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
    }

    /**
     * @return anonymous1412
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param anonymous1412 $FirstName
     * @return \FilippoToso\Travelport\UniversalRecord\NameCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return anonymous1413
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param anonymous1413 $LastName
     * @return \FilippoToso\Travelport\UniversalRecord\NameCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
