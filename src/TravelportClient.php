<?php

namespace FilippoToso\Travelport;

class TravelportClient extends \SoapClient
{

    public function __doRequest($request, $location, $action, $version, $one_way = null)
    {
        // Workaround for https://github.com/Travelport/travelport-uapi-tutorial/issues/734
        $request = preg_replace('#xsi:type="(.*?)"#si', '', $request);
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
}
