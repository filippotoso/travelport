<?php

namespace FilippoToso\Travelport\GDSQueue;

class DocumentRequired
{

    /**
     * @var string $DocType
     */
    protected $DocType = null;

    /**
     * @var boolean $IncludeExcludeUseInd
     */
    protected $IncludeExcludeUseInd = null;

    /**
     * @var string $DocId
     */
    protected $DocId = null;

    /**
     * @var string $AllowedIds
     */
    protected $AllowedIds = null;

    /**
     * @param string $DocType
     * @param boolean $IncludeExcludeUseInd
     * @param string $DocId
     * @param string $AllowedIds
     */
    public function __construct($DocType = null, $IncludeExcludeUseInd = null, $DocId = null, $AllowedIds = null)
    {
      $this->DocType = $DocType;
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      $this->DocId = $DocId;
      $this->AllowedIds = $AllowedIds;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
      return $this->DocType;
    }

    /**
     * @param string $DocType
     * @return \FilippoToso\Travelport\GDSQueue\DocumentRequired
     */
    public function setDocType($DocType)
    {
      $this->DocType = $DocType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeExcludeUseInd()
    {
      return $this->IncludeExcludeUseInd;
    }

    /**
     * @param boolean $IncludeExcludeUseInd
     * @return \FilippoToso\Travelport\GDSQueue\DocumentRequired
     */
    public function setIncludeExcludeUseInd($IncludeExcludeUseInd)
    {
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocId()
    {
      return $this->DocId;
    }

    /**
     * @param string $DocId
     * @return \FilippoToso\Travelport\GDSQueue\DocumentRequired
     */
    public function setDocId($DocId)
    {
      $this->DocId = $DocId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAllowedIds()
    {
      return $this->AllowedIds;
    }

    /**
     * @param string $AllowedIds
     * @return \FilippoToso\Travelport\GDSQueue\DocumentRequired
     */
    public function setAllowedIds($AllowedIds)
    {
      $this->AllowedIds = $AllowedIds;
      return $this;
    }

}
