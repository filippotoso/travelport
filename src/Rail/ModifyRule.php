<?php

namespace FilippoToso\Travelport\Rail;

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
    public function __construct($Modification, $AutomaticallyAppliedOnAdd, $CanDelete, $CanAdd, $Refundable, $ProviderDefinedModificationType)
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
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
     * @return \FilippoToso\Travelport\Rail\ModifyRule
     */
    public function setProviderDefinedModificationType($ProviderDefinedModificationType)
    {
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
      return $this;
    }

}
