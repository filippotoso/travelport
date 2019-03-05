# PHP client library for Travelport SOAP API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/filippotoso/travelport.svg?style=flat-square)](https://packagist.org/packages/filippotoso/travelport)
[![Total Downloads](https://img.shields.io/packagist/dt/filippotoso/travelport.svg?style=flat-square)](https://packagist.org/packages/filippotoso/travelport)

With this library you can call the Travelport SOAP methods in a object oriented way.

## Installation

You can install the package via composer:

```bash
composer require filippo-toso/travelport
```

## Usage

If you don't have the required credentials you can register for a trial on this page: https://developer.travelport.com/app/developer-network/request-formpage

Here is a pure PHP example:

```php
use FilippoToso\Travelport;

// Create the API client
$travelport = new Travelport\Travelport(
    'Universal API/uAPI123456789', // Travelport User ID 
    'ABCDEFGHILMNOQRSTUVZ', // Travelport Password     
    'P1234567', // Travelport Target Branch
    Travelport\Endpoints::REGION_EMEA, // Region
    false // Set to false to use pre-production endpoints
);

// Create a Time request on the System service
$request = (new System\TimeReq())
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = $travelport->execute($request);
printf('The current system time is %s', $response->getSystemTime());

// Create a Ping request on the System service
$request = (new System\PingReq())
    ->setPayload('Hello World!')
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = $travelport->execute($request);
printf('Travelport pinged back: %s', $response->getPayload());
```

This library supports almost all the requests and responses available. They can be executed in the same way:

- Create the response object
- Execute the request
- Use the methods in the answer to get the information you need

You can browser the library source code to understand which methods are available. Usually the request object names end with "Req" and the corrisponding responses end with "Rsp" (ie. System\TimeReq and System\TimeRsp).

### Laravel support

You can also use this library in your Laravel applications.

The first step whould be to publish the configuration file:

```
php artisan vendor:publish --tag=config --provider="FilippoToso\Travelport\TravelportServiceProvider"
```

Then insert your credentials in the config\travelport.php file.

Then you can execute requests with a code like this:

```php
use Travelport;

// Create a Time request on the System service
$request = (new System\TimeReq())
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = Travelport::execute($request);
printf('The current system time is %s', $response->getSystemTime());

// Create a Ping request on the System service
$request = (new System\PingReq())
    ->setPayload('Hello World!')
    ->setBillingPointOfSaleInfo(new System\BillingPointOfSaleInfo('UAPI')); // Don't know what this is, but it's required to complete a call :(

// Execute the request
$response = Travelport::execute($request);
printf('Travelport pinged back: %s', $response->getPayload());
```

### Schema version

The current version of this library supports the 18.4 schema version. I hope to keep it updated at least once a year. 

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Security

If you discover any security related issues, please email filippo.toso@creativepark.it instead of using the issue tracker.

## Credits

- [Filippo Toso](https://github.com/filippotoso)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
