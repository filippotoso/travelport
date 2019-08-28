<?php

namespace FilippoToso\Travelport\Air;

class PermittedPointOfSales
{

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @param PointOfSale $PointOfSale
     */
    public function __construct($PointOfSale = null)
    {
      $this->PointOfSale = $PointOfSale;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Air\PermittedPointOfSales
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

}
