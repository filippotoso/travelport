<?php

namespace FilippoToso\Travelport\UProfile;

class typeFieldGroupDataHistory extends typeKeyElement
{

    /**
     * @var typeFieldDataHistory[] $FieldData
     */
    protected $FieldData = null;

    /**
     * @var typeFieldID $FieldGroupID
     */
    protected $FieldGroupID = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param typeFieldID $FieldGroupID
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $FieldGroupID = null, $OwnerID = null)
    {
      parent::__construct($Key);
      $this->FieldGroupID = $FieldGroupID;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return typeFieldDataHistory[]
     */
    public function getFieldData()
    {
      return $this->FieldData;
    }

    /**
     * @param typeFieldDataHistory[] $FieldData
     * @return \FilippoToso\Travelport\UProfile\typeFieldGroupDataHistory
     */
    public function setFieldData(array $FieldData = null)
    {
      $this->FieldData = $FieldData;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getFieldGroupID()
    {
      return $this->FieldGroupID;
    }

    /**
     * @param typeFieldID $FieldGroupID
     * @return \FilippoToso\Travelport\UProfile\typeFieldGroupDataHistory
     */
    public function setFieldGroupID($FieldGroupID)
    {
      $this->FieldGroupID = $FieldGroupID;
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
     * @return \FilippoToso\Travelport\UProfile\typeFieldGroupDataHistory
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
