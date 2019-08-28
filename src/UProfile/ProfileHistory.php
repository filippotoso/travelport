<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileHistory
{

    /**
     * @var HistoryElement $HistoryElement
     */
    protected $HistoryElement = null;

    /**
     * @var UNKNOWN $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @var typeProfileID $CreatedByAgentID
     */
    protected $CreatedByAgentID = null;

    /**
     * @var typeAgentCode $CreatedByAgentUserName
     */
    protected $CreatedByAgentUserName = null;

    /**
     * @var \DateTime $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var typeProfileID $LastModifiedByAgentID
     */
    protected $LastModifiedByAgentID = null;

    /**
     * @var typeAgentCode $LastModifiedByAgentUserName
     */
    protected $LastModifiedByAgentUserName = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param HistoryElement $HistoryElement
     * @param UNKNOWN $ProfileName
     * @param typeProfileID $CreatedByAgentID
     * @param typeAgentCode $CreatedByAgentUserName
     * @param \DateTime $CreatedDate
     * @param typeProfileID $LastModifiedByAgentID
     * @param typeAgentCode $LastModifiedByAgentUserName
     * @param \DateTime $LastModifiedDate
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     */
    public function __construct($HistoryElement = null, $ProfileName = null, $CreatedByAgentID = null, $CreatedByAgentUserName = null, \DateTime $CreatedDate = null, $LastModifiedByAgentID = null, $LastModifiedByAgentUserName = null, \DateTime $LastModifiedDate = null, $ProfileID = null, $ProfileType = null)
    {
      $this->HistoryElement = $HistoryElement;
      $this->ProfileName = $ProfileName;
      $this->CreatedByAgentID = $CreatedByAgentID;
      $this->CreatedByAgentUserName = $CreatedByAgentUserName;
      $this->CreatedDate = $CreatedDate ? $CreatedDate->format(\DateTime::ATOM) : null;
      $this->LastModifiedByAgentID = $LastModifiedByAgentID;
      $this->LastModifiedByAgentUserName = $LastModifiedByAgentUserName;
      $this->LastModifiedDate = $LastModifiedDate ? $LastModifiedDate->format(\DateTime::ATOM) : null;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return HistoryElement
     */
    public function getHistoryElement()
    {
      return $this->HistoryElement;
    }

    /**
     * @param HistoryElement $HistoryElement
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setHistoryElement($HistoryElement)
    {
      $this->HistoryElement = $HistoryElement;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param UNKNOWN $ProfileName
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getCreatedByAgentID()
    {
      return $this->CreatedByAgentID;
    }

    /**
     * @param typeProfileID $CreatedByAgentID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setCreatedByAgentID($CreatedByAgentID)
    {
      $this->CreatedByAgentID = $CreatedByAgentID;
      return $this;
    }

    /**
     * @return typeAgentCode
     */
    public function getCreatedByAgentUserName()
    {
      return $this->CreatedByAgentUserName;
    }

    /**
     * @param typeAgentCode $CreatedByAgentUserName
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setCreatedByAgentUserName($CreatedByAgentUserName)
    {
      $this->CreatedByAgentUserName = $CreatedByAgentUserName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->CreatedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setCreatedDate(\DateTime $CreatedDate)
    {
      $this->CreatedDate = $CreatedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getLastModifiedByAgentID()
    {
      return $this->LastModifiedByAgentID;
    }

    /**
     * @param typeProfileID $LastModifiedByAgentID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setLastModifiedByAgentID($LastModifiedByAgentID)
    {
      $this->LastModifiedByAgentID = $LastModifiedByAgentID;
      return $this;
    }

    /**
     * @return typeAgentCode
     */
    public function getLastModifiedByAgentUserName()
    {
      return $this->LastModifiedByAgentUserName;
    }

    /**
     * @param typeAgentCode $LastModifiedByAgentUserName
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setLastModifiedByAgentUserName($LastModifiedByAgentUserName)
    {
      $this->LastModifiedByAgentUserName = $LastModifiedByAgentUserName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\ProfileHistory
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
