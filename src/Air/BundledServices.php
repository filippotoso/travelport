<?php

namespace FilippoToso\Travelport\Air;

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
     * @return \FilippoToso\Travelport\Air\BundledServices
     */
    public function setBundledService($BundledService)
    {
      $this->BundledService = $BundledService;
      return $this;
    }

}
