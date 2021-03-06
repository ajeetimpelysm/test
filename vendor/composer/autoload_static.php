<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59d74ab6e43b0bc603fb30de97a51a4
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DiDom\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DiDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/imangazaliev/didom/src/DiDom',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite59d74ab6e43b0bc603fb30de97a51a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite59d74ab6e43b0bc603fb30de97a51a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
