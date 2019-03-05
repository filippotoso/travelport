<?php

namespace FilippoToso\Travelport\GDSQueue;

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
     * @var anonymous397 $AgentID
     */
    protected $AgentID = null;

    /**
     * @param typeSupplierCode $SupplierCode
     * @param typeProviderCode $ProviderCode
     * @param anonymous397 $AgentID
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
     * @return \FilippoToso\Travelport\GDSQueue\AgentIDOverride
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
     * @return \FilippoToso\Travelport\GDSQueue\AgentIDOverride
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return anonymous397
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param anonymous397 $AgentID
     * @return \FilippoToso\Travelport\GDSQueue\AgentIDOverride
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

}
