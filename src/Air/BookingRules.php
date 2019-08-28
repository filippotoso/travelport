<?php

namespace FilippoToso\Travelport\Air;

class BookingRules
{

    /**
     * @var BookingRulesFareReference $BookingRulesFareReference
     */
    protected $BookingRulesFareReference = null;

    /**
     * @var RuleInfo[] $RuleInfo
     */
    protected $RuleInfo = null;

    /**
     * @var Restriction $Restriction
     */
    protected $Restriction = null;

    /**
     * @var DocumentRequired $DocumentRequired
     */
    protected $DocumentRequired = null;

    /**
     * @var boolean $GenderDobRequired
     */
    protected $GenderDobRequired = null;

    /**
     * @param BookingRulesFareReference $BookingRulesFareReference
     * @param Restriction $Restriction
     * @param DocumentRequired $DocumentRequired
     * @param boolean $GenderDobRequired
     */
    public function __construct($BookingRulesFareReference = null, $Restriction = null, $DocumentRequired = null, $GenderDobRequired = null)
    {
      $this->BookingRulesFareReference = $BookingRulesFareReference;
      $this->Restriction = $Restriction;
      $this->DocumentRequired = $DocumentRequired;
      $this->GenderDobRequired = $GenderDobRequired;
    }

    /**
     * @return BookingRulesFareReference
     */
    public function getBookingRulesFareReference()
    {
      return $this->BookingRulesFareReference;
    }

    /**
     * @param BookingRulesFareReference $BookingRulesFareReference
     * @return \FilippoToso\Travelport\Air\BookingRules
     */
    public function setBookingRulesFareReference($BookingRulesFareReference)
    {
      $this->BookingRulesFareReference = $BookingRulesFareReference;
      return $this;
    }

    /**
     * @return RuleInfo[]
     */
    public function getRuleInfo()
    {
      return $this->RuleInfo;
    }

    /**
     * @param RuleInfo[] $RuleInfo
     * @return \FilippoToso\Travelport\Air\BookingRules
     */
    public function setRuleInfo(array $RuleInfo = null)
    {
      $this->RuleInfo = $RuleInfo;
      return $this;
    }

    /**
     * @return Restriction
     */
    public function getRestriction()
    {
      return $this->Restriction;
    }

    /**
     * @param Restriction $Restriction
     * @return \FilippoToso\Travelport\Air\BookingRules
     */
    public function setRestriction($Restriction)
    {
      $this->Restriction = $Restriction;
      return $this;
    }

    /**
     * @return DocumentRequired
     */
    public function getDocumentRequired()
    {
      return $this->DocumentRequired;
    }

    /**
     * @param DocumentRequired $DocumentRequired
     * @return \FilippoToso\Travelport\Air\BookingRules
     */
    public function setDocumentRequired($DocumentRequired)
    {
      $this->DocumentRequired = $DocumentRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenderDobRequired()
    {
      return $this->GenderDobRequired;
    }

    /**
     * @param boolean $GenderDobRequired
     * @return \FilippoToso\Travelport\Air\BookingRules
     */
    public function setGenderDobRequired($GenderDobRequired)
    {
      $this->GenderDobRequired = $GenderDobRequired;
      return $this;
    }

}
