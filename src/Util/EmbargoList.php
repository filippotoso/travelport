<?php

namespace FilippoToso\Travelport\Util;

class EmbargoList
{

    /**
     * @var Embargo $Embargo
     */
    protected $Embargo = null;

    /**
     * @param Embargo $Embargo
     */
    public function __construct($Embargo = null)
    {
      $this->Embargo = $Embargo;
    }

    /**
     * @return Embargo
     */
    public function getEmbargo()
    {
      return $this->Embargo;
    }

    /**
     * @param Embargo $Embargo
     * @return \FilippoToso\Travelport\Util\EmbargoList
     */
    public function setEmbargo($Embargo)
    {
      $this->Embargo = $Embargo;
      return $this;
    }

}
