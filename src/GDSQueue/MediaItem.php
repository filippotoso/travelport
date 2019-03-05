<?php

namespace FilippoToso\Travelport\GDSQueue;

class MediaItem
{

    /**
     * @var string $caption
     */
    protected $caption = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var anyURI $url
     */
    protected $url = null;

    /**
     * @var anyURI $icon
     */
    protected $icon = null;

    /**
     * @var typeResponseImageSize $sizeCode
     */
    protected $sizeCode = null;

    /**
     * @param string $caption
     * @param int $height
     * @param int $width
     * @param string $type
     * @param anyURI $url
     * @param anyURI $icon
     * @param typeResponseImageSize $sizeCode
     */
    public function __construct($caption = null, $height = null, $width = null, $type = null, $url = null, $icon = null, $sizeCode = null)
    {
      $this->caption = $caption;
      $this->height = $height;
      $this->width = $width;
      $this->type = $type;
      $this->url = $url;
      $this->icon = $icon;
      $this->sizeCode = $sizeCode;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
      return $this->caption;
    }

    /**
     * @param string $caption
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setCaption($caption)
    {
      $this->caption = $caption;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param anyURI $url
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getIcon()
    {
      return $this->icon;
    }

    /**
     * @param anyURI $icon
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setIcon($icon)
    {
      $this->icon = $icon;
      return $this;
    }

    /**
     * @return typeResponseImageSize
     */
    public function getSizeCode()
    {
      return $this->sizeCode;
    }

    /**
     * @param typeResponseImageSize $sizeCode
     * @return \FilippoToso\Travelport\GDSQueue\MediaItem
     */
    public function setSizeCode($sizeCode)
    {
      $this->sizeCode = $sizeCode;
      return $this;
    }

}
