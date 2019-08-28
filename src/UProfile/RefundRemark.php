<?php

namespace FilippoToso\Travelport\UProfile;

class RefundRemark
{

    /**
     * @var string $RemarkData
     */
    protected $RemarkData = null;

    /**
     * @param string $RemarkData
     */
    public function __construct($RemarkData = null)
    {
      $this->RemarkData = $RemarkData;
    }

    /**
     * @return string
     */
    public function getRemarkData()
    {
      return $this->RemarkData;
    }

    /**
     * @param string $RemarkData
     * @return \FilippoToso\Travelport\UProfile\RefundRemark
     */
    public function setRemarkData($RemarkData)
    {
      $this->RemarkData = $RemarkData;
      return $this;
    }

}
