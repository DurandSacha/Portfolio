<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array"
    |
    */

    //USE OTHER INFO IN PRODUCTION
    
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'dkim_selector' => 'sacha',
    'dkim_domain' => 'sachadurand.fr',    
    'dkim_passphrase' => '', 
    'dkim_private_key' => '-----BEGIN RSA PRIVATE KEY-----
MIICXwIBAAKBgQDLlVGFtSoFp9+g9cP4p4dzvq8hiRbVzY5iashan6BxNneMIhCb
Itst4G9KPSwUQlYEjAtHxSYntjrusgSRp8gsDlqtI1yvKtMzMXGBtmRvR2RYg/AZ
X4Xcc8JdAKYLLI9Ci5MXsDVKY/cNWVwAQykzGM+rnzeTuiNHPDsS/tdWHQIDAQAB
AoGBAKc/dEm0G2GqGD3TqbuNZengrV+PkAL1bBPOReqtWNGpPW0STzIj4Iw/5S3I
M34xQRlbM6kyfbYCL0gJV1eRzw9p+cEaB/apSUpWnODLgF0e2ITyL9G5DF9b/0Cw
QSB+XiwtWNVf4sj80GvohIUXz5ER6cA9WHOCRjQBSHY0MlzBAkEA0VqVK3BLbk2A
gjGP3Ko7FJDRbe7NPnQIVmK/b36vHx9Omqw6chJICJFnLgK4xSglGGhd1Z8M4NrZ
iH2Xvlya2wJBAPjxlhYoty/ug+XDS4F443v8XPbd5yHqYW0vZfT1X43wK0U/Z7zr
M88kVVUwb+gcGJG8WRbZVyxjomNX4fjZmGcCQQC5ZHH8ybDCuTc4FBPF4an4CFat
928iAzbu6PuGDLWf5eWB60rGgZHwpHKuuBJP5cET4DhYWETbSnKhADdEiFVJAkEA
isldDGOMpWtLG3hCix8TbBco2PSjnDPoNw/6vpNhv2cLKKMNubRDARPXgxPq/7NS
O0WPQX7P685sRQhE0hC1twJBAM73rqvaCF+9pVtC1Tu4ACLcocjHWOcbvUSCxKee
+y62GEQLiEdEyIUeGey2AFzwB73jpbjx6GiGag+NBBoKOvM=
-----END RSA PRIVATE KEY-----',

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Address
    |--------------------------------------------------------------------------
    |
    | Here you may provide the host address of the SMTP server used by your
    | applications. A default option is provided that is compatible with
    | the Mailgun mail service which will provide reliable deliveries.
    |
    */

    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Port
    |--------------------------------------------------------------------------
    |
    | This is the SMTP port used by your application to deliver e-mails to
    | users of the application. Like the host we have set this value to
    | stay compatible with the Mailgun e-mail application by default.
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    |--------------------------------------------------------------------------
    |
    | Here you may specify the encryption protocol that should be used when
    | the application send e-mail messages. A sensible default using the
    | transport layer security protocol should provide great security.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    |--------------------------------------------------------------------------
    |
    | If your SMTP server requires a username for authentication, you should
    | set it here. This will get used to authenticate with your server on
    | connection. You may also set the "password" value below this one.
    |
    */

    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | Sendmail System Path
    |--------------------------------------------------------------------------
    |
    | When using the "sendmail" driver to send e-mails, we will need to know
    | the path to where Sendmail lives on this server. A default path has
    | been provided here, which will work well on most of your systems.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channel
    |--------------------------------------------------------------------------
    |
    | If you are using the "log" driver, you may specify the logging channel
    | if you prefer to keep mail messages separate from other log entries
    | for simpler reading. Otherwise, the default channel will be used.
    |
    */

    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
