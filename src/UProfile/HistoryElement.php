<?php

namespace FilippoToso\Travelport\UProfile;

class HistoryElement
{

    /**
     * @var typeHistorySubElement $Original
     */
    protected $Original = null;

    /**
     * @var typeHistorySubElement $New
     */
    protected $New = null;

    /**
     * @var typeAction $Action
     */
    protected $Action = null;

    /**
     * @var typeProfileID $ModifiedByAgentID
     */
    protected $ModifiedByAgentID = null;

    /**
     * @var typeAgentCode $ModifiedByAgentUserName
     */
    protected $ModifiedByAgentUserName = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var anonymous599 $Component
     */
    protected $Component = null;

    /**
     * @var anonymous600 $CorrelationElement
     */
    protected $CorrelationElement = null;

    /**
     * @var StringLength1to128 $CorrelationValue
     */
    protected $CorrelationValue = null;

    /**
     * @param typeAction $Action
     * @param typeProfileID $ModifiedByAgentID
     * @param typeAgentCode $ModifiedByAgentUserName
     * @param \DateTime $ModifiedDate
     * @param anonymous599 $Component
     * @param anonymous600 $CorrelationElement
     * @param StringLength1to128 $CorrelationValue
     */
    public function __construct($Action = null, $ModifiedByAgentID = null, $ModifiedByAgentUserName = null, \DateTime $ModifiedDate = null, $Component = null, $CorrelationElement = null, $CorrelationValue = null)
    {
      $this->Action = $Action;
      $this->ModifiedByAgentID = $ModifiedByAgentID;
      $this->ModifiedByAgentUserName = $ModifiedByAgentUserName;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->Component = $Component;
      $this->CorrelationElement = $CorrelationElement;
      $this->CorrelationValue = $CorrelationValue;
    }

    /**
     * @return typeHistorySubElement
     */
    public function getOriginal()
    {
      return $this->Original;
    }

    /**
     * @param typeHistorySubElement $Original
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setOriginal($Original)
    {
      $this->Original = $Original;
      return $this;
    }

    /**
     * @return typeHistorySubElement
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param typeHistorySubElement $New
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

    /**
     * @return typeAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param typeAction $Action
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getModifiedByAgentID()
    {
      return $this->ModifiedByAgentID;
    }

    /**
     * @param typeProfileID $ModifiedByAgentID
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setModifiedByAgentID($ModifiedByAgentID)
    {
      $this->ModifiedByAgentID = $ModifiedByAgentID;
      return $this;
    }

    /**
     * @return typeAgentCode
     */
    public function getModifiedByAgentUserName()
    {
      return $this->ModifiedByAgentUserName;
    }

    /**
     * @param typeAgentCode $ModifiedByAgentUserName
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setModifiedByAgentUserName($ModifiedByAgentUserName)
    {
      $this->ModifiedByAgentUserName = $ModifiedByAgentUserName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous599
     */
    public function getComponent()
    {
      return $this->Component;
    }

    /**
     * @param anonymous599 $Component
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setComponent($Component)
    {
      $this->Component = $Component;
      return $this;
    }

    /**
     * @return anonymous600
     */
    public function getCorrelationElement()
    {
      return $this->CorrelationElement;
    }

    /**
     * @param anonymous600 $CorrelationElement
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setCorrelationElement($CorrelationElement)
    {
      $this->CorrelationElement = $CorrelationElement;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getCorrelationValue()
    {
      return $this->CorrelationValue;
    }

    /**
     * @param StringLength1to128 $CorrelationValue
     * @return \FilippoToso\Travelport\UProfile\HistoryElement
     */
    public function setCorrelationValue($CorrelationValue)
    {
      $this->CorrelationValue = $CorrelationValue;
      return $this;
    }

}
