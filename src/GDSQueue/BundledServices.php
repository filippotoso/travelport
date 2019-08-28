<?php

namespace FilippoToso\Travelport\GDSQueue;

class BundledServices
{

    /**
     * @var BundledService $BundledService
     */
    protected $BundledService = null;

    /**
     * @param BundledService $BundledService
     */
    public function __construct($BundledService = null)
    {
      $this->BundledService = $BundledService;
    }

    /**
     * @return BundledService
     */
    public function getBundledService()
    {
      return $this->BundledService;
    }

    /**
     * @param BundledService $BundledService
     * @return \FilippoToso\Travelport\GDSQueue\BundledServices
     */
    public function setBundledService($BundledService)
    {
      $this->BundledService = $BundledService;
      return $this;
    }

}
