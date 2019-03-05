<?php

namespace FilippoToso\Travelport\GDSQueue;

class APISRequirements
{

    /**
     * @var Document $Document
     */
    protected $Document = null;

    /**
     * @var UNKNOWN $Key
     */
    protected $Key = null;

    /**
     * @var string $Level
     */
    protected $Level = null;

    /**
     * @var boolean $GenderRequired
     */
    protected $GenderRequired = null;

    /**
     * @var boolean $DateOfBirthRequired
     */
    protected $DateOfBirthRequired = null;

    /**
     * @var string $RequiredDocuments
     */
    protected $RequiredDocuments = null;

    /**
     * @var boolean $NationalityRequired
     */
    protected $NationalityRequired = null;

    /**
     * @param Document $Document
     * @param UNKNOWN $Key
     * @param string $Level
     * @param boolean $GenderRequired
     * @param boolean $DateOfBirthRequired
     * @param string $RequiredDocuments
     * @param boolean $NationalityRequired
     */
    public function __construct($Document = null, $Key = null, $Level = null, $GenderRequired = null, $DateOfBirthRequired = null, $RequiredDocuments = null, $NationalityRequired = null)
    {
      $this->Document = $Document;
      $this->Key = $Key;
      $this->Level = $Level;
      $this->GenderRequired = $GenderRequired;
      $this->DateOfBirthRequired = $DateOfBirthRequired;
      $this->RequiredDocuments = $RequiredDocuments;
      $this->NationalityRequired = $NationalityRequired;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param Document $Document
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param UNKNOWN $Key
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param string $Level
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenderRequired()
    {
      return $this->GenderRequired;
    }

    /**
     * @param boolean $GenderRequired
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setGenderRequired($GenderRequired)
    {
      $this->GenderRequired = $GenderRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDateOfBirthRequired()
    {
      return $this->DateOfBirthRequired;
    }

    /**
     * @param boolean $DateOfBirthRequired
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setDateOfBirthRequired($DateOfBirthRequired)
    {
      $this->DateOfBirthRequired = $DateOfBirthRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequiredDocuments()
    {
      return $this->RequiredDocuments;
    }

    /**
     * @param string $RequiredDocuments
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setRequiredDocuments($RequiredDocuments)
    {
      $this->RequiredDocuments = $RequiredDocuments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalityRequired()
    {
      return $this->NationalityRequired;
    }

    /**
     * @param boolean $NationalityRequired
     * @return \FilippoToso\Travelport\GDSQueue\APISRequirements
     */
    public function setNationalityRequired($NationalityRequired)
    {
      $this->NationalityRequired = $NationalityRequired;
      return $this;
    }

}
