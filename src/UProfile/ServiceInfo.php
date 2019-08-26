<?php

namespace FilippoToso\Travelport\UProfile;

class ServiceInfo
{

    /**
     * @var string[] $Description
     */
    protected $Description = null;

    /**
     * @var MediaItem $MediaItem
     */
    protected $MediaItem = null;

    /**
     * @param string[] $Description
     * @param MediaItem $MediaItem
     */
    public function __construct(array $Description, $MediaItem)
    {
      $this->Description = $Description;
      $this->MediaItem = $MediaItem;
    }

    /**
     * @return string[]
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string[] $Description
     * @return \FilippoToso\Travelport\UProfile\ServiceInfo
     */
    public function setDescription(array $Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\ServiceInfo
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

}
