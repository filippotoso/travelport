<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct(array $Text = null, $Name = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailItem
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelDetailItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
