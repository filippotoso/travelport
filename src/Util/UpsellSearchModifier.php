<?php

namespace FilippoToso\Travelport\Util;

class UpsellSearchModifier
{

    /**
     * @var typeMaxResults $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     */
    public function __construct($MaxResults = null, $StartFromResult = null)
    {
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
    }

    /**
     * @return typeMaxResults
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param typeMaxResults $MaxResults
     * @return \FilippoToso\Travelport\Util\UpsellSearchModifier
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return typeStartFromResult
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param typeStartFromResult $StartFromResult
     * @return \FilippoToso\Travelport\Util\UpsellSearchModifier
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

}
