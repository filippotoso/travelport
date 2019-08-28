<?php

namespace FilippoToso\Travelport\Rail;

class UniversalRecordHistorySearchResult
{

    /**
     * @var string $Old
     */
    protected $Old = null;

    /**
     * @var string $New
     */
    protected $New = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

    /**
     * @var string $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $ElementType
     */
    protected $ElementType = null;

    /**
     * @var string $Action
     */
    protected $Action = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var anonymous515 $AgentOverride
     */
    protected $AgentOverride = null;

    /**
     * @param string $ModifiedBy
     * @param string $ModifiedDate
     * @param string $ElementType
     * @param string $Action
     * @param string $TransactionId
     * @param anonymous515 $AgentOverride
     */
    public function __construct($ModifiedBy = null, $ModifiedDate = null, $ElementType = null, $Action = null, $TransactionId = null, $AgentOverride = null)
    {
      $this->ModifiedBy = $ModifiedBy;
      $this->ModifiedDate = $ModifiedDate;
      $this->ElementType = $ElementType;
      $this->Action = $Action;
      $this->TransactionId = $TransactionId;
      $this->AgentOverride = $AgentOverride;
    }

    /**
     * @return string
     */
    public function getOld()
    {
      return $this->Old;
    }

    /**
     * @param string $Old
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setOld($Old)
    {
      $this->Old = $Old;
      return $this;
    }

    /**
     * @return string
     */
    public function getNew()
    {
      return $this->New;
    }

    /**
     * @param string $New
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setNew($New)
    {
      $this->New = $New;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getElementType()
    {
      return $this->ElementType;
    }

    /**
     * @param string $ElementType
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setElementType($ElementType)
    {
      $this->ElementType = $ElementType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param string $Action
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return anonymous515
     */
    public function getAgentOverride()
    {
      return $this->AgentOverride;
    }

    /**
     * @param anonymous515 $AgentOverride
     * @return \FilippoToso\Travelport\Rail\UniversalRecordHistorySearchResult
     */
    public function setAgentOverride($AgentOverride)
    {
      $this->AgentOverride = $AgentOverride;
      return $this;
    }

}
