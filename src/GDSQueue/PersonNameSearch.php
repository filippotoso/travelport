<?php

namespace FilippoToso\Travelport\GDSQueue;

class PersonNameSearch
{

    /**
     * @var StringLength1to64 $Last
     */
    protected $Last = null;

    /**
     * @param StringLength1to64 $Last
     */
    public function __construct($Last = null)
    {
      $this->Last = $Last;
    }

    /**
     * @return StringLength1to64
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param StringLength1to64 $Last
     * @return \FilippoToso\Travelport\GDSQueue\PersonNameSearch
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

}
