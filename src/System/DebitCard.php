<?php

namespace FilippoToso\Travelport\System;

class DebitCard extends typePaymentCard
{

    /**
     * @var anonymous28 $IssueNumber
     */
    protected $IssueNumber = null;

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous37 $Name
     * @param anonymous38 $CVV
     * @param anonymous39 $ApprovalCode
     * @param anonymous28 $IssueNumber
     * @param string $ProfileID
     * @param typeRef $Key
     */
    public function __construct($PhoneNumber = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null, $IssueNumber = null, $ProfileID = null, $Key = null)
    {
      parent::__construct($PhoneNumber, $Type, $Number, $ExpDate, $Name, $CVV, $ApprovalCode);
      $this->IssueNumber = $IssueNumber;
      $this->ProfileID = $ProfileID;
      $this->Key = $Key;
    }

    /**
     * @return anonymous28
     */
    public function getIssueNumber()
    {
      return $this->IssueNumber;
    }

    /**
     * @param anonymous28 $IssueNumber
     * @return \FilippoToso\Travelport\System\DebitCard
     */
    public function setIssueNumber($IssueNumber)
    {
      $this->IssueNumber = $IssueNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \FilippoToso\Travelport\System\DebitCard
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
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
     * @return \FilippoToso\Travelport\System\DebitCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
