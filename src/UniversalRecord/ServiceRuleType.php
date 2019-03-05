<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ServiceRuleType
{

    /**
     * @var ApplicationRules $ApplicationRules
     */
    protected $ApplicationRules = null;

    /**
     * @var ApplicationLevel $ApplicationLevel
     */
    protected $ApplicationLevel = null;

    /**
     * @var ModifyRules $ModifyRules
     */
    protected $ModifyRules = null;

    /**
     * @var SecondaryTypeRules $SecondaryTypeRules
     */
    protected $SecondaryTypeRules = null;

    /**
     * @var FormattedTextTextType[] $Remarks
     */
    protected $Remarks = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return ApplicationRules
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param ApplicationRules $ApplicationRules
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setApplicationRules($ApplicationRules)
    {
      $this->ApplicationRules = $ApplicationRules;
      return $this;
    }

    /**
     * @return ApplicationLevel
     */
    public function getApplicationLevel()
    {
      return $this->ApplicationLevel;
    }

    /**
     * @param ApplicationLevel $ApplicationLevel
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setApplicationLevel($ApplicationLevel)
    {
      $this->ApplicationLevel = $ApplicationLevel;
      return $this;
    }

    /**
     * @return ModifyRules
     */
    public function getModifyRules()
    {
      return $this->ModifyRules;
    }

    /**
     * @param ModifyRules $ModifyRules
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setModifyRules($ModifyRules)
    {
      $this->ModifyRules = $ModifyRules;
      return $this;
    }

    /**
     * @return SecondaryTypeRules
     */
    public function getSecondaryTypeRules()
    {
      return $this->SecondaryTypeRules;
    }

    /**
     * @param SecondaryTypeRules $SecondaryTypeRules
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setSecondaryTypeRules($SecondaryTypeRules)
    {
      $this->SecondaryTypeRules = $SecondaryTypeRules;
      return $this;
    }

    /**
     * @return FormattedTextTextType[]
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param FormattedTextTextType[] $Remarks
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setRemarks(array $Remarks = null)
    {
      $this->Remarks = $Remarks;
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
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceRuleType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
