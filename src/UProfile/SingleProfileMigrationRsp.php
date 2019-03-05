<?php

namespace FilippoToso\Travelport\UProfile;

class SingleProfileMigrationRsp extends BaseRsp
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var StringLength1to128 $Status
     */
    protected $Status = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param typeProfileID $ProfileID
     * @param StringLength1to128 $Status
     * @param typeProfileType $ProfileType
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProfileID = null, $Status = null, $ProfileType = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProfileID = $ProfileID;
      $this->Status = $Status;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationRsp
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringLength1to128 $Status
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationRsp
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\SingleProfileMigrationRsp
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
