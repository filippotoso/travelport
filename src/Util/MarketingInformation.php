<?php

namespace FilippoToso\Travelport\Util;

class MarketingInformation
{

    /**
     * @var anyType[] $Text
     */
    protected $Text = null;

    /**
     * @param anyType[] $Text
     */
    public function __construct(array $Text = null)
    {
      $this->Text = $Text;
    }

    /**
     * @return anyType[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param anyType[] $Text
     * @return \FilippoToso\Travelport\Util\MarketingInformation
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
