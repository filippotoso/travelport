<?php

namespace FilippoToso\Travelport\Air;

class SessionContext
{

    /**
     * @var SessTok $SessTok
     */
    protected $SessTok = null;

    /**
     * @var SessProp[] $SessProp
     */
    protected $SessProp = null;

    /**
     * @param SessTok $SessTok
     * @param SessProp[] $SessProp
     */
    public function __construct($SessTok = null, array $SessProp = null)
    {
      $this->SessTok = $SessTok;
      $this->SessProp = $SessProp;
    }

    /**
     * @return SessTok
     */
    public function getSessTok()
    {
      return $this->SessTok;
    }

    /**
     * @param SessTok $SessTok
     * @return \FilippoToso\Travelport\Air\SessionContext
     */
    public function setSessTok($SessTok)
    {
      $this->SessTok = $SessTok;
      return $this;
    }

    /**
     * @return SessProp[]
     */
    public function getSessProp()
    {
      return $this->SessProp;
    }

    /**
     * @param SessProp[] $SessProp
     * @return \FilippoToso\Travelport\Air\SessionContext
     */
    public function setSessProp(array $SessProp)
    {
      $this->SessProp = $SessProp;
      return $this;
    }

}
