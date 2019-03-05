<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User ID, password and taget branch
    |--------------------------------------------------------------------------
    |
    | Here you can set your Travelport credentials. If you need them, you can register
    | here and get a trial ones:
    | https://developer.travelport.com/app/developer-network/request-formpage
    |
    |
    */

    'user_id' => env('TRAVELPORT_USER_ID'),
    'password' => env('TRAVELPORT_PASSWORD'),
    'target_branch' => env('TRAVELPORT_TARGET_BRANCH'),

    /*
    |--------------------------------------------------------------------------
    | Region of operation
    |--------------------------------------------------------------------------
    |
    | The region used to identify the right SOAP endpoint. Accepted values are:
    |
    | 'AMERICAS' for Americas
    | 'APAC' for Asia Pacific
    | 'EMEA' Europe, Middle East, Africa
    |
    */

    'region' => env('TRAVELPORT_REGION', 'AMERICAS'),

    /*
    |--------------------------------------------------------------------------
    | Production
    |--------------------------------------------------------------------------
    |
    | Specitfy if the API calls should be made on the production endpoints.
    | Preproduction endpoints are used by default.
    |
    */

    'production' => env('TRAVELPORT_PRODUCTION', false),

];
