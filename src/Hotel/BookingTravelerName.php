<?php

namespace FilippoToso\Travelport\Hotel;

class BookingTravelerName
{

    /**
     * @var anonymous85 $Prefix
     */
    protected $Prefix = null;

    /**
     * @var anonymous86 $First
     */
    protected $First = null;

    /**
     * @var anonymous87 $Middle
     */
    protected $Middle = null;

    /**
     * @var typeTravelerLastName $Last
     */
    protected $Last = null;

    /**
     * @var anonymous88 $Suffix
     */
    protected $Suffix = null;

    /**
     * @param anonymous85 $Prefix
     * @param anonymous86 $First
     * @param anonymous87 $Middle
     * @param typeTravelerLastName $Last
     * @param anonymous88 $Suffix
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
     * @return anonymous85
     */
    public function getPrefix()
    {
      return $this->Prefix;
    }

    /**
     * @param anonymous85 $Prefix
     * @return \FilippoToso\Travelport\Hotel\BookingTravelerName
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

    /**
     * @return anonymous86
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous86 $First
     * @return \FilippoToso\Travelport\Hotel\BookingTravelerName
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous87
     */
    public function getMiddle()
    {
      return $this->Middle;
    }

    /**
     * @param anonymous87 $Middle
     * @return \FilippoToso\Travelport\Hotel\BookingTravelerName
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
     * @return \FilippoToso\Travelport\Hotel\BookingTravelerName
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

    /**
     * @return anonymous88
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param anonymous88 $Suffix
     * @return \FilippoToso\Travelport\Hotel\BookingTravelerName
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
      return $this;
    }

}
