<?php

namespace FilippoToso\Travelport\GDSQueue;

class RoomConfirmationCodes
{

    /**
     * @var string[] $ConfirmationCode
     */
    protected $ConfirmationCode = null;

    /**
     * @param string[] $ConfirmationCode
     */
    public function __construct(array $ConfirmationCode = null)
    {
      $this->ConfirmationCode = $ConfirmationCode;
    }

    /**
     * @return string[]
     */
    public function getConfirmationCode()
    {
      return $this->ConfirmationCode;
    }

    /**
     * @param string[] $ConfirmationCode
     * @return \FilippoToso\Travelport\GDSQueue\RoomConfirmationCodes
     */
    public function setConfirmationCode(array $ConfirmationCode)
    {
      $this->ConfirmationCode = $ConfirmationCode;
      return $this;
    }

}
