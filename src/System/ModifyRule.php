<?php

namespace FilippoToso\Travelport\System;

class ModifyRule
{

    /**
     * @var ModificationType $Modification
     */
    protected $Modification = null;

    /**
     * @var boolean $AutomaticallyAppliedOnAdd
     */
    protected $AutomaticallyAppliedOnAdd = null;

    /**
     * @var boolean $CanDelete
     */
    protected $CanDelete = null;

    /**
     * @var boolean $CanAdd
     */
    protected $CanAdd = null;

    /**
     * @var boolean $Refundable
     */
    protected $Refundable = null;

    /**
     * @var string $ProviderDefinedModificationType
     */
    protected $ProviderDefinedModificationType = null;

    /**
     * @param ModificationType $Modification
     * @param boolean $AutomaticallyAppliedOnAdd
     * @param boolean $CanDelete
     * @param boolean $CanAdd
     * @param boolean $Refundable
     * @param string $ProviderDefinedModificationType
     */
    public function __construct($Modification = null, $AutomaticallyAppliedOnAdd = null, $CanDelete = null, $CanAdd = null, $Refundable = null, $ProviderDefinedModificationType = null)
    {
      $this->Modification = $Modification;
      $this->AutomaticallyAppliedOnAdd = $AutomaticallyAppliedOnAdd;
      $this->CanDelete = $CanDelete;
      $this->CanAdd = $CanAdd;
      $this->Refundable = $Refundable;
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
    }

    /**
     * @return ModificationType
     */
    public function getModification()
    {
      return $this->Modification;
    }

    /**
     * @param ModificationType $Modification
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setModification($Modification)
    {
      $this->Modification = $Modification;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomaticallyAppliedOnAdd()
    {
      return $this->AutomaticallyAppliedOnAdd;
    }

    /**
     * @param boolean $AutomaticallyAppliedOnAdd
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setAutomaticallyAppliedOnAdd($AutomaticallyAppliedOnAdd)
    {
      $this->AutomaticallyAppliedOnAdd = $AutomaticallyAppliedOnAdd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanDelete()
    {
      return $this->CanDelete;
    }

    /**
     * @param boolean $CanDelete
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setCanDelete($CanDelete)
    {
      $this->CanDelete = $CanDelete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanAdd()
    {
      return $this->CanAdd;
    }

    /**
     * @param boolean $CanAdd
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setCanAdd($CanAdd)
    {
      $this->CanAdd = $CanAdd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDefinedModificationType()
    {
      return $this->ProviderDefinedModificationType;
    }

    /**
     * @param string $ProviderDefinedModificationType
     * @return \FilippoToso\Travelport\System\ModifyRule
     */
    public function setProviderDefinedModificationType($ProviderDefinedModificationType)
    {
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
      return $this;
    }

}
