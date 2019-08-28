<?php

namespace FilippoToso\Travelport;

interface TravelportLogger
{
    public function log($type, $service, $request, $content);
}