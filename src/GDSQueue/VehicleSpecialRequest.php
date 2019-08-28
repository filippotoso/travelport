<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleSpecialRequest
{

    /**
     * @var typeGeneralText $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeGeneralText $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typeGeneralText
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeGeneralText $_
     * @return \FilippoToso\Travelport\GDSQueue\VehicleSpecialRequest
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\VehicleSpecialRequest
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
