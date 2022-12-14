<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1232c66edff54da78ca305d83eee213
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1232c66edff54da78ca305d83eee213::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1232c66edff54da78ca305d83eee213::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1232c66edff54da78ca305d83eee213::$classMap;

        }, null, ClassLoader::class);
    }
}
