<?php

namespace FilippoToso\Travelport\Rail;

class CabinInfo
{

    /**
     * @var StringLength1to3 $Category
     */
    protected $Category = null;

    /**
     * @var StringLength1to5 $Number
     */
    protected $Number = null;

    /**
     * @var StringLength1 $Location
     */
    protected $Location = null;

    /**
     * @var StringLength1to12 $RelativeLocation
     */
    protected $RelativeLocation = null;

    /**
     * @var StringLength1to15 $DeckName
     */
    protected $DeckName = null;

    /**
     * @var StringLength1to10 $BedConfiguration
     */
    protected $BedConfiguration = null;

    /**
     * @var boolean $SmokingIndicator
     */
    protected $SmokingIndicator = null;

    /**
     * @param StringLength1to3 $Category
     * @param StringLength1to5 $Number
     * @param StringLength1 $Location
     * @param StringLength1to12 $RelativeLocation
     * @param StringLength1to15 $DeckName
     * @param StringLength1to10 $BedConfiguration
     * @param boolean $SmokingIndicator
     */
    public function __construct($Category = null, $Number = null, $Location = null, $RelativeLocation = null, $DeckName = null, $BedConfiguration = null, $SmokingIndicator = null)
    {
      $this->Category = $Category;
      $this->Number = $Number;
      $this->Location = $Location;
      $this->RelativeLocation = $RelativeLocation;
      $this->DeckName = $DeckName;
      $this->BedConfiguration = $BedConfiguration;
      $this->SmokingIndicator = $SmokingIndicator;
    }

    /**
     * @return StringLength1to3
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param StringLength1to3 $Category
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to5 $Number
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return StringLength1
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param StringLength1 $Location
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return StringLength1to12
     */
    public function getRelativeLocation()
    {
      return $this->RelativeLocation;
    }

    /**
     * @param StringLength1to12 $RelativeLocation
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setRelativeLocation($RelativeLocation)
    {
      $this->RelativeLocation = $RelativeLocation;
      return $this;
    }

    /**
     * @return StringLength1to15
     */
    public function getDeckName()
    {
      return $this->DeckName;
    }

    /**
     * @param StringLength1to15 $DeckName
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setDeckName($DeckName)
    {
      $this->DeckName = $DeckName;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBedConfiguration()
    {
      return $this->BedConfiguration;
    }

    /**
     * @param StringLength1to10 $BedConfiguration
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setBedConfiguration($BedConfiguration)
    {
      $this->BedConfiguration = $BedConfiguration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmokingIndicator()
    {
      return $this->SmokingIndicator;
    }

    /**
     * @param boolean $SmokingIndicator
     * @return \FilippoToso\Travelport\Rail\CabinInfo
     */
    public function setSmokingIndicator($SmokingIndicator)
    {
      $this->SmokingIndicator = $SmokingIndicator;
      return $this;
    }

}
