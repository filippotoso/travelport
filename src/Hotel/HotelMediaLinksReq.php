<?php

namespace FilippoToso\Travelport\Hotel;

class HotelMediaLinksReq extends BaseReq
{

    /**
     * @var PermittedProviders $PermittedProviders
     */
    protected $PermittedProviders = null;

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var boolean $SecureLinks
     */
    protected $SecureLinks = null;

    /**
     * @var typeRequestedImageSize $SizeCode
     */
    protected $SizeCode = null;

    /**
     * @var boolean $RichMedia
     */
    protected $RichMedia = null;

    /**
     * @var boolean $Gallery
     */
    protected $Gallery = null;

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
     * @param PermittedProviders $PermittedProviders
     * @param HotelProperty $HotelProperty
     * @param boolean $SecureLinks
     * @param typeRequestedImageSize $SizeCode
     * @param boolean $RichMedia
     * @param boolean $Gallery
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $PermittedProviders = null, $HotelProperty = null, $SecureLinks = null, $SizeCode = null, $RichMedia = null, $Gallery = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails);
      $this->PermittedProviders = $PermittedProviders;
      $this->HotelProperty = $HotelProperty;
      $this->SecureLinks = $SecureLinks;
      $this->SizeCode = $SizeCode;
      $this->RichMedia = $RichMedia;
      $this->Gallery = $Gallery;
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
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
      return $this;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecureLinks()
    {
      return $this->SecureLinks;
    }

    /**
     * @param boolean $SecureLinks
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setSecureLinks($SecureLinks)
    {
      $this->SecureLinks = $SecureLinks;
      return $this;
    }

    /**
     * @return typeRequestedImageSize
     */
    public function getSizeCode()
    {
      return $this->SizeCode;
    }

    /**
     * @param typeRequestedImageSize $SizeCode
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setSizeCode($SizeCode)
    {
      $this->SizeCode = $SizeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRichMedia()
    {
      return $this->RichMedia;
    }

    /**
     * @param boolean $RichMedia
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setRichMedia($RichMedia)
    {
      $this->RichMedia = $RichMedia;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGallery()
    {
      return $this->Gallery;
    }

    /**
     * @param boolean $Gallery
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksReq
     */
    public function setGallery($Gallery)
    {
      $this->Gallery = $Gallery;
      return $this;
    }

}
