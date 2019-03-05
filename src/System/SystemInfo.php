<?php

namespace FilippoToso\Travelport\System;

class SystemInfo
{

    /**
     * @var string $SystemType
     */
    protected $SystemType = null;

    /**
     * @var string $ApplicationVersion
     */
    protected $ApplicationVersion = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param string $SystemType
     * @param string $ApplicationVersion
     * @param string $Description
     */
    public function __construct($SystemType = null, $ApplicationVersion = null, $Description = null)
    {
      $this->SystemType = $SystemType;
      $this->ApplicationVersion = $ApplicationVersion;
      $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getSystemType()
    {
      return $this->SystemType;
    }

    /**
     * @param string $SystemType
     * @return \FilippoToso\Travelport\System\SystemInfo
     */
    public function setSystemType($SystemType)
    {
      $this->SystemType = $SystemType;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationVersion()
    {
      return $this->ApplicationVersion;
    }

    /**
     * @param string $ApplicationVersion
     * @return \FilippoToso\Travelport\System\SystemInfo
     */
    public function setApplicationVersion($ApplicationVersion)
    {
      $this->ApplicationVersion = $ApplicationVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\System\SystemInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
