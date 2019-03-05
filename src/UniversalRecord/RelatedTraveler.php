<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RelatedTraveler
{

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var PersonName $PersonName
     */
    protected $PersonName = null;

    /**
     * @var CreditsUsed $CreditsUsed
     */
    protected $CreditsUsed = null;

    /**
     * @var string $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $Relation
     */
    protected $Relation = null;

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @param PersonName $PersonName
     * @param string $StatusCode
     * @param string $Relation
     */
    public function __construct($LoyaltyCard = null, $PersonName = null, $StatusCode = null, $Relation = null)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      $this->PersonName = $PersonName;
      $this->StatusCode = $StatusCode;
      $this->Relation = $Relation;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RelatedTraveler
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return PersonName
     */
    public function getPersonName()
    {
      return $this->PersonName;
    }

    /**
     * @param PersonName $PersonName
     * @return \FilippoToso\Travelport\UniversalRecord\RelatedTraveler
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return CreditsUsed
     */
    public function getCreditsUsed()
    {
      return $this->CreditsUsed;
    }

    /**
     * @param CreditsUsed $CreditsUsed
     * @return \FilippoToso\Travelport\UniversalRecord\RelatedTraveler
     */
    public function setCreditsUsed($CreditsUsed)
    {
      $this->CreditsUsed = $CreditsUsed;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return \FilippoToso\Travelport\UniversalRecord\RelatedTraveler
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelation()
    {
      return $this->Relation;
    }

    /**
     * @param string $Relation
     * @return \FilippoToso\Travelport\UniversalRecord\RelatedTraveler
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}
