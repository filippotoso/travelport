<?php

namespace FilippoToso\Travelport\UniversalRecord;

class MarketingMessage
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \FilippoToso\Travelport\UniversalRecord\MarketingMessage
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

}
