<?php

namespace FilippoToso\Travelport\GDSQueue;

class NameOverride
{

    /**
     * @var anonymous421 $First
     */
    protected $First = null;

    /**
     * @var anonymous422 $Last
     */
    protected $Last = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @param anonymous421 $First
     * @param anonymous422 $Last
     * @param int $Age
     */
    public function __construct($First, $Last, $Age)
    {
      $this->First = $First;
      $this->Last = $Last;
      $this->Age = $Age;
    }

    /**
     * @return anonymous421
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous421 $First
     * @return \FilippoToso\Travelport\GDSQueue\NameOverride
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous422
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param anonymous422 $Last
     * @return \FilippoToso\Travelport\GDSQueue\NameOverride
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\GDSQueue\NameOverride
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
