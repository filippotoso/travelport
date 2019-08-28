<?php

namespace FilippoToso\Travelport\UniversalRecord;

class NameCriteria
{

    /**
     * @var anonymous1410 $FirstName
     */
    protected $FirstName = null;

    /**
     * @var anonymous1411 $LastName
     */
    protected $LastName = null;

    /**
     * @param anonymous1410 $FirstName
     * @param anonymous1411 $LastName
     */
    public function __construct($FirstName = null, $LastName = null)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
    }

    /**
     * @return anonymous1410
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param anonymous1410 $FirstName
     * @return \FilippoToso\Travelport\UniversalRecord\NameCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return anonymous1411
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param anonymous1411 $LastName
     * @return \FilippoToso\Travelport\UniversalRecord\NameCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
