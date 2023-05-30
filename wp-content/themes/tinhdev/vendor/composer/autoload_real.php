<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc200905420e8f0f209b6e2dde9ed79b9
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

        spl_autoload_register(array('ComposerAutoloaderInitc200905420e8f0f209b6e2dde9ed79b9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc200905420e8f0f209b6e2dde9ed79b9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc200905420e8f0f209b6e2dde9ed79b9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
