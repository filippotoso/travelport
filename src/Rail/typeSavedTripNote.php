<?php

namespace FilippoToso\Travelport\Rail;

class typeSavedTripNote
{

    /**
     * @var anonymous1417 $Text
     */
    protected $Text = null;

    /**
     * @param anonymous1417 $Text
     */
    public function __construct($Text)
    {
      $this->Text = $Text;
    }

    /**
     * @return anonymous1417
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anonymous1417 $Text
     * @return \FilippoToso\Travelport\Rail\typeSavedTripNote
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
