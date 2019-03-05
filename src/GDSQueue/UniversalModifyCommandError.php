<?php

namespace FilippoToso\Travelport\GDSQueue;

class UniversalModifyCommandError
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeRef $UniversalModifyCmdKey
     */
    protected $UniversalModifyCmdKey = null;

    /**
     * @param string $_
     * @param typeRef $UniversalModifyCmdKey
     */
    public function __construct($_ = null, $UniversalModifyCmdKey = null)
    {
      $this->_ = $_;
      $this->UniversalModifyCmdKey = $UniversalModifyCmdKey;
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
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCommandError
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getUniversalModifyCmdKey()
    {
      return $this->UniversalModifyCmdKey;
    }

    /**
     * @param typeRef $UniversalModifyCmdKey
     * @return \FilippoToso\Travelport\GDSQueue\UniversalModifyCommandError
     */
    public function setUniversalModifyCmdKey($UniversalModifyCmdKey)
    {
      $this->UniversalModifyCmdKey = $UniversalModifyCmdKey;
      return $this;
    }

}
