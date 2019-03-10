<?php

namespace FilippoToso\Travelport\Util;

class McoSearchResult
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var typeMCOStatus $Status
     */
    protected $Status = null;

    /**
     * @var typeMCOType $Type
     */
    protected $Type = null;

    /**
     * @var string $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @param Name $Name
     * @param \DateTime $CreateDate
     * @param string $Number
     * @param typeMCOStatus $Status
     * @param typeMCOType $Type
     * @param string $LocatorCode
     */
    public function __construct($Name = null, \DateTime $CreateDate = null, $Number = null, $Status = null, $Type = null, $LocatorCode = null)
    {
      $this->Name = $Name;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->Number = $Number;
      $this->Status = $Status;
      $this->Type = $Type;
      $this->LocatorCode = $LocatorCode;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeMCOStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeMCOStatus $Status
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeMCOType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMCOType $Type
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param string $LocatorCode
     * @return \FilippoToso\Travelport\Util\McoSearchResult
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

}
