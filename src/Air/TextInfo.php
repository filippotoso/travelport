<?php

namespace FilippoToso\Travelport\Air;

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
    public function __construct($Title)
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
     * @return \FilippoToso\Travelport\Air\TextInfo
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
     * @return \FilippoToso\Travelport\Air\TextInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
