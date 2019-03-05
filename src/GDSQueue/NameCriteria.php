<?php

namespace FilippoToso\Travelport\GDSQueue;

class NameCriteria
{

    /**
     * @var anonymous1409 $FirstName
     */
    protected $FirstName = null;

    /**
     * @var anonymous1410 $LastName
     */
    protected $LastName = null;

    /**
     * @param anonymous1409 $FirstName
     * @param anonymous1410 $LastName
     */
    public function __construct($FirstName = null, $LastName = null)
    {
      $this->FirstName = $FirstName;
      $this->LastName = $LastName;
    }

    /**
     * @return anonymous1409
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param anonymous1409 $FirstName
     * @return \FilippoToso\Travelport\GDSQueue\NameCriteria
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return anonymous1410
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param anonymous1410 $LastName
     * @return \FilippoToso\Travelport\GDSQueue\NameCriteria
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}
