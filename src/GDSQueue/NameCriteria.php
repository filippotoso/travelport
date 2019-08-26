<?php

namespace FilippoToso\Travelport\GDSQueue;

class NameCriteria
{

    /**
     * @var anonymous1407 $FirstName
     */
    protected $FirstName = null;

    /**
     * @var anonymous1408 $LastName
     */
    protected $LastName = null;

    /**
     * @param anonymous1407 $FirstName
     * @param anonymous1408 $LastName
     */
    public function __construct($FirstName, $LastName)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
    }

    /**
     * @return anonymous1407
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param anonymous1407 $FirstName
     * @return \FilippoToso\Travelport\GDSQueue\NameCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return anonymous1408
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param anonymous1408 $LastName
     * @return \FilippoToso\Travelport\GDSQueue\NameCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
