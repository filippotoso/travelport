<?php

namespace FilippoToso\Travelport\Air;

class AlternateRoute
{

    /**
     * @var Leg $Leg
     */
    protected $Leg = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param Leg $Leg
     * @param typeRef $Key
     */
    public function __construct($Leg = null, $Key = null)
    {
      $this->Leg = $Leg;
      $this->Key = $Key;
    }

    /**
     * @return Leg
     */
    public function getLeg()
    {
      return $this->Leg;
    }

    /**
     * @param Leg $Leg
     * @return \FilippoToso\Travelport\Air\AlternateRoute
     */
    public function setLeg($Leg)
    {
      $this->Leg = $Leg;
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
     * @return \FilippoToso\Travelport\Air\AlternateRoute
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
