<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Contact form recipient details
    |--------------------------------------------------------------------------
    |
    | Specify the email details to be used for the recipient of contact form
    | submissions.
    |
    */
    'email_to' => env('CONTACT_RECIPIENT_EMAIL'),
    'name_to' => env('CONTACT_RECIPIENT_NAME'),
    'email_from' => env('MAIL_FROM_ADDRESS'),
    'name_from' => env('MAIL_FROM_NAME'),
];
