<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchFieldRsp extends BaseRsp
{

    /**
     * @var Field $Field
     */
    protected $Field = null;

    /**
     * @var FieldGroup $FieldGroup
     */
    protected $FieldGroup = null;

    /**
     * @var typeMoreResults $MoreResults
     */
    protected $MoreResults = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Field $Field
     * @param FieldGroup $FieldGroup
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Field = null, $FieldGroup = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Field = $Field;
      $this->FieldGroup = $FieldGroup;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return Field
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param Field $Field
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchFieldRsp
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return FieldGroup
     */
    public function getFieldGroup()
    {
      return $this->FieldGroup;
    }

    /**
     * @param FieldGroup $FieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchFieldRsp
     */
    public function setFieldGroup($FieldGroup)
    {
      $this->FieldGroup = $FieldGroup;
      return $this;
    }

    /**
     * @return typeMoreResults
     */
    public function getMoreResults()
    {
      return $this->MoreResults;
    }

    /**
     * @param typeMoreResults $MoreResults
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchFieldRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
