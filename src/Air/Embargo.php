<?php

namespace FilippoToso\Travelport\Air;

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
     * @var anonymous1128 $Name
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
     * @var anonymous1129 $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @param typeRef $Key
     * @param typeCarrier $Carrier
     * @param typeRef $SegmentRef
     * @param anonymous1128 $Name
     * @param string $Text
     * @param string $SecondaryType
     * @param typeMerchandisingService $Type
     * @param anyURI $Url
     * @param anonymous1129 $ServiceSubCode
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
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return anonymous1128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous1128 $Name
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
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
     * @return \FilippoToso\Travelport\Air\Embargo
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return anonymous1129
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param anonymous1129 $ServiceSubCode
     * @return \FilippoToso\Travelport\Air\Embargo
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

}
