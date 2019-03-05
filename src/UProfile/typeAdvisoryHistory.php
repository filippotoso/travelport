<?php

namespace FilippoToso\Travelport\UProfile;

class typeAdvisoryHistory extends typeKeyElement
{

    /**
     * @var typeAdvisoryType $Type
     */
    protected $Type = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var StringLength1to128 $Summary
     */
    protected $Summary = null;

    /**
     * @var StringLength1to1000 $Description
     */
    protected $Description = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeGeoPoliticalAreaType $GeoPoliticalAreaType
     */
    protected $GeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     */
    protected $GeoPoliticalAreaCode = null;

    /**
     * @param typeRef $Key
     * @param typeAdvisoryType $Type
     * @param date $StartDate
     * @param date $EndDate
     * @param StringLength1to128 $Summary
     * @param StringLength1to1000 $Description
     * @param typePriorityOrder $PriorityOrder
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     */
    public function __construct($Key = null, $Type = null, $StartDate = null, $EndDate = null, $Summary = null, $Description = null, $PriorityOrder = null, $GeoPoliticalAreaType = null, $GeoPoliticalAreaCode = null)
    {
      parent::__construct($Key);
      $this->Type = $Type;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->Summary = $Summary;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
    }

    /**
     * @return typeAdvisoryType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeAdvisoryType $Type
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSummary()
    {
      return $this->Summary;
    }

    /**
     * @param StringLength1to128 $Summary
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setSummary($Summary)
    {
      $this->Summary = $Summary;
      return $this;
    }

    /**
     * @return StringLength1to1000
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to1000 $Description
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getGeoPoliticalAreaType()
    {
      return $this->GeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setGeoPoliticalAreaType($GeoPoliticalAreaType)
    {
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getGeoPoliticalAreaCode()
    {
      return $this->GeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeAdvisoryHistory
     */
    public function setGeoPoliticalAreaCode($GeoPoliticalAreaCode)
    {
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
      return $this;
    }

}
