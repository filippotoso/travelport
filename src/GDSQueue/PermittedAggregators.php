<?php

namespace FilippoToso\Travelport\GDSQueue;

class PermittedAggregators
{

    /**
     * @var Aggregator[] $Aggregator
     */
    protected $Aggregator = null;

    /**
     * @param Aggregator[] $Aggregator
     */
    public function __construct(array $Aggregator = null)
    {
      $this->Aggregator = $Aggregator;
    }

    /**
     * @return Aggregator[]
     */
    public function getAggregator()
    {
      return $this->Aggregator;
    }

    /**
     * @param Aggregator[] $Aggregator
     * @return \FilippoToso\Travelport\GDSQueue\PermittedAggregators
     */
    public function setAggregator(array $Aggregator)
    {
      $this->Aggregator = $Aggregator;
      return $this;
    }

}
