<?php

namespace FilippoToso\Travelport\Rail;

class MCORemark
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var boolean $AdditionalRmk
     */
    protected $AdditionalRmk = null;

    /**
     * @param string $_
     * @param boolean $AdditionalRmk
     */
    public function __construct($_, $AdditionalRmk)
    {
      $this->_ = $_;
      $this->AdditionalRmk = $AdditionalRmk;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\MCORemark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalRmk()
    {
      return $this->AdditionalRmk;
    }

    /**
     * @param boolean $AdditionalRmk
     * @return \FilippoToso\Travelport\Rail\MCORemark
     */
    public function setAdditionalRmk($AdditionalRmk)
    {
      $this->AdditionalRmk = $AdditionalRmk;
      return $this;
    }

}
