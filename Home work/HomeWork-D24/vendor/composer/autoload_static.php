<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcda508e632f8be67c1aa7eedc1a318fd
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcda508e632f8be67c1aa7eedc1a318fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcda508e632f8be67c1aa7eedc1a318fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcda508e632f8be67c1aa7eedc1a318fd::$classMap;

        }, null, ClassLoader::class);
    }
}
