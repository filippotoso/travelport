<?php

namespace FilippoToso\Travelport\Rail;

class RoutingRules
{

    /**
     * @var Routing[] $Routing
     */
    protected $Routing = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Routing[]
     */
    public function getRouting()
    {
      return $this->Routing;
    }

    /**
     * @param Routing[] $Routing
     * @return \FilippoToso\Travelport\Rail\RoutingRules
     */
    public function setRouting(array $Routing = null)
    {
      $this->Routing = $Routing;
      return $this;
    }

}
