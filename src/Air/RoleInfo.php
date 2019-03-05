<?php

namespace FilippoToso\Travelport\Air;

class RoleInfo
{

    /**
     * @var anonymous191 $Id
     */
    protected $Id = null;

    /**
     * @var anonymous192 $Name
     */
    protected $Name = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var anonymous193 $Description
     */
    protected $Description = null;

    /**
     * @param anonymous191 $Id
     * @param anonymous192 $Name
     * @param string $Source
     * @param anonymous193 $Description
     */
    public function __construct($Id = null, $Name = null, $Source = null, $Description = null)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Source = $Source;
      $this->Description = $Description;
    }

    /**
     * @return anonymous191
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param anonymous191 $Id
     * @return \FilippoToso\Travelport\Air\RoleInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return anonymous192
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous192 $Name
     * @return \FilippoToso\Travelport\Air\RoleInfo
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
     * @return \FilippoToso\Travelport\Air\RoleInfo
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return anonymous193
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param anonymous193 $Description
     * @return \FilippoToso\Travelport\Air\RoleInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
