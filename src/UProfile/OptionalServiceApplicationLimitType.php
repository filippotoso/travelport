<?php

namespace FilippoToso\Travelport\UProfile;

class OptionalServiceApplicationLimitType
{

    /**
     * @var OptionalServiceApplicabilityType $ApplicableLevel
     */
    protected $ApplicableLevel = null;

    /**
     * @var string $ProviderDefinedApplicableLevels
     */
    protected $ProviderDefinedApplicableLevels = null;

    /**
     * @var int $MaximumQuantity
     */
    protected $MaximumQuantity = null;

    /**
     * @var int $MinimumQuantity
     */
    protected $MinimumQuantity = null;

    /**
     * @param OptionalServiceApplicabilityType $ApplicableLevel
     * @param string $ProviderDefinedApplicableLevels
     * @param int $MaximumQuantity
     * @param int $MinimumQuantity
     */
    public function __construct($ApplicableLevel = null, $ProviderDefinedApplicableLevels = null, $MaximumQuantity = null, $MinimumQuantity = null)
    {
      $this->ApplicableLevel = $ApplicableLevel;
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
      $this->MaximumQuantity = $MaximumQuantity;
      $this->MinimumQuantity = $MinimumQuantity;
    }

    /**
     * @return OptionalServiceApplicabilityType
     */
    public function getApplicableLevel()
    {
      return $this->ApplicableLevel;
    }

    /**
     * @param OptionalServiceApplicabilityType $ApplicableLevel
     * @return \FilippoToso\Travelport\UProfile\OptionalServiceApplicationLimitType
     */
    public function setApplicableLevel($ApplicableLevel)
    {
      $this->ApplicableLevel = $ApplicableLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDefinedApplicableLevels()
    {
      return $this->ProviderDefinedApplicableLevels;
    }

    /**
     * @param string $ProviderDefinedApplicableLevels
     * @return \FilippoToso\Travelport\UProfile\OptionalServiceApplicationLimitType
     */
    public function setProviderDefinedApplicableLevels($ProviderDefinedApplicableLevels)
    {
      $this->ProviderDefinedApplicableLevels = $ProviderDefinedApplicableLevels;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumQuantity()
    {
      return $this->MaximumQuantity;
    }

    /**
     * @param int $MaximumQuantity
     * @return \FilippoToso\Travelport\UProfile\OptionalServiceApplicationLimitType
     */
    public function setMaximumQuantity($MaximumQuantity)
    {
      $this->MaximumQuantity = $MaximumQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumQuantity()
    {
      return $this->MinimumQuantity;
    }

    /**
     * @param int $MinimumQuantity
     * @return \FilippoToso\Travelport\UProfile\OptionalServiceApplicationLimitType
     */
    public function setMinimumQuantity($MinimumQuantity)
    {
      $this->MinimumQuantity = $MinimumQuantity;
      return $this;
    }

}
