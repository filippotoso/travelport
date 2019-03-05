<?php

namespace FilippoToso\Travelport\Rail;

class PrintBlankFormItinerary
{

    /**
     * @var boolean $IncludeDescription
     */
    protected $IncludeDescription = null;

    /**
     * @var boolean $IncludeHeader
     */
    protected $IncludeHeader = null;

    /**
     * @param boolean $IncludeDescription
     * @param boolean $IncludeHeader
     */
    public function __construct($IncludeDescription = null, $IncludeHeader = null)
    {
      $this->IncludeDescription = $IncludeDescription;
      $this->IncludeHeader = $IncludeHeader;
    }

    /**
     * @return boolean
     */
    public function getIncludeDescription()
    {
      return $this->IncludeDescription;
    }

    /**
     * @param boolean $IncludeDescription
     * @return \FilippoToso\Travelport\Rail\PrintBlankFormItinerary
     */
    public function setIncludeDescription($IncludeDescription)
    {
      $this->IncludeDescription = $IncludeDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeHeader()
    {
      return $this->IncludeHeader;
    }

    /**
     * @param boolean $IncludeHeader
     * @return \FilippoToso\Travelport\Rail\PrintBlankFormItinerary
     */
    public function setIncludeHeader($IncludeHeader)
    {
      $this->IncludeHeader = $IncludeHeader;
      return $this;
    }

}
