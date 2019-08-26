<?php

namespace FilippoToso\Travelport\Terminal;

class InvoiceData
{

    /**
     * @var BookingTravelerInformation $BookingTravelerInformation
     */
    protected $BookingTravelerInformation = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @param BookingTravelerInformation $BookingTravelerInformation
     * @param typeRef $Key
     * @param string $InvoiceNumber
     * @param \DateTime $IssueDate
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($BookingTravelerInformation, $Key, $InvoiceNumber, \DateTime $IssueDate, $ProviderReservationInfoRef)
    {
      $this->BookingTravelerInformation = $BookingTravelerInformation;
      $this->Key = $Key;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
    }

    /**
     * @return BookingTravelerInformation
     */
    public function getBookingTravelerInformation()
    {
      return $this->BookingTravelerInformation;
    }

    /**
     * @param BookingTravelerInformation $BookingTravelerInformation
     * @return \FilippoToso\Travelport\Terminal\InvoiceData
     */
    public function setBookingTravelerInformation($BookingTravelerInformation)
    {
      $this->BookingTravelerInformation = $BookingTravelerInformation;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Terminal\InvoiceData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \FilippoToso\Travelport\Terminal\InvoiceData
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \FilippoToso\Travelport\Terminal\InvoiceData
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Terminal\InvoiceData
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
