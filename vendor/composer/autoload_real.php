<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit44ef7f939da2f4f2466e89b6ab084687
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

        spl_autoload_register(array('ComposerAutoloaderInit44ef7f939da2f4f2466e89b6ab084687', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit44ef7f939da2f4f2466e89b6ab084687', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit44ef7f939da2f4f2466e89b6ab084687::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}