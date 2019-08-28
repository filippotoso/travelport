<?php

namespace FilippoToso\Travelport\Util;

class BrandedFareAdminRsp extends BaseRsp
{

    /**
     * @var FareFamily $FareFamily
     */
    protected $FareFamily = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param FareFamily $FareFamily
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $FareFamily = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->FareFamily = $FareFamily;
    }

    /**
     * @return FareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param FareFamily $FareFamily
     * @return \FilippoToso\Travelport\Util\BrandedFareAdminRsp
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
      return $this;
    }

}
