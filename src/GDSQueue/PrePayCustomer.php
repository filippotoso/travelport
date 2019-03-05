<?php

namespace FilippoToso\Travelport\GDSQueue;

class PrePayCustomer
{

    /**
     * @var PersonName $PersonName
     */
    protected $PersonName = null;

    /**
     * @var Email $Email
     */
    protected $Email = null;

    /**
     * @var typeStructuredAddress[] $Address
     */
    protected $Address = null;

    /**
     * @var RelatedTraveler $RelatedTraveler
     */
    protected $RelatedTraveler = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @param PersonName $PersonName
     * @param Email $Email
     * @param RelatedTraveler $RelatedTraveler
     * @param LoyaltyCard $LoyaltyCard
     */
    public function __construct($PersonName = null, $Email = null, $RelatedTraveler = null, $LoyaltyCard = null)
    {
      $this->PersonName = $PersonName;
      $this->Email = $Email;
      $this->RelatedTraveler = $RelatedTraveler;
      $this->LoyaltyCard = $LoyaltyCard;
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
     * @return \FilippoToso\Travelport\GDSQueue\PrePayCustomer
     */
    public function setPersonName($PersonName)
    {
      $this->PersonName = $PersonName;
      return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Email $Email
     * @return \FilippoToso\Travelport\GDSQueue\PrePayCustomer
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return typeStructuredAddress[]
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress[] $Address
     * @return \FilippoToso\Travelport\GDSQueue\PrePayCustomer
     */
    public function setAddress(array $Address = null)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return RelatedTraveler
     */
    public function getRelatedTraveler()
    {
      return $this->RelatedTraveler;
    }

    /**
     * @param RelatedTraveler $RelatedTraveler
     * @return \FilippoToso\Travelport\GDSQueue\PrePayCustomer
     */
    public function setRelatedTraveler($RelatedTraveler)
    {
      $this->RelatedTraveler = $RelatedTraveler;
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
     * @return \FilippoToso\Travelport\GDSQueue\PrePayCustomer
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

}
