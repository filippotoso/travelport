<?php

namespace FilippoToso\Travelport\Util;

class PriceMatchError
{

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var typeHotelChainCode $HotelChain
     */
    protected $HotelChain = null;

    /**
     * @var typeHotelCode $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var float $ReqBase
     */
    protected $ReqBase = null;

    /**
     * @var float $RspBase
     */
    protected $RspBase = null;

    /**
     * @var float $BaseDiff
     */
    protected $BaseDiff = null;

    /**
     * @var float $ReqTotal
     */
    protected $ReqTotal = null;

    /**
     * @var float $RspTotal
     */
    protected $RspTotal = null;

    /**
     * @var float $TotalDiff
     */
    protected $TotalDiff = null;

    /**
     * @param string $ErrorMessage
     * @param typeSupplierCode $VendorCode
     * @param typeHotelChainCode $HotelChain
     * @param typeHotelCode $HotelCode
     * @param float $ReqBase
     * @param float $RspBase
     * @param float $BaseDiff
     * @param float $ReqTotal
     * @param float $RspTotal
     * @param float $TotalDiff
     */
    public function __construct($ErrorMessage = null, $VendorCode = null, $HotelChain = null, $HotelCode = null, $ReqBase = null, $RspBase = null, $BaseDiff = null, $ReqTotal = null, $RspTotal = null, $TotalDiff = null)
    {
      $this->ErrorMessage = $ErrorMessage;
      $this->VendorCode = $VendorCode;
      $this->HotelChain = $HotelChain;
      $this->HotelCode = $HotelCode;
      $this->ReqBase = $ReqBase;
      $this->RspBase = $RspBase;
      $this->BaseDiff = $BaseDiff;
      $this->ReqTotal = $ReqTotal;
      $this->RspTotal = $RspTotal;
      $this->TotalDiff = $TotalDiff;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
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
     * @return \FilippoToso\Travelport\Util\PriceMatchError
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
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getReqBase()
    {
      return $this->ReqBase;
    }

    /**
     * @param float $ReqBase
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setReqBase($ReqBase)
    {
      $this->ReqBase = $ReqBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getRspBase()
    {
      return $this->RspBase;
    }

    /**
     * @param float $RspBase
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setRspBase($RspBase)
    {
      $this->RspBase = $RspBase;
      return $this;
    }

    /**
     * @return float
     */
    public function getBaseDiff()
    {
      return $this->BaseDiff;
    }

    /**
     * @param float $BaseDiff
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setBaseDiff($BaseDiff)
    {
      $this->BaseDiff = $BaseDiff;
      return $this;
    }

    /**
     * @return float
     */
    public function getReqTotal()
    {
      return $this->ReqTotal;
    }

    /**
     * @param float $ReqTotal
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setReqTotal($ReqTotal)
    {
      $this->ReqTotal = $ReqTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getRspTotal()
    {
      return $this->RspTotal;
    }

    /**
     * @param float $RspTotal
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setRspTotal($RspTotal)
    {
      $this->RspTotal = $RspTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiff()
    {
      return $this->TotalDiff;
    }

    /**
     * @param float $TotalDiff
     * @return \FilippoToso\Travelport\Util\PriceMatchError
     */
    public function setTotalDiff($TotalDiff)
    {
      $this->TotalDiff = $TotalDiff;
      return $this;
    }

}
