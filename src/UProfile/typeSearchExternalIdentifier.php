<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchExternalIdentifier
{

    /**
     * @var StringLength1to255 $ExtID
     */
    protected $ExtID = null;

    /**
     * @var StringLength1to128 $Source
     */
    protected $Source = null;

    /**
     * @param StringLength1to255 $ExtID
     * @param StringLength1to128 $Source
     */
    public function __construct($ExtID = null, $Source = null)
    {
      $this->ExtID = $ExtID;
      $this->Source = $Source;
    }

    /**
     * @return StringLength1to255
     */
    public function getExtID()
    {
      return $this->ExtID;
    }

    /**
     * @param StringLength1to255 $ExtID
     * @return \FilippoToso\Travelport\UProfile\typeSearchExternalIdentifier
     */
    public function setExtID($ExtID)
    {
      $this->ExtID = $ExtID;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param StringLength1to128 $Source
     * @return \FilippoToso\Travelport\UProfile\typeSearchExternalIdentifier
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
