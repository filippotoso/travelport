<?php

namespace FilippoToso\Travelport\Util;

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
    public function __construct(array $Description = null, $MediaItem = null)
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
     * @return \FilippoToso\Travelport\Util\ServiceInfo
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
     * @return \FilippoToso\Travelport\Util\ServiceInfo
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

}
