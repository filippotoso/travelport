<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeSavedTripNote
{

    /**
     * @var anonymous1420 $Text
     */
    protected $Text = null;

    /**
     * @param anonymous1420 $Text
     */
    public function __construct($Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return anonymous1420
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous1420 $Text
     * @return \FilippoToso\Travelport\UniversalRecord\typeSavedTripNote
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
