<?php

// autoload_framework_real.php @generated by Composer

class ComposerAutoloaderInit18df3b902661a3e6ea0202b0f551a1a9
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit18df3b902661a3e6ea0202b0f551a1a9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit18df3b902661a3e6ea0202b0f551a1a9', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_framework_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }
        $loader->register(true);

        return $loader;
    }
}
