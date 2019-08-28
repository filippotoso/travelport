<?php

namespace FilippoToso\Travelport\Util;

class Document
{

    /**
     * @var int $Sequence
     */
    protected $Sequence = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Level
     */
    protected $Level = null;

    /**
     * @param int $Sequence
     * @param string $Type
     * @param string $Level
     */
    public function __construct($Sequence = null, $Type = null, $Level = null)
    {
      $this->Sequence = $Sequence;
      $this->Type = $Type;
      $this->Level = $Level;
    }

    /**
     * @return int
     */
    public function getSequence()
    {
      return $this->Sequence;
    }

    /**
     * @param int $Sequence
     * @return \FilippoToso\Travelport\Util\Document
     */
    public function setSequence($Sequence)
    {
      $this->Sequence = $Sequence;
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
     * @return \FilippoToso\Travelport\Util\Document
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Util\Document
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
