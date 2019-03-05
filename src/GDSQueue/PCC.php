<?php

namespace FilippoToso\Travelport\GDSQueue;

class PCC
{

    /**
     * @var OverridePCC $OverridePCC
     */
    protected $OverridePCC = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var TicketAgency $TicketAgency
     */
    protected $TicketAgency = null;

    /**
     * @param OverridePCC $OverridePCC
     * @param PointOfSale $PointOfSale
     * @param TicketAgency $TicketAgency
     */
    public function __construct($OverridePCC = null, $PointOfSale = null, $TicketAgency = null)
    {
      $this->OverridePCC = $OverridePCC;
      $this->PointOfSale = $PointOfSale;
      $this->TicketAgency = $TicketAgency;
    }

    /**
     * @return OverridePCC
     */
    public function getOverridePCC()
    {
      return $this->OverridePCC;
    }

    /**
     * @param OverridePCC $OverridePCC
     * @return \FilippoToso\Travelport\GDSQueue\PCC
     */
    public function setOverridePCC($OverridePCC)
    {
      $this->OverridePCC = $OverridePCC;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\GDSQueue\PCC
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return TicketAgency
     */
    public function getTicketAgency()
    {
      return $this->TicketAgency;
    }

    /**
     * @param TicketAgency $TicketAgency
     * @return \FilippoToso\Travelport\GDSQueue\PCC
     */
    public function setTicketAgency($TicketAgency)
    {
      $this->TicketAgency = $TicketAgency;
      return $this;
    }

}
