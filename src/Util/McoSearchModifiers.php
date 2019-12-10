<?php

namespace FilippoToso\Travelport\Util;

class McoSearchModifiers
{

    /**
     * @var typeMCOType $Type
     */
    protected $Type = null;

    /**
     * @var typeMCOStatus $Status
     */
    protected $Status = null;

    /**
     * @var anonymous1124 $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var anonymous1125 $StartFromResult
     */
    protected $StartFromResult = null;

    /**
     * @var boolean $IncludeName
     */
    protected $IncludeName = null;

    /**
     * @param typeMCOType $Type
     * @param typeMCOStatus $Status
     * @param anonymous1124 $MaxResults
     * @param anonymous1125 $StartFromResult
     * @param boolean $IncludeName
     */
    public function __construct($Type = null, $Status = null, $MaxResults = null, $StartFromResult = null, $IncludeName = null)
    {
      $this->Type = $Type;
      $this->Status = $Status;
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
      $this->IncludeName = $IncludeName;
    }

    /**
     * @return typeMCOType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMCOType $Type
     * @return \FilippoToso\Travelport\Util\McoSearchModifiers
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeMCOStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeMCOStatus $Status
     * @return \FilippoToso\Travelport\Util\McoSearchModifiers
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return anonymous1124
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param anonymous1124 $MaxResults
     * @return \FilippoToso\Travelport\Util\McoSearchModifiers
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return anonymous1125
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param anonymous1125 $StartFromResult
     * @return \FilippoToso\Travelport\Util\McoSearchModifiers
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeName()
    {
      return $this->IncludeName;
    }

    /**
     * @param boolean $IncludeName
     * @return \FilippoToso\Travelport\Util\McoSearchModifiers
     */
    public function setIncludeName($IncludeName)
    {
      $this->IncludeName = $IncludeName;
      return $this;
    }

}
