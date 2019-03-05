<?php

namespace FilippoToso\Travelport\Terminal;

class NameOverride
{

    /**
     * @var anonymous409 $First
     */
    protected $First = null;

    /**
     * @var anonymous410 $Last
     */
    protected $Last = null;

    /**
     * @param anonymous409 $First
     * @param anonymous410 $Last
     */
    public function __construct($First = null, $Last = null)
    {
      $this->First = $First;
      $this->Last = $Last;
    }

    /**
     * @return anonymous409
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous409 $First
     * @return \FilippoToso\Travelport\Terminal\NameOverride
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous410
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param anonymous410 $Last
     * @return \FilippoToso\Travelport\Terminal\NameOverride
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

}
