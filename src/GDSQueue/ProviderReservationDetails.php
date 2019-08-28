<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProviderReservationDetails
{

    /**
     * @var boolean $ProviderReservationDetail
     */
    protected $ProviderReservationDetail = null;

    /**
     * @var boolean $CustomCheck
     */
    protected $CustomCheck = null;

    /**
     * @var boolean $ProviderProfile
     */
    protected $ProviderProfile = null;

    /**
     * @var boolean $DivideDetails
     */
    protected $DivideDetails = null;

    /**
     * @var boolean $EnhancedItinModifiers
     */
    protected $EnhancedItinModifiers = null;

    /**
     * @var boolean $IntegratedContent
     */
    protected $IntegratedContent = null;

    /**
     * @var boolean $Cruise
     */
    protected $Cruise = null;

    /**
     * @var boolean $RailSegment
     */
    protected $RailSegment = null;

    /**
     * @param boolean $ProviderReservationDetail
     * @param boolean $CustomCheck
     * @param boolean $ProviderProfile
     * @param boolean $DivideDetails
     * @param boolean $EnhancedItinModifiers
     * @param boolean $IntegratedContent
     * @param boolean $Cruise
     * @param boolean $RailSegment
     */
    public function __construct($ProviderReservationDetail = null, $CustomCheck = null, $ProviderProfile = null, $DivideDetails = null, $EnhancedItinModifiers = null, $IntegratedContent = null, $Cruise = null, $RailSegment = null)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      $this->CustomCheck = $CustomCheck;
      $this->ProviderProfile = $ProviderProfile;
      $this->DivideDetails = $DivideDetails;
      $this->EnhancedItinModifiers = $EnhancedItinModifiers;
      $this->IntegratedContent = $IntegratedContent;
      $this->Cruise = $Cruise;
      $this->RailSegment = $RailSegment;
    }

    /**
     * @return boolean
     */
    public function getProviderReservationDetail()
    {
      return $this->ProviderReservationDetail;
    }

    /**
     * @param boolean $ProviderReservationDetail
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setProviderReservationDetail($ProviderReservationDetail)
    {
      $this->ProviderReservationDetail = $ProviderReservationDetail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomCheck()
    {
      return $this->CustomCheck;
    }

    /**
     * @param boolean $CustomCheck
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setCustomCheck($CustomCheck)
    {
      $this->CustomCheck = $CustomCheck;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProviderProfile()
    {
      return $this->ProviderProfile;
    }

    /**
     * @param boolean $ProviderProfile
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setProviderProfile($ProviderProfile)
    {
      $this->ProviderProfile = $ProviderProfile;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDivideDetails()
    {
      return $this->DivideDetails;
    }

    /**
     * @param boolean $DivideDetails
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setDivideDetails($DivideDetails)
    {
      $this->DivideDetails = $DivideDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnhancedItinModifiers()
    {
      return $this->EnhancedItinModifiers;
    }

    /**
     * @param boolean $EnhancedItinModifiers
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setEnhancedItinModifiers($EnhancedItinModifiers)
    {
      $this->EnhancedItinModifiers = $EnhancedItinModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIntegratedContent()
    {
      return $this->IntegratedContent;
    }

    /**
     * @param boolean $IntegratedContent
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setIntegratedContent($IntegratedContent)
    {
      $this->IntegratedContent = $IntegratedContent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCruise()
    {
      return $this->Cruise;
    }

    /**
     * @param boolean $Cruise
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setCruise($Cruise)
    {
      $this->Cruise = $Cruise;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRailSegment()
    {
      return $this->RailSegment;
    }

    /**
     * @param boolean $RailSegment
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDetails
     */
    public function setRailSegment($RailSegment)
    {
      $this->RailSegment = $RailSegment;
      return $this;
    }

}
