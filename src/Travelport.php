<?php

namespace FilippoToso\Travelport;

use FilippoToso\Travelport\Exceptions\MissingBindingsException;
use FilippoToso\Travelport\Exceptions\InvalidRegionException;
use FilippoToso\Travelport\System;

class Travelport
{
    protected $userId = '';
    protected $password = '';
    protected $region = Endpoints::REGION_AMERICAS;
    protected $production = false;
    protected $targetBranch = null;

    public function __construct($userId, $password, $targetBranch = null, $region = Endpoints::REGION_AMERICAS, $production = false)
    {
        $this->userId = $userId;
        $this->password = $password;
        $this->region = $region;
        $this->targetBranch = $targetBranch;
        $this->production = $production;
    }

    public function execute($request)
    {
        if (is_null($request->getTargetBranch())) {
            $request->setTargetBranch($this->targetBranch);
        }

        $service = $this->getService($request);
        return $service->__soapCall('service', [$request]);
    }

    protected function getService($request)
    {
        $serviceUrl = $this->getServiceUrl($request);
        $options = $this->getOptions();

        $class = get_class($request);
        $binding = Bindings::get($class);

        $service = new $binding['service']($options, $binding['wsdl']);
        $service->__setLocation($serviceUrl);

        return $service;
    }

    protected function getServiceUrl($request)
    {
        $validRegions = [Endpoints::REGION_AMERICAS, Endpoints::REGION_APAC, Endpoints::REGION_EMEA];

        if (!in_array($this->region, $validRegions)) {
            throw new InvalidRegionException('Invalid region: ' . $this->region);
        }

        $class = get_class($request);
        $binding = Bindings::get($class);

        // TODO: Implement sharedUprofile support
        
        if ($this->region == Endpoints::REGION_AMERICAS) {
            return $this->production ? Endpoints::PRODUCTION_AMERICAS . $binding['url'] : Endpoints::PREPRODUCTION_AMERICAS . $binding['url'];
        } elseif ($this->region == Endpoints::REGION_APAC) {
            return $this->production ? Endpoints::PRODUCTION_APAC . $binding['url']: Endpoints::PREPRODUCTION_APAC . $binding['url'];
        } elseif ($this->region == Endpoints::REGION_EMEA) {
            return $this->production ? Endpoints::PRODUCTION_EMEA . $binding['url'] : Endpoints::PREPRODUCTION_EMEA . $binding['url'];
        }

        return false;
    }

    protected function getOptions()
    {
        return [
            'trace' => 1,
            'exceptions' => true,
            'encoding' => 'UTF-8',
            'login' => $this->userId,
            'password' => $this->password,
            'stream_context' => stream_context_create([
                'http' => [
                    'header' => [
                        'Content-Type: text/xml; charset = UTF-8',
                        'Accept-Encoding: gzip, deflate',
                    ],
                ],
                'ssl' => [
                    // 'ciphers' => 'RC4-SHA'
                ],
            ]),
        ];
    }
}
