<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DocumentOptions
{

    /**
     * @var PassengerReceiptOverride $PassengerReceiptOverride
     */
    protected $PassengerReceiptOverride = null;

    /**
     * @var typeOverrideOption[] $OverrideOption
     */
    protected $OverrideOption = null;

    /**
     * @var boolean $SuppressItineraryRemarks
     */
    protected $SuppressItineraryRemarks = null;

    /**
     * @var boolean $GenerateItinNumbers
     */
    protected $GenerateItinNumbers = null;

    /**
     * @param PassengerReceiptOverride $PassengerReceiptOverride
     * @param boolean $SuppressItineraryRemarks
     * @param boolean $GenerateItinNumbers
     */
    public function __construct($PassengerReceiptOverride = null, $SuppressItineraryRemarks = null, $GenerateItinNumbers = null)
    {
      $this->PassengerReceiptOverride = $PassengerReceiptOverride;
      $this->SuppressItineraryRemarks = $SuppressItineraryRemarks;
      $this->GenerateItinNumbers = $GenerateItinNumbers;
    }

    /**
     * @return PassengerReceiptOverride
     */
    public function getPassengerReceiptOverride()
    {
      return $this->PassengerReceiptOverride;
    }

    /**
     * @param PassengerReceiptOverride $PassengerReceiptOverride
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentOptions
     */
    public function setPassengerReceiptOverride($PassengerReceiptOverride)
    {
      $this->PassengerReceiptOverride = $PassengerReceiptOverride;
      return $this;
    }

    /**
     * @return typeOverrideOption[]
     */
    public function getOverrideOption()
    {
      return $this->OverrideOption;
    }

    /**
     * @param typeOverrideOption[] $OverrideOption
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentOptions
     */
    public function setOverrideOption(array $OverrideOption = null)
    {
      $this->OverrideOption = $OverrideOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressItineraryRemarks()
    {
      return $this->SuppressItineraryRemarks;
    }

    /**
     * @param boolean $SuppressItineraryRemarks
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentOptions
     */
    public function setSuppressItineraryRemarks($SuppressItineraryRemarks)
    {
      $this->SuppressItineraryRemarks = $SuppressItineraryRemarks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateItinNumbers()
    {
      return $this->GenerateItinNumbers;
    }

    /**
     * @param boolean $GenerateItinNumbers
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentOptions
     */
    public function setGenerateItinNumbers($GenerateItinNumbers)
    {
      $this->GenerateItinNumbers = $GenerateItinNumbers;
      return $this;
    }

}
