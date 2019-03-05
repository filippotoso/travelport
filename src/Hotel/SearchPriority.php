<?php

namespace FilippoToso\Travelport\Hotel;

class SearchPriority
{

    /**
     * @var Criteria[] $Criteria
     */
    protected $Criteria = null;

    /**
     * @param Criteria[] $Criteria
     */
    public function __construct(array $Criteria = null)
    {
      $this->Criteria = $Criteria;
    }

    /**
     * @return Criteria[]
     */
    public function getCriteria()
    {
      return $this->Criteria;
    }

    /**
     * @param Criteria[] $Criteria
     * @return \FilippoToso\Travelport\Hotel\SearchPriority
     */
    public function setCriteria(array $Criteria)
    {
      $this->Criteria = $Criteria;
      return $this;
    }

}
