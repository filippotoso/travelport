<?php

namespace FilippoToso\Travelport\Rail;

class QuickResponse
{

    /**
     * @var boolean $FastResult
     */
    protected $FastResult = null;

    /**
     * @var string $MoreToken
     */
    protected $MoreToken = null;

    /**
     * @param boolean $FastResult
     * @param string $MoreToken
     */
    public function __construct($FastResult = null, $MoreToken = null)
    {
      $this->FastResult = $FastResult;
      $this->MoreToken = $MoreToken;
    }

    /**
     * @return boolean
     */
    public function getFastResult()
    {
      return $this->FastResult;
    }

    /**
     * @param boolean $FastResult
     * @return \FilippoToso\Travelport\Rail\QuickResponse
     */
    public function setFastResult($FastResult)
    {
      $this->FastResult = $FastResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getMoreToken()
    {
      return $this->MoreToken;
    }

    /**
     * @param string $MoreToken
     * @return \FilippoToso\Travelport\Rail\QuickResponse
     */
    public function setMoreToken($MoreToken)
    {
      $this->MoreToken = $MoreToken;
      return $this;
    }

}
