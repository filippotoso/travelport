<?php

namespace FilippoToso\Travelport\Util;

class FareGuaranteeInfo
{

    /**
     * @var date $GuaranteeDate
     */
    protected $GuaranteeDate = null;

    /**
     * @var typeFareGuarantee $GuaranteeType
     */
    protected $GuaranteeType = null;

    /**
     * @param date $GuaranteeDate
     * @param typeFareGuarantee $GuaranteeType
     */
    public function __construct($GuaranteeDate = null, $GuaranteeType = null)
    {
      $this->GuaranteeDate = $GuaranteeDate;
      $this->GuaranteeType = $GuaranteeType;
    }

    /**
     * @return date
     */
    public function getGuaranteeDate()
    {
      return $this->GuaranteeDate;
    }

    /**
     * @param date $GuaranteeDate
     * @return \FilippoToso\Travelport\Util\FareGuaranteeInfo
     */
    public function setGuaranteeDate($GuaranteeDate)
    {
      $this->GuaranteeDate = $GuaranteeDate;
      return $this;
    }

    /**
     * @return typeFareGuarantee
     */
    public function getGuaranteeType()
    {
      return $this->GuaranteeType;
    }

    /**
     * @param typeFareGuarantee $GuaranteeType
     * @return \FilippoToso\Travelport\Util\FareGuaranteeInfo
     */
    public function setGuaranteeType($GuaranteeType)
    {
      $this->GuaranteeType = $GuaranteeType;
      return $this;
    }

}
