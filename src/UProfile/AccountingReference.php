<?php

namespace FilippoToso\Travelport\UProfile;

class AccountingReference extends typeKeyElement
{

    /**
     * @var typeRef[] $PaymentDetailsRef
     */
    protected $PaymentDetailsRef = null;

    /**
     * @var StringLength1to128 $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to255 $Value
     */
    protected $Value = null;

    /**
     * @var typeProfileID $AccountID
     */
    protected $AccountID = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to128 $Type
     * @param StringLength1to255 $Value
     * @param typeProfileID $AccountID
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     * @param boolean $Active
     */
    public function __construct($Key = null, $Type = null, $Value = null, $AccountID = null, $PriorityOrder = null, $OwnerID = null, $Active = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->Value = $Value;
      $this->AccountID = $AccountID;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
      $this->Active = $Active;
    }

    /**
     * @return typeRef[]
     */
    public function getPaymentDetailsRef()
    {
      return $this->PaymentDetailsRef;
    }

    /**
     * @param typeRef[] $PaymentDetailsRef
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setPaymentDetailsRef(array $PaymentDetailsRef = null)
    {
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param StringLength1to128 $Type
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param StringLength1to255 $Value
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param typeProfileID $AccountID
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \FilippoToso\Travelport\UProfile\AccountingReference
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
