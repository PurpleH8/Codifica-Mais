<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36cc1e3c9d112c996a65b798d75b1207
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iro\\Vedor\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iro\\Vedor\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit36cc1e3c9d112c996a65b798d75b1207::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36cc1e3c9d112c996a65b798d75b1207::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36cc1e3c9d112c996a65b798d75b1207::$classMap;

        }, null, ClassLoader::class);
    }
}
