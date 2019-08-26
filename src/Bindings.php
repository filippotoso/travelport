<?php

namespace FilippoToso\Travelport;

use FilippoToso\Travelport\Exceptions\MissingBindingsException;

use FilippoToso\Travelport\System;

class Bindings
{
    protected static $bindings = [
		System\PingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemPingBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\TimeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemTimeBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\SystemInfoReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemInfoBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\ExternalCacheAccessReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/ExternalCacheAccessBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'ExternalCacheAccessService',
		],

    ];

    public static function get($class = null)
    {
        if (is_null($class)) {
            return static::$bindings;
        }

        if (!static::has($class)) {
            throw new MissingBindingsException('Missing binding: ' . $class);
        }

        return static::$bindings[$class];
    }

    public static function has($class)
    {
        return isset(static::$bindings[$class]);
    }
}
