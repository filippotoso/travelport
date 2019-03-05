<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordModifyReq extends BaseReq
{

    /**
     * @var ContinuityCheckOverride $ContinuityCheckOverride
     */
    protected $ContinuityCheckOverride = null;

    /**
     * @var RecordIdentifier $RecordIdentifier
     */
    protected $RecordIdentifier = null;

    /**
     * @var UniversalModifyCmd $UniversalModifyCmd
     */
    protected $UniversalModifyCmd = null;

    /**
     * @var FileFinishingInfo $FileFinishingInfo
     */
    protected $FileFinishingInfo = null;

    /**
     * @var QueueNextModifiers $QueueNextModifiers
     */
    protected $QueueNextModifiers = null;

    /**
     * @var boolean $ReturnRecord
     */
    protected $ReturnRecord = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @var boolean $OverrideMCT
     */
    protected $OverrideMCT = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @param RecordIdentifier $RecordIdentifier
     * @param UniversalModifyCmd $UniversalModifyCmd
     * @param FileFinishingInfo $FileFinishingInfo
     * @param QueueNextModifiers $QueueNextModifiers
     * @param boolean $ReturnRecord
     * @param typeURVersion $Version
     * @param boolean $OverrideMCT
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $ContinuityCheckOverride = null, $RecordIdentifier = null, $UniversalModifyCmd = null, $FileFinishingInfo = null, $QueueNextModifiers = null, $ReturnRecord = null, $Version = null, $OverrideMCT = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      $this->RecordIdentifier = $RecordIdentifier;
      $this->UniversalModifyCmd = $UniversalModifyCmd;
      $this->FileFinishingInfo = $FileFinishingInfo;
      $this->QueueNextModifiers = $QueueNextModifiers;
      $this->ReturnRecord = $ReturnRecord;
      $this->Version = $Version;
      $this->OverrideMCT = $OverrideMCT;
    }

    /**
     * @return ContinuityCheckOverride
     */
    public function getContinuityCheckOverride()
    {
      return $this->ContinuityCheckOverride;
    }

    /**
     * @param ContinuityCheckOverride $ContinuityCheckOverride
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setContinuityCheckOverride($ContinuityCheckOverride)
    {
      $this->ContinuityCheckOverride = $ContinuityCheckOverride;
      return $this;
    }

    /**
     * @return RecordIdentifier
     */
    public function getRecordIdentifier()
    {
      return $this->RecordIdentifier;
    }

    /**
     * @param RecordIdentifier $RecordIdentifier
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setRecordIdentifier($RecordIdentifier)
    {
      $this->RecordIdentifier = $RecordIdentifier;
      return $this;
    }

    /**
     * @return UniversalModifyCmd
     */
    public function getUniversalModifyCmd()
    {
      return $this->UniversalModifyCmd;
    }

    /**
     * @param UniversalModifyCmd $UniversalModifyCmd
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setUniversalModifyCmd($UniversalModifyCmd)
    {
      $this->UniversalModifyCmd = $UniversalModifyCmd;
      return $this;
    }

    /**
     * @return FileFinishingInfo
     */
    public function getFileFinishingInfo()
    {
      return $this->FileFinishingInfo;
    }

    /**
     * @param FileFinishingInfo $FileFinishingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setFileFinishingInfo($FileFinishingInfo)
    {
      $this->FileFinishingInfo = $FileFinishingInfo;
      return $this;
    }

    /**
     * @return QueueNextModifiers
     */
    public function getQueueNextModifiers()
    {
      return $this->QueueNextModifiers;
    }

    /**
     * @param QueueNextModifiers $QueueNextModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setQueueNextModifiers($QueueNextModifiers)
    {
      $this->QueueNextModifiers = $QueueNextModifiers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnRecord()
    {
      return $this->ReturnRecord;
    }

    /**
     * @param boolean $ReturnRecord
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setReturnRecord($ReturnRecord)
    {
      $this->ReturnRecord = $ReturnRecord;
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideMCT()
    {
      return $this->OverrideMCT;
    }

    /**
     * @param boolean $OverrideMCT
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyReq
     */
    public function setOverrideMCT($OverrideMCT)
    {
      $this->OverrideMCT = $OverrideMCT;
      return $this;
    }

}
