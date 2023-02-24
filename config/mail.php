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

    'driver' => env('MAIL_DRIVER', 'smtp'),

    'dkim_selector' => 'sacha', // for example: 'Selector123'
    'dkim_domain' => 'sachadurand.fr',     // for example: 'myblog.com'
    'dkim_passphrase' => '', // leave empty if you didn’t protect the private key
    'dkim_private_key' => '-----BEGIN PRIVATE KEY-----
MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDLYjDGQ/7gTYop
2Ikk1YARaAd43FKX5UxN34zYztC6JGIZKfQMxHlJtkYLA4LJ08XPUIck3ZXf/s+P
NPL8aWefg3SHPhKy6UicSNhP4Eh5pCKEESrQ0SdWzI/g8D+UWkJR5gzXLnVxdXzE
yN7eboWOYG6rzfNSqyAR95IE0VTEMyZcQuM3K4hC8SNxt0JkBGf9RmHfaF/32mLu
pY7llkejPBP45WkUky+97cSAIcprrQadYpzEcCn1JCcCce4Pp0aSuKoeuF2HKuMd
yU6+PKPku+0v1x2otHaGyuTIjA3tHcTONguTK/duxucHXXaL9qSaV6AZyL3MY16z
xGfOlm/FAgMBAAECggEBAJCY1NiBCzpppmst2gNoD09QyM8yxT3c9iz/XOHf2CIf
L+d4HlzdauXvQ0kdS+U2PRKxzAN3ztCcFvFX0dGHFvcfvL9ScHTmyorid3gCm0Rw
X2HJ2sjviqp5cWmZJXrR2QjlKAfsre7merhln55AsY+SG9zl5bLGm1xqyVPHiB6c
giLgkpk5egxrqQ0c0wAASSu5U/ZTfsq4o9ByCcaS9/EI56pswrToPOBiOYBuv9Wc
S0o601eK+m1jekF3LORYd+LFkUBOGChjmplIRQUwwpuKsEJ0yE6fXHyT3vi8VWzX
u7ikRvkivC5z0vPiCsCg4CJCEF3vG9jcJvSaqMp2FMECgYEA8L6/gnmiqStWdAo7
As5elurU7wKYXPssWBS/ouyjZv1yZWpkk+7ho3Z6aYDBO2D1oXGSiwZwL0pMdxF0
80/knj7WiBq5z0NS50rX935FLQkSkw8E7EfctnnOLOFYVAKVq34k52Iog+6bZhfi
teEa1x1ZYMZssphZhV2OE65/n/0CgYEA2EVhl0yxY+Om6xb5FqtxIZXDsxp7s5JY
zSUBb5QuA9gIpHCcsX3C8aq8q+9/U0BRWcXtKIfH3GGEOzR2AVsWPv7mpidLC13r
uYOn2QnZbDgwW7y7UlBwTxmRLQ9CVEEz7z8fZUehJsWsI4YEW8zIQsjhAOC1P/s9
HIysbP9LZWkCgYB1/JYxJNnSXPn+3vCy3F9BSY/YH4Z6s2K1PF37REyE8hu5ll36
nm2ZRjySLlcFeeyIFfhDCIG8u4YkKLsPcA1UfOl5RNfhu1YLIwQbOJhAjRy8U/UO
s9141NN17W7zpVyi8qy1dcbzeeJRM82ZY9xapvih1D17fe0JzqMOBExqJQKBgHhx
W0I5kekBVWpDZwE7BUwg7dYG/7En5ZCJ9VzAd0fovhdmJ72pPjH8Vgqi3JPuk9+d
HNCfnaycGlomgzmKEr+OkcEizOZNrgOo0IdMtutP945/cwsKhSFoKbOgdd4aWeP5
kXCEDblcCNvXvQGq8DRRTw2AFzDEqGoH5dbl7oVRAoGBAN2jZNSLMb3gMw9j3XMa
j8UJceoYfxZLWspnQ+GQDanyNJaDX3NfC5m15+HgfRro42yX1ij2hcxLqmib2WDS
kmcV6NK1qeYeLguiiduv8xWuXsgYthZe2CJK2vAvsyApryfK9a1iCHOIyXM3y/nm
xIuRPk/JHVZDVcZSJn3RVRzY
-----END PRIVATE KEY-----',

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
