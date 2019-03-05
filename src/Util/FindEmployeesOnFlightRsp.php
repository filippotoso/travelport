<?php

namespace FilippoToso\Travelport\Util;

class FindEmployeesOnFlightRsp extends BaseRsp
{

    /**
     * @var EmployeesOnFlight[] $EmployeesOnFlight
     */
    protected $EmployeesOnFlight = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
    }

    /**
     * @return EmployeesOnFlight[]
     */
    public function getEmployeesOnFlight()
    {
      return $this->EmployeesOnFlight;
    }

    /**
     * @param EmployeesOnFlight[] $EmployeesOnFlight
     * @return \FilippoToso\Travelport\Util\FindEmployeesOnFlightRsp
     */
    public function setEmployeesOnFlight(array $EmployeesOnFlight = null)
    {
      $this->EmployeesOnFlight = $EmployeesOnFlight;
      return $this;
    }

}
