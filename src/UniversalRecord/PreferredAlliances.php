<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PreferredAlliances
{

    /**
     * @var Alliance $Alliance
     */
    protected $Alliance = null;

    /**
     * @param Alliance $Alliance
     */
    public function __construct($Alliance = null)
    {
      $this->Alliance = $Alliance;
    }

    /**
     * @return Alliance
     */
    public function getAlliance()
    {
      return $this->Alliance;
    }

    /**
     * @param Alliance $Alliance
     * @return \FilippoToso\Travelport\UniversalRecord\PreferredAlliances
     */
    public function setAlliance($Alliance)
    {
      $this->Alliance = $Alliance;
      return $this;
    }

}
