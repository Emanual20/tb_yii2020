<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // 'viewPath' => '@common/mail',
            // // send all mails to a file by default. You have to set
            // // 'useFileTransport' to false and configure a transport
            // // for the mailer to send real emails.
            // 'useFileTransport' => true,
            'viewPath' => '@app/mailer',
            'useFileTransport' => false,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.live.com',
            'username' => '1766649097@qq.com',
            'password' => 'your-password',
            'port' => '587',
            'encryption' => 'tls',
            ],
        ],
    ],
];
