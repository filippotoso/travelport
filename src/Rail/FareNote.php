<?php

namespace FilippoToso\Travelport\Rail;

class FareNote
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var int $Precedence
     */
    protected $Precedence = null;

    /**
     * @var string $NoteName
     */
    protected $NoteName = null;

    /**
     * @var typeRef $FareInfoMessageRef
     */
    protected $FareInfoMessageRef = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param string $_
     * @param typeRef $Key
     * @param int $Precedence
     * @param string $NoteName
     * @param typeRef $FareInfoMessageRef
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($_ = null, $Key = null, $Precedence = null, $NoteName = null, $FareInfoMessageRef = null, $ElStat = null, $KeyOverride = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
      $this->Precedence = $Precedence;
      $this->NoteName = $NoteName;
      $this->FareInfoMessageRef = $FareInfoMessageRef;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrecedence()
    {
      return $this->Precedence;
    }

    /**
     * @param int $Precedence
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setPrecedence($Precedence)
    {
      $this->Precedence = $Precedence;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteName()
    {
      return $this->NoteName;
    }

    /**
     * @param string $NoteName
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setNoteName($NoteName)
    {
      $this->NoteName = $NoteName;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoMessageRef()
    {
      return $this->FareInfoMessageRef;
    }

    /**
     * @param typeRef $FareInfoMessageRef
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setFareInfoMessageRef($FareInfoMessageRef)
    {
      $this->FareInfoMessageRef = $FareInfoMessageRef;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Rail\FareNote
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
