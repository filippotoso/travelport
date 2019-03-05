<?php

namespace FilippoToso\Travelport\Rail;

class UniversalAdd
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    protected $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    protected $GeneralRemark = null;

    /**
     * @var OSI $OSI
     */
    protected $OSI = null;

    /**
     * @var UnassociatedRemark $UnassociatedRemark
     */
    protected $UnassociatedRemark = null;

    /**
     * @var XMLRemark $XMLRemark
     */
    protected $XMLRemark = null;

    /**
     * @var Postscript $Postscript
     */
    protected $Postscript = null;

    /**
     * @var BookingTravelerInfo $BookingTravelerInfo
     */
    protected $BookingTravelerInfo = null;

    /**
     * @var ServiceFeeInfo $ServiceFeeInfo
     */
    protected $ServiceFeeInfo = null;

    /**
     * @var LinkedUniversalRecord $LinkedUniversalRecord
     */
    protected $LinkedUniversalRecord = null;

    /**
     * @var AgencyContactInfo $AgencyContactInfo
     */
    protected $AgencyContactInfo = null;

    /**
     * @var CustomerID $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var CommissionRemark $CommissionRemark
     */
    protected $CommissionRemark = null;

    /**
     * @var ConsolidatorRemark $ConsolidatorRemark
     */
    protected $ConsolidatorRemark = null;

    /**
     * @var InvoiceRemark $InvoiceRemark
     */
    protected $InvoiceRemark = null;

    /**
     * @var ActionStatus $ActionStatus
     */
    protected $ActionStatus = null;

    /**
     * @var ReviewBooking $ReviewBooking
     */
    protected $ReviewBooking = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param OSI $OSI
     * @param UnassociatedRemark $UnassociatedRemark
     * @param XMLRemark $XMLRemark
     * @param Postscript $Postscript
     * @param BookingTravelerInfo $BookingTravelerInfo
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @param AgencyContactInfo $AgencyContactInfo
     * @param CustomerID $CustomerID
     * @param CommissionRemark $CommissionRemark
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @param InvoiceRemark $InvoiceRemark
     * @param ActionStatus $ActionStatus
     * @param ReviewBooking $ReviewBooking
     * @param FormOfPayment $FormOfPayment
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $OSI = null, $UnassociatedRemark = null, $XMLRemark = null, $Postscript = null, $BookingTravelerInfo = null, $ServiceFeeInfo = null, $LinkedUniversalRecord = null, $AgencyContactInfo = null, $CustomerID = null, $CommissionRemark = null, $ConsolidatorRemark = null, $InvoiceRemark = null, $ActionStatus = null, $ReviewBooking = null, $FormOfPayment = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->OSI = $OSI;
      $this->UnassociatedRemark = $UnassociatedRemark;
      $this->XMLRemark = $XMLRemark;
      $this->Postscript = $Postscript;
      $this->BookingTravelerInfo = $BookingTravelerInfo;
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      $this->AgencyContactInfo = $AgencyContactInfo;
      $this->CustomerID = $CustomerID;
      $this->CommissionRemark = $CommissionRemark;
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      $this->InvoiceRemark = $InvoiceRemark;
      $this->ActionStatus = $ActionStatus;
      $this->ReviewBooking = $ReviewBooking;
      $this->FormOfPayment = $FormOfPayment;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return OSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param OSI $OSI
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return UnassociatedRemark
     */
    public function getUnassociatedRemark()
    {
      return $this->UnassociatedRemark;
    }

    /**
     * @param UnassociatedRemark $UnassociatedRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setUnassociatedRemark($UnassociatedRemark)
    {
      $this->UnassociatedRemark = $UnassociatedRemark;
      return $this;
    }

    /**
     * @return XMLRemark
     */
    public function getXMLRemark()
    {
      return $this->XMLRemark;
    }

    /**
     * @param XMLRemark $XMLRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setXMLRemark($XMLRemark)
    {
      $this->XMLRemark = $XMLRemark;
      return $this;
    }

    /**
     * @return Postscript
     */
    public function getPostscript()
    {
      return $this->Postscript;
    }

    /**
     * @param Postscript $Postscript
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setPostscript($Postscript)
    {
      $this->Postscript = $Postscript;
      return $this;
    }

    /**
     * @return BookingTravelerInfo
     */
    public function getBookingTravelerInfo()
    {
      return $this->BookingTravelerInfo;
    }

    /**
     * @param BookingTravelerInfo $BookingTravelerInfo
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setBookingTravelerInfo($BookingTravelerInfo)
    {
      $this->BookingTravelerInfo = $BookingTravelerInfo;
      return $this;
    }

    /**
     * @return ServiceFeeInfo
     */
    public function getServiceFeeInfo()
    {
      return $this->ServiceFeeInfo;
    }

    /**
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setServiceFeeInfo($ServiceFeeInfo)
    {
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      return $this;
    }

    /**
     * @return LinkedUniversalRecord
     */
    public function getLinkedUniversalRecord()
    {
      return $this->LinkedUniversalRecord;
    }

    /**
     * @param LinkedUniversalRecord $LinkedUniversalRecord
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setLinkedUniversalRecord($LinkedUniversalRecord)
    {
      $this->LinkedUniversalRecord = $LinkedUniversalRecord;
      return $this;
    }

    /**
     * @return AgencyContactInfo
     */
    public function getAgencyContactInfo()
    {
      return $this->AgencyContactInfo;
    }

    /**
     * @param AgencyContactInfo $AgencyContactInfo
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setAgencyContactInfo($AgencyContactInfo)
    {
      $this->AgencyContactInfo = $AgencyContactInfo;
      return $this;
    }

    /**
     * @return CustomerID
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param CustomerID $CustomerID
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return CommissionRemark
     */
    public function getCommissionRemark()
    {
      return $this->CommissionRemark;
    }

    /**
     * @param CommissionRemark $CommissionRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setCommissionRemark($CommissionRemark)
    {
      $this->CommissionRemark = $CommissionRemark;
      return $this;
    }

    /**
     * @return ConsolidatorRemark
     */
    public function getConsolidatorRemark()
    {
      return $this->ConsolidatorRemark;
    }

    /**
     * @param ConsolidatorRemark $ConsolidatorRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setConsolidatorRemark($ConsolidatorRemark)
    {
      $this->ConsolidatorRemark = $ConsolidatorRemark;
      return $this;
    }

    /**
     * @return InvoiceRemark
     */
    public function getInvoiceRemark()
    {
      return $this->InvoiceRemark;
    }

    /**
     * @param InvoiceRemark $InvoiceRemark
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setInvoiceRemark($InvoiceRemark)
    {
      $this->InvoiceRemark = $InvoiceRemark;
      return $this;
    }

    /**
     * @return ActionStatus
     */
    public function getActionStatus()
    {
      return $this->ActionStatus;
    }

    /**
     * @param ActionStatus $ActionStatus
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setActionStatus($ActionStatus)
    {
      $this->ActionStatus = $ActionStatus;
      return $this;
    }

    /**
     * @return ReviewBooking
     */
    public function getReviewBooking()
    {
      return $this->ReviewBooking;
    }

    /**
     * @param ReviewBooking $ReviewBooking
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setReviewBooking($ReviewBooking)
    {
      $this->ReviewBooking = $ReviewBooking;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Rail\UniversalAdd
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

}
