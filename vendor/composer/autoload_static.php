<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0652da4a57a6e0bf25f599a2e39fd287
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0652da4a57a6e0bf25f599a2e39fd287::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0652da4a57a6e0bf25f599a2e39fd287::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
