<?php

namespace FilippoToso\Travelport\UProfile;

class typeContact extends typeKeyTaggedElement
{

    /**
     * @var typeContactType $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to128 $GivenName
     */
    protected $GivenName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    protected $Surname = null;

    /**
     * @var StringLength1to128 $OtherName
     */
    protected $OtherName = null;

    /**
     * @var StringLength1to128 $Nickname
     */
    protected $Nickname = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param typeContactType $Type
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $Surname
     * @param StringLength1to128 $OtherName
     * @param StringLength1to128 $Nickname
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $TagRef = null, $Type = null, $GivenName = null, $Surname = null, $OtherName = null, $Nickname = null, $PriorityOrder = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Type = $Type;
      $this->GivenName = $GivenName;
      $this->Surname = $Surname;
      $this->OtherName = $OtherName;
      $this->Nickname = $Nickname;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return typeContactType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeContactType $Type
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param StringLength1to128 $GivenName
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param StringLength1to128 $Surname
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherName()
    {
      return $this->OtherName;
    }

    /**
     * @param StringLength1to128 $OtherName
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setOtherName($OtherName)
    {
      $this->OtherName = $OtherName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getNickname()
    {
      return $this->Nickname;
    }

    /**
     * @param StringLength1to128 $Nickname
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setNickname($Nickname)
    {
      $this->Nickname = $Nickname;
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
     * @return \FilippoToso\Travelport\UProfile\typeContact
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
