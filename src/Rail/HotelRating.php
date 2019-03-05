<?php

namespace FilippoToso\Travelport\Rail;

class HotelRating
{

    /**
     * @var typeSimpleHotelRating[] $Rating
     */
    protected $Rating = null;

    /**
     * @var RatingRange $RatingRange
     */
    protected $RatingRange = null;

    /**
     * @var string $RatingProvider
     */
    protected $RatingProvider = null;

    /**
     * @param typeSimpleHotelRating[] $Rating
     * @param RatingRange $RatingRange
     * @param string $RatingProvider
     */
    public function __construct(array $Rating = null, $RatingRange = null, $RatingProvider = null)
    {
      $this->Rating = $Rating;
      $this->RatingRange = $RatingRange;
      $this->RatingProvider = $RatingProvider;
    }

    /**
     * @return typeSimpleHotelRating[]
     */
    public function getRating()
    {
      return $this->Rating;
    }

    /**
     * @param typeSimpleHotelRating[] $Rating
     * @return \FilippoToso\Travelport\Rail\HotelRating
     */
    public function setRating(array $Rating)
    {
      $this->Rating = $Rating;
      return $this;
    }

    /**
     * @return RatingRange
     */
    public function getRatingRange()
    {
      return $this->RatingRange;
    }

    /**
     * @param RatingRange $RatingRange
     * @return \FilippoToso\Travelport\Rail\HotelRating
     */
    public function setRatingRange($RatingRange)
    {
      $this->RatingRange = $RatingRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatingProvider()
    {
      return $this->RatingProvider;
    }

    /**
     * @param string $RatingProvider
     * @return \FilippoToso\Travelport\Rail\HotelRating
     */
    public function setRatingProvider($RatingProvider)
    {
      $this->RatingProvider = $RatingProvider;
      return $this;
    }

}
