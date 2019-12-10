<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeSavedTripNote
{

    /**
     * @var anonymous1422 $Text
     */
    protected $Text = null;

    /**
     * @param anonymous1422 $Text
     */
    public function __construct($Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return anonymous1422
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous1422 $Text
     * @return \FilippoToso\Travelport\UniversalRecord\typeSavedTripNote
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
