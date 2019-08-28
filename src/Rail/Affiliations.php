<?php

namespace FilippoToso\Travelport\Rail;

class Affiliations
{

    /**
     * @var TravelArranger $TravelArranger
     */
    protected $TravelArranger = null;

    /**
     * @param TravelArranger $TravelArranger
     */
    public function __construct($TravelArranger = null)
    {
      $this->TravelArranger = $TravelArranger;
    }

    /**
     * @return TravelArranger
     */
    public function getTravelArranger()
    {
      return $this->TravelArranger;
    }

    /**
     * @param TravelArranger $TravelArranger
     * @return \FilippoToso\Travelport\Rail\Affiliations
     */
    public function setTravelArranger($TravelArranger)
    {
      $this->TravelArranger = $TravelArranger;
      return $this;
    }

}
