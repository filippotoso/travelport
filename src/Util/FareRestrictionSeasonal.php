<?php

namespace FilippoToso\Travelport\Util;

class FareRestrictionSeasonal
{

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $VariationByTravelDates
     */
    protected $VariationByTravelDates = null;

    /**
     * @var string $SeasonalRange1Ind
     */
    protected $SeasonalRange1Ind = null;

    /**
     * @var string $SeasonalRange1StartDate
     */
    protected $SeasonalRange1StartDate = null;

    /**
     * @var string $SeasonalRange1EndDate
     */
    protected $SeasonalRange1EndDate = null;

    /**
     * @var string $SeasonalRange2Ind
     */
    protected $SeasonalRange2Ind = null;

    /**
     * @var string $SeasonalRange2StartDate
     */
    protected $SeasonalRange2StartDate = null;

    /**
     * @var string $SeasonalRange2EndDate
     */
    protected $SeasonalRange2EndDate = null;

    /**
     * @param string $Comment
     * @param string $VariationByTravelDates
     * @param string $SeasonalRange1Ind
     * @param string $SeasonalRange1StartDate
     * @param string $SeasonalRange1EndDate
     * @param string $SeasonalRange2Ind
     * @param string $SeasonalRange2StartDate
     * @param string $SeasonalRange2EndDate
     */
    public function __construct($Comment = null, $VariationByTravelDates = null, $SeasonalRange1Ind = null, $SeasonalRange1StartDate = null, $SeasonalRange1EndDate = null, $SeasonalRange2Ind = null, $SeasonalRange2StartDate = null, $SeasonalRange2EndDate = null)
    {
      $this->Comment = $Comment;
      $this->VariationByTravelDates = $VariationByTravelDates;
      $this->SeasonalRange1Ind = $SeasonalRange1Ind;
      $this->SeasonalRange1StartDate = $SeasonalRange1StartDate;
      $this->SeasonalRange1EndDate = $SeasonalRange1EndDate;
      $this->SeasonalRange2Ind = $SeasonalRange2Ind;
      $this->SeasonalRange2StartDate = $SeasonalRange2StartDate;
      $this->SeasonalRange2EndDate = $SeasonalRange2EndDate;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariationByTravelDates()
    {
      return $this->VariationByTravelDates;
    }

    /**
     * @param string $VariationByTravelDates
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setVariationByTravelDates($VariationByTravelDates)
    {
      $this->VariationByTravelDates = $VariationByTravelDates;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange1Ind()
    {
      return $this->SeasonalRange1Ind;
    }

    /**
     * @param string $SeasonalRange1Ind
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange1Ind($SeasonalRange1Ind)
    {
      $this->SeasonalRange1Ind = $SeasonalRange1Ind;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange1StartDate()
    {
      return $this->SeasonalRange1StartDate;
    }

    /**
     * @param string $SeasonalRange1StartDate
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange1StartDate($SeasonalRange1StartDate)
    {
      $this->SeasonalRange1StartDate = $SeasonalRange1StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange1EndDate()
    {
      return $this->SeasonalRange1EndDate;
    }

    /**
     * @param string $SeasonalRange1EndDate
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange1EndDate($SeasonalRange1EndDate)
    {
      $this->SeasonalRange1EndDate = $SeasonalRange1EndDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange2Ind()
    {
      return $this->SeasonalRange2Ind;
    }

    /**
     * @param string $SeasonalRange2Ind
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange2Ind($SeasonalRange2Ind)
    {
      $this->SeasonalRange2Ind = $SeasonalRange2Ind;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange2StartDate()
    {
      return $this->SeasonalRange2StartDate;
    }

    /**
     * @param string $SeasonalRange2StartDate
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange2StartDate($SeasonalRange2StartDate)
    {
      $this->SeasonalRange2StartDate = $SeasonalRange2StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeasonalRange2EndDate()
    {
      return $this->SeasonalRange2EndDate;
    }

    /**
     * @param string $SeasonalRange2EndDate
     * @return \FilippoToso\Travelport\Util\FareRestrictionSeasonal
     */
    public function setSeasonalRange2EndDate($SeasonalRange2EndDate)
    {
      $this->SeasonalRange2EndDate = $SeasonalRange2EndDate;
      return $this;
    }

}
