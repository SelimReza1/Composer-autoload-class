<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcceb31ef31e43143442be2efe0a12956
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'countries\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'countries\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcceb31ef31e43143442be2efe0a12956::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcceb31ef31e43143442be2efe0a12956::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
