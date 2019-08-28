<?php

namespace FilippoToso\Travelport\UProfile;

class FieldGroupData extends typeKeyTaggedElement
{

    /**
     * @var FieldData $FieldData
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
     * @param TagRef $TagRef
     * @param FieldData $FieldData
     * @param typeFieldID $FieldGroupID
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $FieldData = null, $FieldGroupID = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->FieldData = $FieldData;
      $this->FieldGroupID = $FieldGroupID;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return FieldData
     */
    public function getFieldData()
    {
      return $this->FieldData;
    }

    /**
     * @param FieldData $FieldData
     * @return \FilippoToso\Travelport\UProfile\FieldGroupData
     */
    public function setFieldData($FieldData)
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
     * @return \FilippoToso\Travelport\UProfile\FieldGroupData
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
     * @return \FilippoToso\Travelport\UProfile\FieldGroupData
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
