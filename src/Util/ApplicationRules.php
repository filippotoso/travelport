<?php

namespace FilippoToso\Travelport\Util;

class ApplicationRules
{

    /**
     * @var boolean $RequiredForAllTravelers
     */
    protected $RequiredForAllTravelers = null;

    /**
     * @var boolean $RequiredForAllSegments
     */
    protected $RequiredForAllSegments = null;

    /**
     * @var boolean $RequiredForAllSegmentsInOD
     */
    protected $RequiredForAllSegmentsInOD = null;

    /**
     * @var boolean $UnselectedOptionRequired
     */
    protected $UnselectedOptionRequired = null;

    /**
     * @var boolean $SecondaryOptionCodeRequired
     */
    protected $SecondaryOptionCodeRequired = null;

    /**
     * @param boolean $RequiredForAllTravelers
     * @param boolean $RequiredForAllSegments
     * @param boolean $RequiredForAllSegmentsInOD
     * @param boolean $UnselectedOptionRequired
     * @param boolean $SecondaryOptionCodeRequired
     */
    public function __construct($RequiredForAllTravelers = null, $RequiredForAllSegments = null, $RequiredForAllSegmentsInOD = null, $UnselectedOptionRequired = null, $SecondaryOptionCodeRequired = null)
    {
      $this->RequiredForAllTravelers = $RequiredForAllTravelers;
      $this->RequiredForAllSegments = $RequiredForAllSegments;
      $this->RequiredForAllSegmentsInOD = $RequiredForAllSegmentsInOD;
      $this->UnselectedOptionRequired = $UnselectedOptionRequired;
      $this->SecondaryOptionCodeRequired = $SecondaryOptionCodeRequired;
    }

    /**
     * @return boolean
     */
    public function getRequiredForAllTravelers()
    {
      return $this->RequiredForAllTravelers;
    }

    /**
     * @param boolean $RequiredForAllTravelers
     * @return \FilippoToso\Travelport\Util\ApplicationRules
     */
    public function setRequiredForAllTravelers($RequiredForAllTravelers)
    {
      $this->RequiredForAllTravelers = $RequiredForAllTravelers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredForAllSegments()
    {
      return $this->RequiredForAllSegments;
    }

    /**
     * @param boolean $RequiredForAllSegments
     * @return \FilippoToso\Travelport\Util\ApplicationRules
     */
    public function setRequiredForAllSegments($RequiredForAllSegments)
    {
      $this->RequiredForAllSegments = $RequiredForAllSegments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiredForAllSegmentsInOD()
    {
      return $this->RequiredForAllSegmentsInOD;
    }

    /**
     * @param boolean $RequiredForAllSegmentsInOD
     * @return \FilippoToso\Travelport\Util\ApplicationRules
     */
    public function setRequiredForAllSegmentsInOD($RequiredForAllSegmentsInOD)
    {
      $this->RequiredForAllSegmentsInOD = $RequiredForAllSegmentsInOD;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnselectedOptionRequired()
    {
      return $this->UnselectedOptionRequired;
    }

    /**
     * @param boolean $UnselectedOptionRequired
     * @return \FilippoToso\Travelport\Util\ApplicationRules
     */
    public function setUnselectedOptionRequired($UnselectedOptionRequired)
    {
      $this->UnselectedOptionRequired = $UnselectedOptionRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecondaryOptionCodeRequired()
    {
      return $this->SecondaryOptionCodeRequired;
    }

    /**
     * @param boolean $SecondaryOptionCodeRequired
     * @return \FilippoToso\Travelport\Util\ApplicationRules
     */
    public function setSecondaryOptionCodeRequired($SecondaryOptionCodeRequired)
    {
      $this->SecondaryOptionCodeRequired = $SecondaryOptionCodeRequired;
      return $this;
    }

}
