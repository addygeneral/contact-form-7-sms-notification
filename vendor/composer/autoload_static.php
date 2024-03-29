<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf3bad0ab9185dbc4d476ea26a3f7e97b
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Urhitech\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Urhitech\\' => 
        array (
            0 => __DIR__ . '/..' . '/urhitech/urhitech-sms-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf3bad0ab9185dbc4d476ea26a3f7e97b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf3bad0ab9185dbc4d476ea26a3f7e97b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf3bad0ab9185dbc4d476ea26a3f7e97b::$classMap;

        }, null, ClassLoader::class);
    }
}
