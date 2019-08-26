<?php

namespace FilippoToso\Travelport\GDSQueue;

class AlternateRouteList
{

    /**
     * @var AlternateRoute $AlternateRoute
     */
    protected $AlternateRoute = null;

    /**
     * @param AlternateRoute $AlternateRoute
     */
    public function __construct($AlternateRoute)
    {
      $this->AlternateRoute = $AlternateRoute;
    }

    /**
     * @return AlternateRoute
     */
    public function getAlternateRoute()
    {
      return $this->AlternateRoute;
    }

    /**
     * @param AlternateRoute $AlternateRoute
     * @return \FilippoToso\Travelport\GDSQueue\AlternateRouteList
     */
    public function setAlternateRoute($AlternateRoute)
    {
      $this->AlternateRoute = $AlternateRoute;
      return $this;
    }

}
