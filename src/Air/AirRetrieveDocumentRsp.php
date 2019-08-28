<?php

namespace FilippoToso\Travelport\Air;

class AirRetrieveDocumentRsp extends BaseRsp
{

    /**
     * @var ETR $ETR
     */
    protected $ETR = null;

    /**
     * @var MCO $MCO
     */
    protected $MCO = null;

    /**
     * @var TCR $TCR
     */
    protected $TCR = null;

    /**
     * @var typeFailureInfo[] $DocumentFailureInfo
     */
    protected $DocumentFailureInfo = null;

    /**
     * @var ServiceFeeInfo $ServiceFeeInfo
     */
    protected $ServiceFeeInfo = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ETR $ETR
     * @param MCO $MCO
     * @param TCR $TCR
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @param typeLocatorCode $UniversalRecordLocatorCode
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ETR = null, $MCO = null, $TCR = null, $ServiceFeeInfo = null, $UniversalRecordLocatorCode = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ETR = $ETR;
      $this->MCO = $MCO;
      $this->TCR = $TCR;
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
    }

    /**
     * @return ETR
     */
    public function getETR()
    {
      return $this->ETR;
    }

    /**
     * @param ETR $ETR
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setETR($ETR)
    {
      $this->ETR = $ETR;
      return $this;
    }

    /**
     * @return MCO
     */
    public function getMCO()
    {
      return $this->MCO;
    }

    /**
     * @param MCO $MCO
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setMCO($MCO)
    {
      $this->MCO = $MCO;
      return $this;
    }

    /**
     * @return TCR
     */
    public function getTCR()
    {
      return $this->TCR;
    }

    /**
     * @param TCR $TCR
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setTCR($TCR)
    {
      $this->TCR = $TCR;
      return $this;
    }

    /**
     * @return typeFailureInfo[]
     */
    public function getDocumentFailureInfo()
    {
      return $this->DocumentFailureInfo;
    }

    /**
     * @param typeFailureInfo[] $DocumentFailureInfo
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setDocumentFailureInfo(array $DocumentFailureInfo = null)
    {
      $this->DocumentFailureInfo = $DocumentFailureInfo;
      return $this;
    }

    /**
     * @return ServiceFeeInfo
     */
    public function getServiceFeeInfo()
    {
      return $this->ServiceFeeInfo;
    }

    /**
     * @param ServiceFeeInfo $ServiceFeeInfo
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setServiceFeeInfo($ServiceFeeInfo)
    {
      $this->ServiceFeeInfo = $ServiceFeeInfo;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\Air\AirRetrieveDocumentRsp
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

}
