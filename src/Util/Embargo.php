<?php

namespace FilippoToso\Travelport\Util;

class Embargo
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var anonymous1059 $Name
     */
    protected $Name = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $SecondaryType
     */
    protected $SecondaryType = null;

    /**
     * @var typeMerchandisingService $Type
     */
    protected $Type = null;

    /**
     * @var anyURI $Url
     */
    protected $Url = null;

    /**
     * @var anonymous1060 $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @param typeRef $Key
     * @param typeCarrier $Carrier
     * @param typeRef $SegmentRef
     * @param anonymous1059 $Name
     * @param string $Text
     * @param string $SecondaryType
     * @param typeMerchandisingService $Type
     * @param anyURI $Url
     * @param anonymous1060 $ServiceSubCode
     */
    public function __construct($Key = null, $Carrier = null, $SegmentRef = null, $Name = null, $Text = null, $SecondaryType = null, $Type = null, $Url = null, $ServiceSubCode = null)
    {
      $this->Key = $Key;
      $this->Carrier = $Carrier;
      $this->SegmentRef = $SegmentRef;
      $this->Name = $Name;
      $this->Text = $Text;
      $this->SecondaryType = $SecondaryType;
      $this->Type = $Type;
      $this->Url = $Url;
      $this->ServiceSubCode = $ServiceSubCode;
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
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return anonymous1059
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous1059 $Name
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryType()
    {
      return $this->SecondaryType;
    }

    /**
     * @param string $SecondaryType
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setSecondaryType($SecondaryType)
    {
      $this->SecondaryType = $SecondaryType;
      return $this;
    }

    /**
     * @return typeMerchandisingService
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMerchandisingService $Type
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param anyURI $Url
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return anonymous1060
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param anonymous1060 $ServiceSubCode
     * @return \FilippoToso\Travelport\Util\Embargo
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

}
