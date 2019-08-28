<?php

namespace FilippoToso\Travelport\Air;

class FareRuleFailureInfo
{

    /**
     * @var typeFareRuleFailureInfoReason[] $Reason
     */
    protected $Reason = null;

    /**
     * @param typeFareRuleFailureInfoReason[] $Reason
     */
    public function __construct(array $Reason = null)
    {
      $this->Reason = $Reason;
    }

    /**
     * @return typeFareRuleFailureInfoReason[]
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param typeFareRuleFailureInfoReason[] $Reason
     * @return \FilippoToso\Travelport\Air\FareRuleFailureInfo
     */
    public function setReason(array $Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
