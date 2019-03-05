<?php

namespace FilippoToso\Travelport\GDSQueue;

class WaiverCode
{

    /**
     * @var typeTourCode $TourCode
     */
    protected $TourCode = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    protected $TicketDesignator = null;

    /**
     * @var anonymous794 $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @param typeTourCode $TourCode
     * @param typeTicketDesignator $TicketDesignator
     * @param anonymous794 $Endorsement
     */
    public function __construct($TourCode = null, $TicketDesignator = null, $Endorsement = null)
    {
      $this->TourCode = $TourCode;
      $this->TicketDesignator = $TicketDesignator;
      $this->Endorsement = $Endorsement;
    }

    /**
     * @return typeTourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param typeTourCode $TourCode
     * @return \FilippoToso\Travelport\GDSQueue\WaiverCode
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\GDSQueue\WaiverCode
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

    /**
     * @return anonymous794
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param anonymous794 $Endorsement
     * @return \FilippoToso\Travelport\GDSQueue\WaiverCode
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

}
