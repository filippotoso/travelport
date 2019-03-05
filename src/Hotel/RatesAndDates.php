<?php

namespace FilippoToso\Travelport\Hotel;

class RatesAndDates
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var typeDate $Start
     */
    protected $Start = null;

    /**
     * @var typeDate $End
     */
    protected $End = null;

    /**
     * @var typeMoney $Low
     */
    protected $Low = null;

    /**
     * @var typeMoney $High
     */
    protected $High = null;

    /**
     * @param string $Status
     * @param typeDate $Start
     * @param typeDate $End
     * @param typeMoney $Low
     * @param typeMoney $High
     */
    public function __construct($Status = null, $Start = null, $End = null, $Low = null, $High = null)
    {
      $this->Status = $Status;
      $this->Start = $Start;
      $this->End = $End;
      $this->Low = $Low;
      $this->High = $High;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\Hotel\RatesAndDates
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param typeDate $Start
     * @return \FilippoToso\Travelport\Hotel\RatesAndDates
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param typeDate $End
     * @return \FilippoToso\Travelport\Hotel\RatesAndDates
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getLow()
    {
      return $this->Low;
    }

    /**
     * @param typeMoney $Low
     * @return \FilippoToso\Travelport\Hotel\RatesAndDates
     */
    public function setLow($Low)
    {
      $this->Low = $Low;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getHigh()
    {
      return $this->High;
    }

    /**
     * @param typeMoney $High
     * @return \FilippoToso\Travelport\Hotel\RatesAndDates
     */
    public function setHigh($High)
    {
      $this->High = $High;
      return $this;
    }

}
