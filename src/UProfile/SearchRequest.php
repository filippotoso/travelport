<?php

namespace FilippoToso\Travelport\UProfile;

class SearchRequest
{

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param typeClassOfService $ClassOfService
     */
    public function __construct($Origin = null, $Destination = null, $DepartureTime = null, $ClassOfService = null)
    {
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ClassOfService = $ClassOfService;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\UProfile\SearchRequest
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\UProfile\SearchRequest
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \FilippoToso\Travelport\UProfile\SearchRequest
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\UProfile\SearchRequest
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

}
