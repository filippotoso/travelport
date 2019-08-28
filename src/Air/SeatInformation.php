<?php

namespace FilippoToso\Travelport\Air;

class SeatInformation
{

    /**
     * @var string $Power
     */
    protected $Power = null;

    /**
     * @var string $Video
     */
    protected $Video = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var Rating $Rating
     */
    protected $Rating = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param string $Power
     * @param string $Video
     * @param string $Type
     * @param string $Description
     * @param Rating $Rating
     * @param typeRef $Key
     */
    public function __construct($Power = null, $Video = null, $Type = null, $Description = null, $Rating = null, $Key = null)
    {
      $this->Power = $Power;
      $this->Video = $Video;
      $this->Type = $Type;
      $this->Description = $Description;
      $this->Rating = $Rating;
      $this->Key = $Key;
    }

    /**
     * @return string
     */
    public function getPower()
    {
      return $this->Power;
    }

    /**
     * @param string $Power
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setPower($Power)
    {
      $this->Power = $Power;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideo()
    {
      return $this->Video;
    }

    /**
     * @param string $Video
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setVideo($Video)
    {
      $this->Video = $Video;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return Rating
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param Rating $Rating
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setRating($Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\SeatInformation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
