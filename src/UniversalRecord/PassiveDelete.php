<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PassiveDelete
{

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    protected $ReservationLocatorCode = null;

    /**
     * @var typeElement $Element
     */
    protected $Element = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeElement $Element
     * @param typeRef $Key
     */
    public function __construct($ReservationLocatorCode = null, $Element = null, $Key = null)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->Element = $Element;
      $this->Key = $Key;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveDelete
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeElement
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeElement $Element
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveDelete
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UniversalRecord\PassiveDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
