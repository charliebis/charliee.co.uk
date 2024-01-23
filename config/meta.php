<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Meta information about the site
    |--------------------------------------------------------------------------
    */
    'icon' => [
        '32' => [
            'path' => env('META_ICON_32_PATH'),
            'type' => env('META_ICON_32_TYPE'),
        ],
        '200' => [
            'path' => env('META_ICON_200_PATH'),
            'type' => env('META_ICON_200_TYPE'),
        ],
        '500' => [
            'path' => env('META_ICON_500_PATH'),
            'type' => env('META_ICON_500_TYPE'),
        ],
    ],
    'personal_name' => env('META_PERSONAL_NAME'),
    'site_title' => env('META_SITE_TITLE'),
    'description' => env('META_DESCRIPTION'),
    'twitter_user' => env('META_TWITTER_USER'),
];
