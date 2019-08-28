<?php

namespace FilippoToso\Travelport\UProfile;

class RoleInfo
{

    /**
     * @var anonymous179 $Id
     */
    protected $Id = null;

    /**
     * @var anonymous180 $Name
     */
    protected $Name = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var anonymous181 $Description
     */
    protected $Description = null;

    /**
     * @param anonymous179 $Id
     * @param anonymous180 $Name
     * @param string $Source
     * @param anonymous181 $Description
     */
    public function __construct($Id = null, $Name = null, $Source = null, $Description = null)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Source = $Source;
      $this->Description = $Description;
    }

    /**
     * @return anonymous179
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param anonymous179 $Id
     * @return \FilippoToso\Travelport\UProfile\RoleInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return anonymous180
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous180 $Name
     * @return \FilippoToso\Travelport\UProfile\RoleInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FilippoToso\Travelport\UProfile\RoleInfo
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return anonymous181
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param anonymous181 $Description
     * @return \FilippoToso\Travelport\UProfile\RoleInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
