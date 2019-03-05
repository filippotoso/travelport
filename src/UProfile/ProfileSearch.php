<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearch
{

    /**
     * @var typeWildcardMax50 $ContractNumber
     */
    protected $ContractNumber = null;

    /**
     * @var StringLength1to128 $TravelDocumentNumber
     */
    protected $TravelDocumentNumber = null;

    /**
     * @var typeSearchAccountingReference $AccountingReference
     */
    protected $AccountingReference = null;

    /**
     * @var typeSearchContact $AlternateContact
     */
    protected $AlternateContact = null;

    /**
     * @var typeSearchLoyaltyProgram $LoyaltyProgram
     */
    protected $LoyaltyProgram = null;

    /**
     * @var typeSearchPaymentDetails $PaymentDetails
     */
    protected $PaymentDetails = null;

    /**
     * @var FieldDataSearch $FieldDataSearch
     */
    protected $FieldDataSearch = null;

    /**
     * @param FieldDataSearch $FieldDataSearch
     */
    public function __construct($FieldDataSearch = null)
    {
      $this->FieldDataSearch = $FieldDataSearch;
    }

    /**
     * @return typeWildcardMax50
     */
    public function getContractNumber()
    {
      return $this->ContractNumber;
    }

    /**
     * @param typeWildcardMax50 $ContractNumber
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setContractNumber($ContractNumber)
    {
      $this->ContractNumber = $ContractNumber;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getTravelDocumentNumber()
    {
      return $this->TravelDocumentNumber;
    }

    /**
     * @param StringLength1to128 $TravelDocumentNumber
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setTravelDocumentNumber($TravelDocumentNumber)
    {
      $this->TravelDocumentNumber = $TravelDocumentNumber;
      return $this;
    }

    /**
     * @return typeSearchAccountingReference
     */
    public function getAccountingReference()
    {
      return $this->AccountingReference;
    }

    /**
     * @param typeSearchAccountingReference $AccountingReference
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setAccountingReference($AccountingReference)
    {
      $this->AccountingReference = $AccountingReference;
      return $this;
    }

    /**
     * @return typeSearchContact
     */
    public function getAlternateContact()
    {
      return $this->AlternateContact;
    }

    /**
     * @param typeSearchContact $AlternateContact
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setAlternateContact($AlternateContact)
    {
      $this->AlternateContact = $AlternateContact;
      return $this;
    }

    /**
     * @return typeSearchLoyaltyProgram
     */
    public function getLoyaltyProgram()
    {
      return $this->LoyaltyProgram;
    }

    /**
     * @param typeSearchLoyaltyProgram $LoyaltyProgram
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setLoyaltyProgram($LoyaltyProgram)
    {
      $this->LoyaltyProgram = $LoyaltyProgram;
      return $this;
    }

    /**
     * @return typeSearchPaymentDetails
     */
    public function getPaymentDetails()
    {
      return $this->PaymentDetails;
    }

    /**
     * @param typeSearchPaymentDetails $PaymentDetails
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setPaymentDetails($PaymentDetails)
    {
      $this->PaymentDetails = $PaymentDetails;
      return $this;
    }

    /**
     * @return FieldDataSearch
     */
    public function getFieldDataSearch()
    {
      return $this->FieldDataSearch;
    }

    /**
     * @param FieldDataSearch $FieldDataSearch
     * @return \FilippoToso\Travelport\UProfile\ProfileSearch
     */
    public function setFieldDataSearch($FieldDataSearch)
    {
      $this->FieldDataSearch = $FieldDataSearch;
      return $this;
    }

}
