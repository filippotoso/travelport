<?php

namespace FilippoToso\Travelport\Rail;

class NumberOfAdults
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var int $ExtraAdults
     */
    protected $ExtraAdults = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @param string $_
     * @param int $ExtraAdults
     * @param typeMoney $Amount
     * @param string $Content
     */
    public function __construct($_ = null, $ExtraAdults = null, $Amount = null, $Content = null)
    {
      $this->_ = $_;
      $this->ExtraAdults = $ExtraAdults;
      $this->Amount = $Amount;
      $this->Content = $Content;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\NumberOfAdults
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtraAdults()
    {
      return $this->ExtraAdults;
    }

    /**
     * @param int $ExtraAdults
     * @return \FilippoToso\Travelport\Rail\NumberOfAdults
     */
    public function setExtraAdults($ExtraAdults)
    {
      $this->ExtraAdults = $ExtraAdults;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Rail\NumberOfAdults
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \FilippoToso\Travelport\Rail\NumberOfAdults
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
