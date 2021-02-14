<?php

return [

    /*
     * Base URL.
     *
     * The base URL for all of your endpoints.
     */

    'base_url' => env('APP_URL', 'http://localhost'),

    /*
     * Structured.
     *
     * If you want folders to be generated based on namespace.
     */

    'structured' => false,

    /*
     * Auth Middleware.
     *
     * The middleware which wraps your authenticated API routes.
     *
     * E.g. auth:api, auth:sanctum
     */

    'auth_middleware' => 'auth:api',

    /*
     * Headers.
     *
     * The headers applied to all routes within the collection.
     */

    'headers' => [
        [
            'key' => 'Accept',
            'value' => 'application/json',
        ],
        [
            'key' => 'Content-Type',
            'value' => 'application/json',
        ],
    ],

];
