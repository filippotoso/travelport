<?php

namespace FilippoToso\Travelport\Rail;

class typeAdaptedRoomGuestAllocation
{

    /**
     * @var typeGuestChildInformation[] $Child
     */
    protected $Child = null;

    /**
     * @var int $NumberOfAdults
     */
    protected $NumberOfAdults = null;

    /**
     * @param int $NumberOfAdults
     */
    public function __construct($NumberOfAdults = null)
    {
      $this->NumberOfAdults = $NumberOfAdults;
    }

    /**
     * @return typeGuestChildInformation[]
     */
    public function getChild()
    {
      return $this->Child;
    }

    /**
     * @param typeGuestChildInformation[] $Child
     * @return \FilippoToso\Travelport\Rail\typeAdaptedRoomGuestAllocation
     */
    public function setChild(array $Child = null)
    {
      $this->Child = $Child;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \FilippoToso\Travelport\Rail\typeAdaptedRoomGuestAllocation
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

}
