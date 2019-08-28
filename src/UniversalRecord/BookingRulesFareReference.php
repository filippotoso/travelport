<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BookingRulesFareReference
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var typeTicketDesignator $TicketDesignatorCode
     */
    protected $TicketDesignatorCode = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var boolean $UpgrageAllowed
     */
    protected $UpgrageAllowed = null;

    /**
     * @var typeClassOfService $UpgradeClassOfService
     */
    protected $UpgradeClassOfService = null;

    /**
     * @param string $_
     * @param typeClassOfService $ClassOfService
     * @param typeTicketDesignator $TicketDesignatorCode
     * @param string $AccountCode
     * @param boolean $UpgrageAllowed
     * @param typeClassOfService $UpgradeClassOfService
     */
    public function __construct($_ = null, $ClassOfService = null, $TicketDesignatorCode = null, $AccountCode = null, $UpgrageAllowed = null, $UpgradeClassOfService = null)
    {
      $this->_ = $_;
      $this->ClassOfService = $ClassOfService;
      $this->TicketDesignatorCode = $TicketDesignatorCode;
      $this->AccountCode = $AccountCode;
      $this->UpgrageAllowed = $UpgrageAllowed;
      $this->UpgradeClassOfService = $UpgradeClassOfService;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignatorCode()
    {
      return $this->TicketDesignatorCode;
    }

    /**
     * @param typeTicketDesignator $TicketDesignatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function setTicketDesignatorCode($TicketDesignatorCode)
    {
      $this->TicketDesignatorCode = $TicketDesignatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpgrageAllowed()
    {
      return $this->UpgrageAllowed;
    }

    /**
     * @param boolean $UpgrageAllowed
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function setUpgrageAllowed($UpgrageAllowed)
    {
      $this->UpgrageAllowed = $UpgrageAllowed;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getUpgradeClassOfService()
    {
      return $this->UpgradeClassOfService;
    }

    /**
     * @param typeClassOfService $UpgradeClassOfService
     * @return \FilippoToso\Travelport\UniversalRecord\BookingRulesFareReference
     */
    public function setUpgradeClassOfService($UpgradeClassOfService)
    {
      $this->UpgradeClassOfService = $UpgradeClassOfService;
      return $this;
    }

}
