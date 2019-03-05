<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleWithMediaItems
{

    /**
     * @var Vehicle $Vehicle
     */
    protected $Vehicle = null;

    /**
     * @var MediaItem $MediaItem
     */
    protected $MediaItem = null;

    /**
     * @var typeResultMessage[] $MediaResultMessage
     */
    protected $MediaResultMessage = null;

    /**
     * @param Vehicle $Vehicle
     * @param MediaItem $MediaItem
     */
    public function __construct($Vehicle = null, $MediaItem = null)
    {
      $this->Vehicle = $Vehicle;
      $this->MediaItem = $MediaItem;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleWithMediaItems
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return MediaItem
     */
    public function getMediaItem()
    {
      return $this->MediaItem;
    }

    /**
     * @param MediaItem $MediaItem
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleWithMediaItems
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getMediaResultMessage()
    {
      return $this->MediaResultMessage;
    }

    /**
     * @param typeResultMessage[] $MediaResultMessage
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleWithMediaItems
     */
    public function setMediaResultMessage(array $MediaResultMessage = null)
    {
      $this->MediaResultMessage = $MediaResultMessage;
      return $this;
    }

}
