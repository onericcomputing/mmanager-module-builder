<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdb38253bf5601c99401e260b42b3a91
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'ee4cee3195e093bfc91e7754af9eefd5' => __DIR__ . '/..' . '/peridot-php/leo/src/Interfaces/_interface.bdd.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Peridot\\Scope\\' => 14,
            'Peridot\\Leo\\' => 12,
            'Peridot\\' => 8,
        ),
        'M' => 
        array (
            'Mmanager\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Peridot\\Scope\\' => 
        array (
            0 => __DIR__ . '/..' . '/peridot-php/peridot-scope/src',
        ),
        'Peridot\\Leo\\' => 
        array (
            0 => __DIR__ . '/..' . '/peridot-php/leo/src',
        ),
        'Peridot\\' => 
        array (
            0 => __DIR__ . '/..' . '/peridot-php/peridot/src',
        ),
        'Mmanager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static $classMap = array (
        'PHP_Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdb38253bf5601c99401e260b42b3a91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdb38253bf5601c99401e260b42b3a91::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcdb38253bf5601c99401e260b42b3a91::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcdb38253bf5601c99401e260b42b3a91::$classMap;

        }, null, ClassLoader::class);
    }
}