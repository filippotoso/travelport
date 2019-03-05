<?php

namespace FilippoToso\Travelport\Hotel;

class HotelKeywordReq extends BaseReq
{

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @var PermittedProviders $PermittedProviders
     */
    protected $PermittedProviders = null;

    /**
     * @var typeHotelChainCode $HotelChain
     */
    protected $HotelChain = null;

    /**
     * @var typeHotelCode $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var typeDate $CheckinDate
     */
    protected $CheckinDate = null;

    /**
     * @var boolean $ReturnKeywordList
     */
    protected $ReturnKeywordList = null;

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
     * @param Keyword $Keyword
     * @param PermittedProviders $PermittedProviders
     * @param typeHotelChainCode $HotelChain
     * @param typeHotelCode $HotelCode
     * @param typeDate $CheckinDate
     * @param boolean $ReturnKeywordList
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $Keyword = null, $PermittedProviders = null, $HotelChain = null, $HotelCode = null, $CheckinDate = null, $ReturnKeywordList = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->Keyword = $Keyword;
      $this->PermittedProviders = $PermittedProviders;
      $this->HotelChain = $HotelChain;
      $this->HotelCode = $HotelCode;
      $this->CheckinDate = $CheckinDate;
      $this->ReturnKeywordList = $ReturnKeywordList;
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword $Keyword
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    /**
     * @return PermittedProviders
     */
    public function getPermittedProviders()
    {
      return $this->PermittedProviders;
    }

    /**
     * @param PermittedProviders $PermittedProviders
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
      return $this;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getHotelChain()
    {
      return $this->HotelChain;
    }

    /**
     * @param typeHotelChainCode $HotelChain
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setHotelChain($HotelChain)
    {
      $this->HotelChain = $HotelChain;
      return $this;
    }

    /**
     * @return typeHotelCode
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param typeHotelCode $HotelCode
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getCheckinDate()
    {
      return $this->CheckinDate;
    }

    /**
     * @param typeDate $CheckinDate
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setCheckinDate($CheckinDate)
    {
      $this->CheckinDate = $CheckinDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnKeywordList()
    {
      return $this->ReturnKeywordList;
    }

    /**
     * @param boolean $ReturnKeywordList
     * @return \FilippoToso\Travelport\Hotel\HotelKeywordReq
     */
    public function setReturnKeywordList($ReturnKeywordList)
    {
      $this->ReturnKeywordList = $ReturnKeywordList;
      return $this;
    }

}
