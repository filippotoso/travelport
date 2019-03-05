<?php

namespace FilippoToso\Travelport\UProfile;

class Action
{

    /**
     * @var Endpoint $Endpoint
     */
    protected $Endpoint = null;

    /**
     * @var typeActionID $ID
     */
    protected $ID = null;

    /**
     * @var typeFieldName $Name
     */
    protected $Name = null;

    /**
     * @var typeActionDescription $Description
     */
    protected $Description = null;

    /**
     * @var string $ConsumingSystem
     */
    protected $ConsumingSystem = null;

    /**
     * @var string $TargetService
     */
    protected $TargetService = null;

    /**
     * @var string $ProfileActionCode
     */
    protected $ProfileActionCode = null;

    /**
     * @param Endpoint $Endpoint
     * @param typeActionID $ID
     * @param typeFieldName $Name
     * @param typeActionDescription $Description
     * @param string $ConsumingSystem
     * @param string $TargetService
     * @param string $ProfileActionCode
     */
    public function __construct($Endpoint = null, $ID = null, $Name = null, $Description = null, $ConsumingSystem = null, $TargetService = null, $ProfileActionCode = null)
    {
      $this->Endpoint = $Endpoint;
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->ConsumingSystem = $ConsumingSystem;
      $this->TargetService = $TargetService;
      $this->ProfileActionCode = $ProfileActionCode;
    }

    /**
     * @return Endpoint
     */
    public function getEndpoint()
    {
      return $this->Endpoint;
    }

    /**
     * @param Endpoint $Endpoint
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setEndpoint($Endpoint)
    {
      $this->Endpoint = $Endpoint;
      return $this;
    }

    /**
     * @return typeActionID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeActionID $ID
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeFieldName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeFieldName $Name
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeActionDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param typeActionDescription $Description
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsumingSystem()
    {
      return $this->ConsumingSystem;
    }

    /**
     * @param string $ConsumingSystem
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setConsumingSystem($ConsumingSystem)
    {
      $this->ConsumingSystem = $ConsumingSystem;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetService()
    {
      return $this->TargetService;
    }

    /**
     * @param string $TargetService
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setTargetService($TargetService)
    {
      $this->TargetService = $TargetService;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileActionCode()
    {
      return $this->ProfileActionCode;
    }

    /**
     * @param string $ProfileActionCode
     * @return \FilippoToso\Travelport\UProfile\Action
     */
    public function setProfileActionCode($ProfileActionCode)
    {
      $this->ProfileActionCode = $ProfileActionCode;
      return $this;
    }

}
