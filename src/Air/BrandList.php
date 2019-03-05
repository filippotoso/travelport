<?php

namespace FilippoToso\Travelport\Air;

class BrandList
{

    /**
     * @var Brand $Brand
     */
    protected $Brand = null;

    /**
     * @param Brand $Brand
     */
    public function __construct($Brand = null)
    {
      $this->Brand = $Brand;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param Brand $Brand
     * @return \FilippoToso\Travelport\Air\BrandList
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

}
