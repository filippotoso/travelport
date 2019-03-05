<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordErrorInfo extends typeErrorInfo
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @var typeURVersion $Version
     */
    protected $Version = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     * @param typeLocatorCode $LocatorCode
     * @param typeURVersion $Version
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null, $LocatorCode = null, $Version = null)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
      $this->LocatorCode = $LocatorCode;
      $this->Version = $Version;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordErrorInfo
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordErrorInfo
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
