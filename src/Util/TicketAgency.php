<?php

namespace FilippoToso\Travelport\Util;

class TicketAgency
{

    /**
     * @var UNKNOWN $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var UNKNOWN $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @param UNKNOWN $ProviderCode
     * @param UNKNOWN $PseudoCityCode
     */
    public function __construct($ProviderCode = null, $PseudoCityCode = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return UNKNOWN
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param UNKNOWN $ProviderCode
     * @return \FilippoToso\Travelport\Util\TicketAgency
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param UNKNOWN $PseudoCityCode
     * @return \FilippoToso\Travelport\Util\TicketAgency
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
