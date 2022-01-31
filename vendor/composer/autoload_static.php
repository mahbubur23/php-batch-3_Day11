<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d42fef2b2437a91e4f73489a55fa694
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d42fef2b2437a91e4f73489a55fa694::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d42fef2b2437a91e4f73489a55fa694::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d42fef2b2437a91e4f73489a55fa694::$classMap;

        }, null, ClassLoader::class);
    }
}
