<?php

namespace FilippoToso\Travelport\UProfile;

class ActionStatus
{

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var anonymous124 $Type
     */
    protected $Type = null;

    /**
     * @var string $TicketDate
     */
    protected $TicketDate = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeNonBlanks $QueueCategory
     */
    protected $QueueCategory = null;

    /**
     * @var typeAirport $AirportCode
     */
    protected $AirportCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param Remark $Remark
     * @param anonymous124 $Type
     * @param string $TicketDate
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     * @param typeNonBlanks $QueueCategory
     * @param typeAirport $AirportCode
     * @param typePCC $PseudoCityCode
     * @param string $AccountCode
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Remark = null, $Type = null, $TicketDate = null, $Key = null, $ProviderReservationInfoRef = null, $QueueCategory = null, $AirportCode = null, $PseudoCityCode = null, $AccountCode = null, $ProviderCode = null, $SupplierCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Remark = $Remark;
      $this->Type = $Type;
      $this->TicketDate = $TicketDate;
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->QueueCategory = $QueueCategory;
      $this->AirportCode = $AirportCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->AccountCode = $AccountCode;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return anonymous124
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous124 $Type
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketDate()
    {
      return $this->TicketDate;
    }

    /**
     * @param string $TicketDate
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setTicketDate($TicketDate)
    {
      $this->TicketDate = $TicketDate;
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
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeNonBlanks
     */
    public function getQueueCategory()
    {
      return $this->QueueCategory;
    }

    /**
     * @param typeNonBlanks $QueueCategory
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setQueueCategory($QueueCategory)
    {
      $this->QueueCategory = $QueueCategory;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getAirportCode()
    {
      return $this->AirportCode;
    }

    /**
     * @param typeAirport $AirportCode
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setAirportCode($AirportCode)
    {
      $this->AirportCode = $AirportCode;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\UProfile\ActionStatus
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
