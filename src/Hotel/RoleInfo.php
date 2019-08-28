<?php

namespace FilippoToso\Travelport\Hotel;

class RoleInfo
{

    /**
     * @var anonymous188 $Id
     */
    protected $Id = null;

    /**
     * @var anonymous189 $Name
     */
    protected $Name = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var anonymous190 $Description
     */
    protected $Description = null;

    /**
     * @param anonymous188 $Id
     * @param anonymous189 $Name
     * @param string $Source
     * @param anonymous190 $Description
     */
    public function __construct($Id = null, $Name = null, $Source = null, $Description = null)
    {
      $this->Id = $Id;
      $this->Name = $Name;
      $this->Source = $Source;
      $this->Description = $Description;
    }

    /**
     * @return anonymous188
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param anonymous188 $Id
     * @return \FilippoToso\Travelport\Hotel\RoleInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return anonymous189
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous189 $Name
     * @return \FilippoToso\Travelport\Hotel\RoleInfo
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
     * @return \FilippoToso\Travelport\Hotel\RoleInfo
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return anonymous190
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param anonymous190 $Description
     * @return \FilippoToso\Travelport\Hotel\RoleInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
