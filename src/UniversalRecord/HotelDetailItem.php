<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelDetailItem
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string[] $Text
     * @param string $Name
     */
    public function __construct(array $Text, $Name)
    {
      $this->Text = $Text;
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelDetailItem
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\UniversalRecord\HotelDetailItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
