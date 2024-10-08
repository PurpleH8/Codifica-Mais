<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita817e2adce2961cc2b306e4bb94f8cbc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita817e2adce2961cc2b306e4bb94f8cbc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita817e2adce2961cc2b306e4bb94f8cbc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita817e2adce2961cc2b306e4bb94f8cbc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
