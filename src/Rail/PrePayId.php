<?php

namespace FilippoToso\Travelport\Rail;

class PrePayId
{

    /**
     * @var CompanyName $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var typeCardNumber $Id
     */
    protected $Id = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param CompanyName $CompanyName
     * @param typeCardNumber $Id
     * @param string $Type
     */
    public function __construct($CompanyName = null, $Id = null, $Type = null)
    {
      $this->CompanyName = $CompanyName;
      $this->Id = $Id;
      $this->Type = $Type;
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param CompanyName $CompanyName
     * @return \FilippoToso\Travelport\Rail\PrePayId
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param typeCardNumber $Id
     * @return \FilippoToso\Travelport\Rail\PrePayId
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Rail\PrePayId
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
