<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelSearchError extends typeResultMessage
{

    /**
     * @var typeResultMessage $_
     */
    protected $_ = null;

    /**
     * @var typeThirdPartySupplier $RateSupplier
     */
    protected $RateSupplier = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous229 $Type
     * @param typeResultMessage $_
     * @param typeThirdPartySupplier $RateSupplier
     */
    public function __construct($_ = null, $Code = null, $Type = null, $RateSupplier = null)
    {
      parent::__construct($_, $Code, $Type);
      $this->_ = $_;
      $this->RateSupplier = $RateSupplier;
    }

    /**
     * @return typeResultMessage
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeResultMessage $_
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchError
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getRateSupplier()
    {
      return $this->RateSupplier;
    }

    /**
     * @param typeThirdPartySupplier $RateSupplier
     * @return \FilippoToso\Travelport\GDSQueue\HotelSearchError
     */
    public function setRateSupplier($RateSupplier)
    {
      $this->RateSupplier = $RateSupplier;
      return $this;
    }

}
