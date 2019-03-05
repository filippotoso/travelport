<?php

namespace FilippoToso\Travelport;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Filippotoso\Travelport\Skeleton\SkeletonClass
 */
class TravelportFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'travelport';
    }
}
