<?php

namespace FilippoToso\Travelport\Vehicle;

class DirectPayment
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $Text
     */
    public function __construct($Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \FilippoToso\Travelport\Vehicle\DirectPayment
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
