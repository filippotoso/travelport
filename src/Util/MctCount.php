<?php

namespace FilippoToso\Travelport\Util;

class MctCount
{

    /**
     * @var typeMctConnection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param typeMctConnection $Connection
     * @param typeCarrier $Carrier
     * @param int $Count
     */
    public function __construct($Connection = null, $Carrier = null, $Count = null)
    {
      $this->Connection = $Connection;
      $this->Carrier = $Carrier;
      $this->Count = $Count;
    }

    /**
     * @return typeMctConnection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param typeMctConnection $Connection
     * @return \FilippoToso\Travelport\Util\MctCount
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\MctCount
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FilippoToso\Travelport\Util\MctCount
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
