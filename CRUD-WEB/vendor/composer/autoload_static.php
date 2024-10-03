<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafe19492726e55425664294685a587be
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitafe19492726e55425664294685a587be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitafe19492726e55425664294685a587be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitafe19492726e55425664294685a587be::$classMap;

        }, null, ClassLoader::class);
    }
}
