<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TextInfo
{

    /**
     * @var typeGeneralText[] $Text
     */
    protected $Text = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @param string $Title
     */
    public function __construct($Title = null)
    {
      $this->Title = $Title;
    }

    /**
     * @return typeGeneralText[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeGeneralText[] $Text
     * @return \FilippoToso\Travelport\UniversalRecord\TextInfo
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \FilippoToso\Travelport\UniversalRecord\TextInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
