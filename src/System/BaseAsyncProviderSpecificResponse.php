<?php

namespace FilippoToso\Travelport\System;

class BaseAsyncProviderSpecificResponse
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var boolean $MoreResults
     */
    protected $MoreResults = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param boolean $MoreResults
     */
    public function __construct($ProviderCode = null, $MoreResults = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\System\BaseAsyncProviderSpecificResponse
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreResults()
    {
      return $this->MoreResults;
    }

    /**
     * @param boolean $MoreResults
     * @return \FilippoToso\Travelport\System\BaseAsyncProviderSpecificResponse
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
