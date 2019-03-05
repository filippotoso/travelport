<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleKeywordRsp extends BaseRsp
{

    /**
     * @var string[] $Text
     */
    protected $Text = null;

    /**
     * @var Keyword $Keyword
     */
    protected $Keyword = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Keyword $Keyword
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Keyword = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Keyword = $Keyword;
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordRsp
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return Keyword
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param Keyword $Keyword
     * @return \FilippoToso\Travelport\Vehicle\VehicleKeywordRsp
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

}
