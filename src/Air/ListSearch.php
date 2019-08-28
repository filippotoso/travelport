<?php

namespace FilippoToso\Travelport\Air;

class ListSearch
{

    /**
     * @var PersonNameSearch $PersonNameSearch
     */
    protected $PersonNameSearch = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @var typeMaxResults $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @param PersonNameSearch $PersonNameSearch
     * @param LoyaltyCard $LoyaltyCard
     * @param typeStartFromResult $StartFromResult
     * @param typeMaxResults $MaxResults
     */
    public function __construct($PersonNameSearch = null, $LoyaltyCard = null, $StartFromResult = null, $MaxResults = null)
    {
      $this->PersonNameSearch = $PersonNameSearch;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->StartFromResult = $StartFromResult;
      $this->MaxResults = $MaxResults;
    }

    /**
     * @return PersonNameSearch
     */
    public function getPersonNameSearch()
    {
      return $this->PersonNameSearch;
    }

    /**
     * @param PersonNameSearch $PersonNameSearch
     * @return \FilippoToso\Travelport\Air\ListSearch
     */
    public function setPersonNameSearch($PersonNameSearch)
    {
      $this->PersonNameSearch = $PersonNameSearch;
      return $this;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\Air\ListSearch
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
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
     * @return \FilippoToso\Travelport\Air\ListSearch
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\ListSearch
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

}
