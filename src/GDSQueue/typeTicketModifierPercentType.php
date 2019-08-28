<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeTicketModifierPercentType
{

    /**
     * @var typePercentageWithDecimal $Percent
     */
    protected $Percent = null;

    /**
     * @param typePercentageWithDecimal $Percent
     */
    public function __construct($Percent = null)
    {
      $this->Percent = $Percent;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param typePercentageWithDecimal $Percent
     * @return \FilippoToso\Travelport\GDSQueue\typeTicketModifierPercentType
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

}
