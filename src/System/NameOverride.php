<?php

namespace FilippoToso\Travelport\System;

class NameOverride
{

    /**
     * @var anonymous410 $First
     */
    protected $First = null;

    /**
     * @var anonymous411 $Last
     */
    protected $Last = null;

    /**
     * @param anonymous410 $First
     * @param anonymous411 $Last
     */
    public function __construct($First = null, $Last = null)
    {
      $this->First = $First;
      $this->Last = $Last;
    }

    /**
     * @return anonymous410
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous410 $First
     * @return \FilippoToso\Travelport\System\NameOverride
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous411
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param anonymous411 $Last
     * @return \FilippoToso\Travelport\System\NameOverride
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

}
