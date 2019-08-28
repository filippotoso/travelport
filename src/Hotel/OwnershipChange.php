<?php

namespace FilippoToso\Travelport\Hotel;

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
     * @return \FilippoToso\Travelport\Hotel\OwnershipChange
     */
    public function setOwningPCC($OwningPCC)
    {
      $this->OwningPCC = $OwningPCC;
      return $this;
    }

}
