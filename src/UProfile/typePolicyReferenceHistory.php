<?php

namespace FilippoToso\Travelport\UProfile;

class typePolicyReferenceHistory extends typeKeyElement
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to255 $Value
     */
    protected $Value = null;

    /**
     * @var typeProfileID $ControllingProfileID
     */
    protected $ControllingProfileID = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var StringLength1to255 $Desc
     */
    protected $Desc = null;

    /**
     * @param typeRef $Key
     * @param string $Type
     * @param StringLength1to255 $Value
     * @param typeProfileID $ControllingProfileID
     * @param typePriorityOrder $PriorityOrder
     * @param StringLength1to255 $Desc
     */
    public function __construct($Key = null, $Type = null, $Value = null, $ControllingProfileID = null, $PriorityOrder = null, $Desc = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->Value = $Value;
      $this->ControllingProfileID = $ControllingProfileID;
      $this->PriorityOrder = $PriorityOrder;
      $this->Desc = $Desc;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UProfile\typePolicyReferenceHistory
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
     * @return \FilippoToso\Travelport\UProfile\typePolicyReferenceHistory
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getControllingProfileID()
    {
      return $this->ControllingProfileID;
    }

    /**
     * @param typeProfileID $ControllingProfileID
     * @return \FilippoToso\Travelport\UProfile\typePolicyReferenceHistory
     */
    public function setControllingProfileID($ControllingProfileID)
    {
      $this->ControllingProfileID = $ControllingProfileID;
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
     * @return \FilippoToso\Travelport\UProfile\typePolicyReferenceHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDesc()
    {
      return $this->Desc;
    }

    /**
     * @param StringLength1to255 $Desc
     * @return \FilippoToso\Travelport\UProfile\typePolicyReferenceHistory
     */
    public function setDesc($Desc)
    {
      $this->Desc = $Desc;
      return $this;
    }

}
