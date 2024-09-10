<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2b3c3a5827af461704baddaa70c307e
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Idcap\\CrudWeb\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Idcap\\CrudWeb\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2b3c3a5827af461704baddaa70c307e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2b3c3a5827af461704baddaa70c307e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2b3c3a5827af461704baddaa70c307e::$classMap;

        }, null, ClassLoader::class);
    }
}