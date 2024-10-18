<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send all email
    | messages unless another mailer is explicitly specified when sending
    | the message. All additional mailers can be configured within the
    | "mailers" array. Examples of each type of mailer are provided.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers that can be used
    | when delivering an email. You may specify which one you're using for
    | your mailers below. You may also add additional mailers if needed.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'url' => env('MAIL_URL'),
            'host' => 'kingateketomfoundation.org',
            'port' => 465,
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => 'info@kingateketomfoundation.org',
            'password' => 'info_king_001_227',
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url(env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        // Add another mail configuration for support
        'support' => [
            'transport' => 'smtp',
            'host' => 'kingateketomfoundation.org',
            'port' => 465,
            'encryption' => env('SUPPORT_MAIL_ENCRYPTION', 'tls'),
            'username' => 'support@kingateketomfoundation.org',
            'password' => 'support_king_001_227',
            'timeout' => null,
            'auth_mode' => null,
        ],

        // Add another mail configuration for notifications
        'notifications' => [
            'transport' => 'smtp',
            'host' => env('NOTIFICATION_MAIL_HOST', 'smtp.mailtrap.io'),
            'port' => env('NOTIFICATION_MAIL_PORT', 2525),
            'encryption' => env('NOTIFICATION_MAIL_ENCRYPTION', 'tls'),
            'username' => env('NOTIFICATION_MAIL_USERNAME'),
            'password' => env('NOTIFICATION_MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all emails sent by your application to be sent from
    | the same address. Here you may specify a name and address that is
    | used globally for all emails that are sent by your application.
    |
    */

    'from' => [
        'address' =>  'info@kingatekefoundation.org',
        'name' =>'KingAtekeTom Foundation',
    ],

];
