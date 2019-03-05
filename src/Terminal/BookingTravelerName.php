<?php

namespace FilippoToso\Travelport\Terminal;

class BookingTravelerName
{

    /**
     * @var anonymous77 $Prefix
     */
    protected $Prefix = null;

    /**
     * @var anonymous78 $First
     */
    protected $First = null;

    /**
     * @var anonymous79 $Middle
     */
    protected $Middle = null;

    /**
     * @var typeTravelerLastName $Last
     */
    protected $Last = null;

    /**
     * @var anonymous80 $Suffix
     */
    protected $Suffix = null;

    /**
     * @param anonymous77 $Prefix
     * @param anonymous78 $First
     * @param anonymous79 $Middle
     * @param typeTravelerLastName $Last
     * @param anonymous80 $Suffix
     */
    public function __construct($Prefix = null, $First = null, $Middle = null, $Last = null, $Suffix = null)
    {
      $this->Prefix = $Prefix;
      $this->First = $First;
      $this->Middle = $Middle;
      $this->Last = $Last;
      $this->Suffix = $Suffix;
    }

    /**
     * @return anonymous77
     */
    public function getPrefix()
    {
      return $this->Prefix;
    }

    /**
     * @param anonymous77 $Prefix
     * @return \FilippoToso\Travelport\Terminal\BookingTravelerName
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

    /**
     * @return anonymous78
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous78 $First
     * @return \FilippoToso\Travelport\Terminal\BookingTravelerName
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous79
     */
    public function getMiddle()
    {
      return $this->Middle;
    }

    /**
     * @param anonymous79 $Middle
     * @return \FilippoToso\Travelport\Terminal\BookingTravelerName
     */
    public function setMiddle($Middle)
    {
      $this->Middle = $Middle;
      return $this;
    }

    /**
     * @return typeTravelerLastName
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param typeTravelerLastName $Last
     * @return \FilippoToso\Travelport\Terminal\BookingTravelerName
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

    /**
     * @return anonymous80
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param anonymous80 $Suffix
     * @return \FilippoToso\Travelport\Terminal\BookingTravelerName
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
      return $this;
    }

}
