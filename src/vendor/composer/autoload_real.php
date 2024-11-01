<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit36d33f3953ac8679b2a9e1fb85df9c53
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit36d33f3953ac8679b2a9e1fb85df9c53', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit36d33f3953ac8679b2a9e1fb85df9c53', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit36d33f3953ac8679b2a9e1fb85df9c53::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}