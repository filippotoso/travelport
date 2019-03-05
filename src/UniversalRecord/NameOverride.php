<?php

namespace FilippoToso\Travelport\UniversalRecord;

class NameOverride
{

    /**
     * @var anonymous424 $First
     */
    protected $First = null;

    /**
     * @var anonymous425 $Last
     */
    protected $Last = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @param anonymous424 $First
     * @param anonymous425 $Last
     * @param int $Age
     */
    public function __construct($First = null, $Last = null, $Age = null)
    {
      $this->First = $First;
      $this->Last = $Last;
      $this->Age = $Age;
    }

    /**
     * @return anonymous424
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous424 $First
     * @return \FilippoToso\Travelport\UniversalRecord\NameOverride
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous425
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param anonymous425 $Last
     * @return \FilippoToso\Travelport\UniversalRecord\NameOverride
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
     * @return \FilippoToso\Travelport\UniversalRecord\NameOverride
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
