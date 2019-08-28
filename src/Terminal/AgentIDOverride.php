<?php

namespace FilippoToso\Travelport\Terminal;

class AgentIDOverride
{

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var anonymous388 $AgentID
     */
    protected $AgentID = null;

    /**
     * @param typeSupplierCode $SupplierCode
     * @param typeProviderCode $ProviderCode
     * @param anonymous388 $AgentID
     */
    public function __construct($SupplierCode = null, $ProviderCode = null, $AgentID = null)
    {
      $this->SupplierCode = $SupplierCode;
      $this->ProviderCode = $ProviderCode;
      $this->AgentID = $AgentID;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Terminal\AgentIDOverride
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Terminal\AgentIDOverride
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous388
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param anonymous388 $AgentID
     * @return \FilippoToso\Travelport\Terminal\AgentIDOverride
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

}
