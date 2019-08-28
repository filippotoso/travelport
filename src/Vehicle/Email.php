<?php

namespace FilippoToso\Travelport\Vehicle;

class Email
{

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeEmailType $Type
     */
    protected $Type = null;

    /**
     * @var typeEmailComment $Comment
     */
    protected $Comment = null;

    /**
     * @var string $EmailID
     */
    protected $EmailID = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeEmailType $Type
     * @param typeEmailComment $Comment
     * @param string $EmailID
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ProviderReservationInfoRef = null, $Key = null, $Type = null, $Comment = null, $EmailID = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->Type = $Type;
      $this->Comment = $Comment;
      $this->EmailID = $EmailID;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeEmailType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeEmailType $Type
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeEmailComment
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param typeEmailComment $Comment
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailID()
    {
      return $this->EmailID;
    }

    /**
     * @param string $EmailID
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setEmailID($EmailID)
    {
      $this->EmailID = $EmailID;
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
     * @return \FilippoToso\Travelport\Vehicle\Email
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
     * @return \FilippoToso\Travelport\Vehicle\Email
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
