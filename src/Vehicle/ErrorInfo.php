<?php

namespace FilippoToso\Travelport\Vehicle;

class ErrorInfo extends typeErrorInfo
{

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     */
    public function __construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
    }

}
