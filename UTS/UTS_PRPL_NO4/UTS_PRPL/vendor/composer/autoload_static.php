<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46f77975e1d30c5914e5fdc4788084ed
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46f77975e1d30c5914e5fdc4788084ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46f77975e1d30c5914e5fdc4788084ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
