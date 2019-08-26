<?php

namespace FilippoToso\Travelport\Vehicle;

class typeRateDescription
{

    /**
     * @var Text[] $Text
     */
    protected $Text = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param Text[] $Text
     * @param string $Name
     */
    public function __construct(array $Text, $Name)
    {
      $this->Text = $Text;
      $this->Name = $Name;
    }

    /**
     * @return Text[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param Text[] $Text
     * @return \FilippoToso\Travelport\Vehicle\typeRateDescription
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
     * @return \FilippoToso\Travelport\Vehicle\typeRateDescription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
