<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc07e70cda482b6b36658b2d2283f7a5c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc07e70cda482b6b36658b2d2283f7a5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc07e70cda482b6b36658b2d2283f7a5c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
