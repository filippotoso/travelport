<?php

namespace FilippoToso\Travelport\Terminal;

class OwnershipChange
{

    /**
     * @var typeRef $OwningPCC
     */
    protected $OwningPCC = null;

    /**
     * @param typeRef $OwningPCC
     */
    public function __construct($OwningPCC = null)
    {
      $this->OwningPCC = $OwningPCC;
    }

    /**
     * @return typeRef
     */
    public function getOwningPCC()
    {
      return $this->OwningPCC;
    }

    /**
     * @param typeRef $OwningPCC
     * @return \FilippoToso\Travelport\Terminal\OwnershipChange
     */
    public function setOwningPCC($OwningPCC)
    {
      $this->OwningPCC = $OwningPCC;
      return $this;
    }

}
