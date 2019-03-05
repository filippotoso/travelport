<?php

namespace FilippoToso\Travelport\Air;

class DebitCard extends typePaymentCard
{

    /**
     * @var anonymous32 $IssueNumber
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
     * @param anonymous41 $Name
     * @param anonymous42 $CVV
     * @param anonymous43 $ApprovalCode
     * @param anonymous32 $IssueNumber
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
     * @return anonymous32
     */
    public function getIssueNumber()
    {
      return $this->IssueNumber;
    }

    /**
     * @param anonymous32 $IssueNumber
     * @return \FilippoToso\Travelport\Air\DebitCard
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
     * @return \FilippoToso\Travelport\Air\DebitCard
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
     * @return \FilippoToso\Travelport\Air\DebitCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
