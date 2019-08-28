<?php

namespace FilippoToso\Travelport\UProfile;

class NameOverride
{

    /**
     * @var anonymous412 $First
     */
    protected $First = null;

    /**
     * @var anonymous413 $Last
     */
    protected $Last = null;

    /**
     * @param anonymous412 $First
     * @param anonymous413 $Last
     */
    public function __construct($First = null, $Last = null)
    {
      $this->First = $First;
      $this->Last = $Last;
    }

    /**
     * @return anonymous412
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous412 $First
     * @return \FilippoToso\Travelport\UProfile\NameOverride
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous413
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param anonymous413 $Last
     * @return \FilippoToso\Travelport\UProfile\NameOverride
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

}
